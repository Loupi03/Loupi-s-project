<?php 
?>
<!DOCTYPE html>
<html lang="en">

    <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>LOUPI</title>

    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="fbi.css">
    <link rel="icon" href="assets/images/Loupi.png" >
</head>

<body>
    <header class="header-area header-sticky">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <a href="index.php" class="logo"><img src="assets/images/LOGOO-removebg-preview.png" alt="" style="width: 158px;"></a>
                        <ul class="nav">
                            <li><a href="index.php" class="active">Home</a></li>
                            <li><a href="Our shop.php">Our Shop</a></li>
                            <li><a href="contact.php">Contact Us</a></li>
                            <?php if (!isset($_SESSION['user_name'])):?>
                                <li><a href="index-login.php"><svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" viewBox="0 0 24 24" fill="none" stroke="gold" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5.52 19c.64-2.2 1.84-3 3.22-3h6.52c1.38 0 2.58.8 3.22 3"/><circle cx="12" cy="10" r="3"/><circle cx="12" cy="12" r="10"/></svg></a></li>
                            <?php endif ?>
                            <?php if (isset($_SESSION['user_name'])):?>                                
                                <div class="dropdown">
                                    <li><a href=""><?= $_SESSION['user_name']; ?></a></li>
                                    <div class="dropdown-content">
                                        <li><a href="change-password.php">Change Password</a></li>
                                        <li><a href="logout.php" class="logout">Logout</a></li>
                                        <li><a href="change-password.php">empty</a></li>
                                    </div>
                                </div>
                            <?php endif ?>
                            <li><a href="add to cart.php"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="gold" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="10" cy="20.5" r="1"/><circle cx="18" cy="20.5" r="1"/><path d="M2.5 2.5h3l2.7 12.4a2 2 0 0 0 2 1.6h7.7a2 2 0 0 0 2-1.6l1.6-8.4H7.1"/></svg></a></li>

                        </ul>   
                        <a class='menu-trigger'>
                            <span>Menu</span>
                        </a>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    

        <script src="vendor/jquery/jquery.min.js"></script>
        <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
        <script src="assets/js/custom.js"></script>
    
</body>
</html>