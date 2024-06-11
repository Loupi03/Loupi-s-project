<?php
session_start();
include 'connection.php';

// Check if the user is an admin
if (!isset($_SESSION['is_admin'])) {
    $_SESSION['is_admin'] = false;
}
$is_admin = $_SESSION['is_admin'];

// Fetch game details based on game_id passed in the URL
$game_id = isset($_GET['game_id']) ? intval($_GET['game_id']) : 0;
$sql = "SELECT * FROM games WHERE game_id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $game_id);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    $game = $result->fetch_assoc();
} else {
    die("Game not found");
}

$stmt->close();

// Fetch related games excluding the current game
$related_sql = "SELECT * FROM games WHERE game_id != ? LIMIT 5"; // Limit to 5 related games
$related_stmt = $conn->prepare($related_sql);
$related_stmt->bind_param("i", $game_id);
$related_stmt->execute();
$related_result = $related_stmt->get_result();
$related_games = [];

while ($row = $related_result->fetch_assoc()) {
    $related_games[] = $row;
}

$related_stmt->close();

// Fetch reviews for the current game
$review_sql = "SELECT * FROM reviews WHERE game_id = ?";
$review_stmt = $conn->prepare($review_sql);
$review_stmt->bind_param("i", $game_id);
$review_stmt->execute();
$review_result = $review_stmt->get_result();
$reviews = [];

while ($row = $review_result->fetch_assoc()) {
    $user_id = $row['user_id'];
    $user_sql = "SELECT name FROM users WHERE user_id = ?";
    $user_stmt = $conn->prepare($user_sql);
    $user_stmt->bind_param("i", $user_id);
    $user_stmt->execute();
    $user_result = $user_stmt->get_result();

    if ($user_result->num_rows > 0) {
        $user = $user_result->fetch_assoc();
        $row['user_name'] = $user['name'];
    } else {
        $row['user_name'] = "Unknown";
    }

    $reviews[] = $row;

    $user_stmt->close();
}

$review_stmt->close();
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title><?php echo htmlspecialchars($game['name']); ?></title>
    <link rel="icon" href="../Project/assets/images/Loupi.png">
    <link rel="stylesheet" href="fbi.css">
    <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/fontawesome.css">
</head>
<body>
    <?php include "menu.php"; ?>
    
    <div class="page-heading header-text">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h3><?php echo htmlspecialchars($game['name']); ?></h3>
                    <span class="breadcrumb"><a href="index.php">Home</a> > <a href="our shop.php"> Our Shop</a> > <?php echo htmlspecialchars($game['name']); ?>
                    <?php if ($is_admin): ?>
                        > <a href="edit_game.php?id=<?php echo $game['GameID']; ?>" class="edit-btn">Edit</a>
                    <?php endif; ?>
                    </span>
                </div>
            </div>
        </div>
    </div>

    <div class="single-product section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="left-image">
                        <img src="<?php echo htmlspecialchars($game['ImagePath']); ?>" alt="<?php echo htmlspecialchars($game['name']); ?>">
                    </div>
                </div>
                <div class="col-lg-6 align-self-center">
                    <h4><?php echo htmlspecialchars($game['name']); ?></h4>
                    <span class="price">
                                <?php if ($game['newPrice'] > 0): ?>
                                    <em>$<?php echo $game['oldPrice']; ?></em>$<?php echo $game['newPrice']; ?>
                                <?php else: ?>
                                    <em>$<?php echo $game['oldPrice']; ?></em><?php echo 'Free'; ?>
                                <?php endif; ?>
                            </span>
                    
                    <p><?php echo htmlspecialchars($game['Desc1']); ?></p>
                    <form id="qty" onsubmit="addToCart(event, <?php echo $game_id; ?>)">
                        <input type="number" class="form-control" name="quantity" id="quantity" value="1" min="1" aria-describedby="quantity" placeholder="Quantity">
                        <button type="submit"><i class="fa fa-shopping-bag"></i> ADD TO CART</button>
                    </form>
                    <ul>
                        <li><span>Game ID:</span> <?php echo htmlspecialchars($game['GameID']); ?></li>
                        <li><span>Genre:</span> <?php echo htmlspecialchars($game['Genre']); ?></li>
                    </ul>
                </div>
                <div class="col-lg-12">
                    <div class="sep"></div>
                </div>
            </div>
        </div>
    </div>

    <div class="more-info">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="tabs-content">
                        <div class="row">
                            <div class="nav-wrapper">
                                <ul class="nav nav-tabs" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link active" id="description-tab" data-bs-toggle="tab" data-bs-target="#description" type="button" role="tab" aria-controls="description" aria-selected="true">Description</button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="reviews-tab" data-bs-toggle="tab" data-bs-target="#reviews" type="button" role="tab" aria-controls="reviews" aria-selected="false">Reviews (<?php echo count($reviews); ?>)</button>
                                    </li>
                                </ul>
                            </div>   
                            <div class="tab-content" id="myTabContent">
                                <div class="tab-pane fade show active" id="description" role="tabpanel" aria-labelledby="description-tab">
                                    <p><?php echo htmlspecialchars($game['Desc2']); ?></p>
                                    <br>
                                </div>
                                <div class="tab-pane fade" id="reviews" role="tabpanel" aria-labelledby="reviews-tab">
                                    <?php if (!empty($reviews)): ?>
                                        <?php foreach ($reviews as $review): ?>
                                            <p><strong><?php echo htmlspecialchars($review['user_name']); ?>:</strong> <?php echo htmlspecialchars($review['description']); ?></p>
                                        <?php endforeach; ?>
                                    <?php else: ?>
                                        <p>No reviews yet.</p>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="section categories related-games">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="section-heading">
                        <h2>Related Games</h2>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="main-button">
                        <a href="our shop.php">View All</a>
                    </div>
                </div>

                <?php foreach ($related_games as $related_game): ?>
                    <?php
                    // Extract the first genre
                    $genres = explode(',', $related_game['Genre']);
                    $first_genre = trim($genres[0]);
                    ?>
                    <div class="col-lg col-sm-6 col-xs-12">
                        <div class="item">
                            <h4><?php echo htmlspecialchars($first_genre); ?></h4>
                            <div class="thumb">
                                <a href="game.php?game_id=<?php echo $related_game['game_id']; ?>">
                                    <img src="<?php echo htmlspecialchars($related_game['ImagePath']); ?>" alt="<?php echo htmlspecialchars($related_game['name']); ?>">
                                </a>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>

    <footer>
        <div class="container">
            <div class="col-lg-12">
                <p>Copyright ©LOUPI Gaming Company. <br>All rights reserved.</p>
            </div>
        </div>
    </footer>

    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/custom.js"></script>
    <script>
        function addToCart(event, game_id) {
            event.preventDefault();
            const quantity = document.getElementById('quantity').value;
            const cart = JSON.parse(localStorage.getItem('cart')) || [];
            const item = cart.find(item => item.game_id === game_id);

            if (item) {
                item.quantity += parseInt(quantity);
            } else {
                cart.push({ game_id: game_id, quantity: parseInt(quantity) });
            }

            localStorage.setItem('cart', JSON.stringify(cart));
            alert('Item added to cart');
        }
    </script>
</body>
</html>
