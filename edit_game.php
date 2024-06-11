<?php
session_start();
include 'connection.php';

// Check if the user is an admin
if (!isset($_SESSION['is_admin'])) {
    $_SESSION['is_admin'] = false;
}
$is_admin = $_SESSION['is_admin'];
if (!$is_admin) {
    die("Unauthorized access");
}

// Fetch game details based on game ID passed in the URL
$game_id = isset($_GET['id']) ? intval($_GET['id']) : 0;
$sql = "SELECT * FROM games WHERE GameID = ?";
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

// Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['GameID'])) {
    $name = $_POST['name'];
    $oldPrice = $_POST['oldPrice'];
    $newPrice = $_POST['newPrice'];
    $Desc1 = $_POST['Desc1'];
    $GameID = intval($_POST['GameID']);
    $Genre = $_POST['Genre'];
    $MultiTags = $_POST['MultiTags'];
    $Desc2 = $_POST['Desc2'];

    // Handle image upload
    $image_path = $game['ImagePath'];
    if (!empty($_FILES['ImagePath']['tmp_name'])) {
        $target_dir = "assets/images/";
        $imageFileType = strtolower(pathinfo($_FILES["ImagePath"]["name"], PATHINFO_EXTENSION));
        $target_file = $target_dir . $GameID . '.' . $imageFileType;

        // Ensure the target directory exists
        if (!is_dir($target_dir)) {
            mkdir($target_dir, 0755, true);
        }

        // Move the uploaded file
        if (move_uploaded_file($_FILES["ImagePath"]["tmp_name"], $target_file)) {
            $image_path = $target_file;
        } else {
            die("Sorry, there was an error uploading your file.");
        }
    }

    // Update the game details in the database
    $update_sql = "UPDATE games SET name = ?, oldPrice = ?, newPrice = ?, Desc1 = ?, Genre = ?, MultiTags = ?, Desc2 = ?, ImagePath = ? WHERE GameID = ?";
    $update_stmt = $conn->prepare($update_sql);
    $update_stmt->bind_param("ssssssssi", $name, $oldPrice, $newPrice, $Desc1, $Genre, $MultiTags, $Desc2, $image_path, $GameID);

    if ($update_stmt->execute()) {
        echo "Game details updated successfully";
        header("Location: game.php?id=" . $GameID);
        exit();
    } else {
        echo "Error: " . $update_stmt->error;
    }

    $update_stmt->close();
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Edit Game - <?php echo htmlspecialchars($game['name']); ?></title>
    <link rel="icon" href="../Project/assets/images/Loupi.png">
    <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <style><?php include "fbi.css"; ?> </style>
    <script>
        function confirmEdit(event) {
            var gameName = "<?php echo htmlspecialchars($game['name']); ?>";
            var confirmation = confirm("Are you sure you want to edit the game: " + gameName + "?");
            if (!confirmation) {
                event.preventDefault();
            }
        }
    </script>
</head>
<body>
    <?php include "menu.php"; ?>
    <div class="page-heading header-text">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h3><?php echo htmlspecialchars($game['name']); ?></h3>
                    <span class="breadcrumb"><a href="index.php">Home</a> > <a href="our_shop.php"> Our Shop</a> > <?php echo htmlspecialchars($game['name']); ?>
                    <?php if ($is_admin): ?>
                        > <a href="edit_game.php?id=<?php echo $game['GameID']; ?>" class="edit-btn">Edit</a>
                    <?php endif; ?>
                    </span>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <h2>Edit Game: <?php echo htmlspecialchars($game['name']); ?></h2>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]) . '?id=' . $game_id; ?>" method="post" enctype="multipart/form-data" onsubmit="confirmEdit(event)">
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" class="form-control" id="name" name="name" value="<?php echo htmlspecialchars($game['name']); ?>" required>
            </div><br>
            <div class="form-group">
                <label for="oldPrice">Old Price:</label>
                <input type="text" class="form-control" id="oldPrice" name="oldPrice" value="<?php echo htmlspecialchars($game['oldPrice']); ?>" required>
            </div><br>
            <div class="form-group">
                <label for="newPrice">New Price:</label>
                <input type="text" class="form-control" id="newPrice" name="newPrice" value="<?php echo htmlspecialchars($game['newPrice']); ?>" required>
            </div><br>
            <div class="form-group">
                <label for="Desc1">Description 1:</label>
                <textarea class="form-control" id="Desc1" name="Desc1" required><?php echo htmlspecialchars($game['Desc1']); ?></textarea>
            </div><br>
            <div class="form-group">
                <label for="GameID">Game ID:</label>
                <input type="text" class="form-control" id="GameID" name="GameID" value="<?php echo htmlspecialchars($game['GameID']); ?>" readonly>
            </div><br>
            <div class="form-group">
                <label for="Genre">Genre:</label>
                <input type="text" class="form-control" id="Genre" name="Genre" value="<?php echo htmlspecialchars($game['Genre']); ?>" required>
            </div><br>
            <div class="form-group">
                <label for="MultiTags">Multi Tags:</label>
                <input type="text" class="form-control" id="MultiTags" name="MultiTags" value="<?php echo htmlspecialchars($game['MultiTags']); ?>" required>
            </div><br>
            <div class="form-group">
                <label for="Desc2">Description 2:</label>
                <textarea class="form-control" id="Desc2" name="Desc2" required><?php echo htmlspecialchars($game['Desc2']); ?></textarea>
            </div><br>
            <div class="form-group">
                <label for="ImagePath">Image:</label>
                <input type="file" class="form-control-file" id="ImagePath" name="ImagePath">
                <small class="form-text text-muted">Leave this field blank if you don't want to change the image.</small>
            </div><br>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
</body>
</html>
