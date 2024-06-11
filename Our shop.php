<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>LOUPI</title>
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="fbi.css">
    <link rel="icon" href="../Project/assets/images/Loupi.png">
</head>
<body>
    <?php include 'menu.php'; ?>
    <div class="page-heading header-text">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h3>Our Shop</h3>
                    <span class="breadcrumb"><a href="index.php">Home</a> > <a href="Our shop.php">Our Shop</a></span>
                </div>
            </div>
        </div>
    </div>
    <div class="section trending">
        <div class="container">
            <div class="row trending-box">
                <?php
                include 'connection.php';
                
                $sql = "SELECT game_id, name, oldprice, newprice, Desc1, GameID, Genre, Desc2, ImagePath FROM games";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()) {
                        echo '<div class="col-lg-3 col-md-6 align-self-center mb-30 trending-items ">
                                <div class="item">
                                    <div class="thumb">
                                        <a href="game.php?game_id=' . $row["game_id"] . '"><img src="' . $row["ImagePath"] . '" alt=""></a>
                                        <span class="price"><em>$' . $row["oldprice"] . '</em>$' . $row["newprice"] . '</span>
                                    </div>
                                    <div class="down-content">
                                        <span class="category">' . $row["Genre"] . '</span>
                                        <h4>' . $row["name"] . '</h4>
                                        <a href="game.php?game_id=' . $row["game_id"] . '"><i class="fa fa-shopping-bag"></i></a>
                                        
                                    </div>
                                </div>
                            </div>';
                    }
                } else {
                    echo "0 results";
                }

                $conn->close();
                ?>
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
