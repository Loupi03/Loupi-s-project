<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        <?php 
            include "style.css";
            ?>

    </style>
</head>
<body>
    <?php include 'menu.php'; ?>
    <div>
        <form action="login.php" method="post">
            <h2>LOGIN</h2>
            <?php if (isset($_GET['error'])){ ?>
                <p class="error"><?php echo $_GET['error'];?></p>
            <?php } ?>
            <?php if (isset($_GET['success'])){ ?>
                <p class="success"><?php echo $_GET['success'];?></p>
            <?php } ?>
            <div>
                <label >User Name</label>
                <input type="text" name="uname" placeholder="User Name"><br>
            </div>
            <div>
                <label for="">Password</label>
                <input type="password" name="password" placeholder="Password"><br>
            </div>
            <button type="submit">Login</button>
            <a href="signup.php" class="ca">Create an account</a>
        </form>
    </div>
</body>
</html>