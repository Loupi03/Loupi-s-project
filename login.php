<?php 
session_start();
ob_start();

include 'connection.php';
include 'menu.php'; 

if (isset($_POST['uname']) && isset($_POST['password'])) {
    function validate($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    
    $uname = validate($_POST['uname']);
    $pass = validate($_POST['password']);

    if (empty($uname) || empty($pass)) {
        header("Location: index-login.php?error=Username and password are required");
        exit();
    } else {
        // Hashing the password
        $pass = md5($pass);
        
        $sql = "SELECT * FROM users WHERE user_name='$uname' AND password='$pass'";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) === 1) {
            $row = mysqli_fetch_assoc($result);
            $_SESSION['user_name'] = $row['user_name'];
            $_SESSION['name'] = $row['name'];
            $_SESSION['id'] = $row['user_id'];
            $_SESSION['is_admin'] = $row['is_admin']; 

            setcookie("user", $row['user_name'], time() + 3600, "/");

            header("Location: index.php");
            exit();
        } else {
            header("Location: index-login.php?error=Incorrect User Name or Password");
            exit();
        }
    }
} else {
    header("Location: index-login.php");
    exit();
}

ob_end_flush();
?>
