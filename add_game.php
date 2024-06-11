<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Database connection
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "loupi";

    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Prepare and bind
    $stmt = $conn->prepare("INSERT INTO games (name, oldPrice, newPrice, Desc1, GameID, Genre, MultiTags, Desc2, ImagePath) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("sssssssss", $name, $oldPrice, $newPrice, $Desc1, $GameID, $Genre, $MultiTags, $Desc2, $ImagePath);

    // Set parameters and execute
    $name = $_POST["name"];
    $oldPrice = $_POST["oldPrice"];
    $newPrice = $_POST["newPrice"];
    $Desc1 = $_POST["Desc1"];
    $GameID = $_POST["GameID"];
    $Genre = $_POST["Genre"];
    $MultiTags = $_POST["MultiTags"];
    $Desc2 = $_POST["Desc2"];
    
    // Handle file upload
    $target_dir = "assets/images/";
    $imageFileType = strtolower(pathinfo($_FILES["ImagePath"]["name"], PATHINFO_EXTENSION));
    $target_file = $target_dir . $GameID . '.' . $imageFileType;
    
    // Ensure the target directory exists
    if (!is_dir($target_dir)) {
        mkdir($target_dir, 0755, true);
    }
    
    // Move the uploaded file
    if (move_uploaded_file($_FILES["ImagePath"]["tmp_name"], $target_file)) {
        $ImagePath = $target_file;
    } else {
        die("Sorry, there was an error uploading your file.");
    }

    // Execute the prepared statement
    if ($stmt->execute()) {
        // Display alert message and redirect to admin.php
        echo "<script>alert('New record created successfully'); window.location.href = 'admin.php';</script>";
        exit();
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
    $conn->close();
}

