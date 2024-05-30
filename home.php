<?php 

session_start();
if (isset($_SESSION['id']) && isset($_SESSION['user_name'])){



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HOME</title>
    <style>
        <?php
        include "style.css";
        ?>
    </style>
</head>
<body>

    <h1>Hello, <?php echo $_SESSION['name'];?></h1><br>
    <a href="logout.php" class="logout">Logout</a>
</body>
</html>

<?php 
}else{
    header("Location: index-login.php");
    exit();
}
?>