<?php
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Add Products</title>
    </head>

    <body>
        <form method="POST" action="insert.php" enctype="multipart/form-data">
            <input type="file" name="image" placeholder="Upload Image">
            <input type="text" name="title" placeholder="Set Product Title">
            <textarea type="text" name="description" placeholder="Set Product Description"></textarea>
            <button type="submit" name="submit">POST</button>
        </form>
        <a href="./view.php"> Manage all products </a>

        </form>

    </body>

    </html>


<?php
} else {
    header("Location: ../index.php");
    exit();
}
?>