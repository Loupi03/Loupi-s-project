<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>LOUPI</title>
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="icon" href="../Project/assets/images/Loupi.png">
    <style><?php include"fbi.css";?></style>
</head>
<body>
    <?php include 'menu.php'; ?>
    <div class="page-heading header-text">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h3>Our Shop</h3>
                    <span class="breadcrumb"><a href="index.php">Home</a> > <a href="admin.php">Admin</a></span>
                </div>
            </div>
        </div>
    </div>

    <div class="container" style="display: flex; justify-content: center; align-items: center; height: 100vh;">
        <div style="background-color: #f2f2f2; padding: 20px; border-radius: 10px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);">
            <h3 style="color: #333;">Add Game</h3>
            <form action="add_game.php" method="post" enctype="multipart/form-data">
                <label for="name" style="color: #555;">Name:</label>
                <input type="text" id="name" name="name" required style="width: 100%; padding: 8px; border: 1px solid #ccc; border-radius: 4px; box-sizing: border-box; margin-bottom: 10px;">

                <label for="oldPrice" style="color: #555;">Old Price:</label>
                <input type="text" id="oldPrice" name="oldPrice" required style="width: 100%; padding: 8px; border: 1px solid #ccc; border-radius: 4px; box-sizing: border-box; margin-bottom: 10px;">

                <label for="newPrice" style="color: #555;">New Price:</label>
                <input type="text" id="newPrice" name="newPrice" required style="width: 100%; padding: 8px; border: 1px solid #ccc; border-radius: 4px; box-sizing: border-box; margin-bottom: 10px;">

                <label for="Desc1" style="color: #555;">Description 1:</label>
                <textarea id="Desc1" name="Desc1" required style="width: 100%; padding: 8px; border: 1px solid #ccc; border-radius: 4px; box-sizing: border-box; margin-bottom: 10px;"></textarea>

                <label for="GameID" style="color: #555;">Game ID:</label>
                <input type="text" id="GameID" name="GameID" required style="width: 100%; padding: 8px; border: 1px solid #ccc; border-radius: 4px; box-sizing: border-box; margin-bottom: 10px;">

                <label for="Genre" style="color: #555;">Genre:</label>
                <input type="text" id="Genre" name="Genre" required style="width: 100%; padding: 8px; border: 1px solid #ccc; border-radius: 4px; box-sizing: border-box; margin-bottom: 10px;">

                <label for="MultiTags" style="color: #555;">Multi Tags:</label>
                <input type="text" id="MultiTags" name="MultiTags" required style="width: 100%; padding: 8px; border: 1px solid #ccc; border-radius: 4px; box-sizing: border-box; margin-bottom: 10px;">

                <label for="Desc2" style="color: #555;">Description 2:</label>
                <textarea id="Desc2" name="Desc2" required style="width: 100%; padding: 8px; border: 1px solid #ccc; border-radius: 4px; box-sizing: border-box; margin-bottom: 10px;"></textarea>

                <label for="ImagePath" style="color: #555;">Image Path:</label>
                <input type="file" id="ImagePath" name="ImagePath" required style="width: 100%; padding: 8px; border: 1px solid #ccc; border-radius: 4px; box-sizing: border-box; margin-bottom: 10px;">

                <button type="submit" style="background-color: #4CAF50; color: white; padding: 10px 20px; border: none; border-radius: 4px; cursor: pointer;">Add</button>
            </form>
        </div>
    </div>
</body>
</html>