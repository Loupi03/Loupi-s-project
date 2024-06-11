<?php 
session_start();
include "connection.php";

// Fetch a random game for the main banner
$banner_query = "SELECT * FROM games ORDER BY RAND() LIMIT 1";
$banner_result = mysqli_query($conn, $banner_query);
$banner_game = mysqli_fetch_assoc($banner_result);

// Fetch random popular games
$popular_query = "SELECT * FROM games ORDER BY RAND() LIMIT 4";
$popular_result = mysqli_query($conn, $popular_query);

// Fetch random most played games
$most_played_query = "SELECT * FROM games ORDER BY RAND() LIMIT 6";
$most_played_result = mysqli_query($conn, $most_played_query);

// Fetch top categories
$categories_query = "SELECT DISTINCT Genre FROM games ORDER BY RAND() LIMIT 5";
$categories_result = mysqli_query($conn, $categories_query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <title>LOUPI</title>
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="icon" href="../Project/assets/images/Loupi.png">
    <style>
        <?php require "fbi.css"; ?>
    </style>
</head>
<body>
    <?php include 'menu.php'; ?>

    <div class="main-banner">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 align-self-center">
                    <div class="caption header-text">
                        <h6>Welcome to Loupi</h6>
                        <h2>Play, Thrive, Conquer!</h2>
                        <p>Welcome to Loupi, where the world of gaming comes alive! Immerse yourself in a digital paradise where passion meets play. At Loupi, we're more than just a store, we're your ultimate gaming destination, offering a diverse and thrilling collection of games for all platforms.</p>
                        <div class="search-input">
                            <form id="search">
                                <input type="text" placeholder="Type Something" id='searchText' />
                                <button role="button">Search Now</button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 offset-lg-2">
                    <div class="right-image">
                        <a href="game.php?game_id=<?php echo $banner_game['game_id']; ?>"><img src="<?php echo $banner_game['ImagePath']; ?>" alt=""></a>
                        <span class="price">
                            <?php if ($banner_game['newPrice'] > 0): ?>
                                </em>$<?php echo $banner_game['newPrice']; ?>
                            <?php else: ?>
                                Free
                            <?php endif; ?>
                        </span>
                        <span class="offer">-60%</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="section trending">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="section-heading">
                        <h2>Popular Games</h2>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="main-button">
                        <a href="Our shop.php">View All</a>
                    </div>
                </div>
                <?php while ($popular_game = mysqli_fetch_assoc($popular_result)) { ?>
                <div class="col-lg-3 col-md-6">
                    <div class="item">
                        <div class="thumb">
                            <a href="game.php?game_id=<?php echo $popular_game['game_id']; ?>"><img src="<?php echo $popular_game['ImagePath']; ?>" alt=""></a>
                            <span class="price">
                                <?php if ($popular_game['newPrice'] > 0): ?>
                                    <em>$<?php echo $popular_game['oldPrice']; ?></em>$<?php echo $popular_game['newPrice']; ?>
                                <?php else: ?>
                                    <em>$<?php echo $popular_game['oldPrice']; ?></em><?php echo 'Free'; ?>
                                <?php endif; ?>
                            </span>
                        </div>
                        <div class="down-content">
                            <span class="category"><?php echo $popular_game['Genre']; ?></span>
                            <h4><?php echo $popular_game['name']; ?></h4>
                            <a href="game.php?game_id=<?php echo $popular_game['game_id']; ?>"><i class="fa fa-shopping-bag"></i></a>
                        </div>
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>
    </div>

    <div class="section most-played">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="section-heading">
                        <h2>Most Played</h2>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="main-button">
                        <a href="Our shop.php">View All</a>
                    </div>
                </div>
                <?php while ($most_played_game = mysqli_fetch_assoc($most_played_result)) { ?>
                <div class="col-lg-2 col-md-6 col-sm-6">
                    <div class="item">
                        <div class="thumb">
                            <a href="game.php?game_id=<?php echo $most_played_game['game_id']; ?>"><img src="<?php echo $most_played_game['ImagePath']; ?>" alt=""></a>
                        </div>
                        <div class="down-content">
                            <span class="category"><?php echo $most_played_game['Genre']; ?></span>
                            <h4 id="Item-title"><?php echo $most_played_game['name']; ?></h4>
                            <a href="game.php?game_id=<?php echo $most_played_game['game_id']; ?>">Explore</a>
                        </div>
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>
    </div>

    <!-- Top Categories Section -->
    <div class="section categories">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="section-heading">
                        <h2>Top Categories</h2>
                    </div>
                </div>
                <?php while ($category = mysqli_fetch_assoc($categories_result)) { ?>
                <div class="col-lg col-sm-6 col-xs-12">
                    <div class="item">
                    
                        <h4><?php echo $category['Genre']; ?></h4>
                        <?php
                            $category_games_query = "SELECT * FROM games WHERE Genre = '{$category['Genre']}' ORDER BY RAND() LIMIT 1";
                            $category_games_result = mysqli_query($conn, $category_games_query);
                            $category_game = mysqli_fetch_assoc($category_games_result);
                        ?>
                        <div class="thumb">
                            <a href="game.php?game_id=<?php echo $category_game['game_id']; ?>"><img src="<?php echo $category_game['ImagePath']; ?>" alt=""></a>
                        </div>
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>
    </div>

    <footer>
        <div class="container">
            <div class="col-lg-12">
                <p>Copyright © LOUPI Gaming Company. <br> All rights reserved.</p>
            </div>
        </div>
    </footer>

    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="assets/js/custom.js"></script>
</body>
</html>
