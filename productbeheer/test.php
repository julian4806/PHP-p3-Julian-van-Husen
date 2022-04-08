<?php
// Create database connection
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {
    require_once('../db_conn.php');

    if (isset($_POST['submit'])) {
        $ProductImage = $_FILES['image']['name'];
        $ProductTitle = $_POST['title'];
        $ProductDescription = $_POST['description'];

        $sql = "INSERT INTO `products` (title , image, description) VALUES ('$ProductTitle','$ProductImage', ' $ProductDescription')";
        mysqli_query($conn, $sql);
    }
    $result = mysqli_query($conn, "SELECT * FROM products");
?>
    <!DOCTYPE html>
    <html>

    <head>
        <title>Image Upload</title>
    </head>

    <body>
        <div id="content">
            <?php
            echo "<main>";

            while ($row = mysqli_fetch_array($result)) {
                echo "

                <figure>
                    <img src='images/" . $row['image'] . "' > <br />
                        <span>" . $row['title'] . "</span>
                        <p>
                            " . $row['description'] . "
                        </p>
                </figure>
                
                ";
            }

            echo "</main>"
            ?>




            <form method="POST" action="test.php" enctype="multipart/form-data">
                <input type="file" name="image" placeholder="Upload Image">
                <input type="text" name="title" placeholder="Set Product Title">
                <textarea type="text" name="description" placeholder="Set Product Description"></textarea>
                <button type="submit" name="submit">POST</button>
            </form>
        </div>
    </body>

    </html>

    <style>
        main {
            border: 1px solid black;
            width: 90%;
            margin: 10px auto;
            display: flex;
            flex-wrap: wrap;
            background-color: lightyellow;
        }

        main figure {
            flex: 1 0 10%;
            margin: 20px;
            height: auto;
            width: 150px;
        }

        main figure img {
            width: 150px;
        }

        main figure span {
            width: 150px;
            font-weight: bold;
            text-transform: uppercase;
        }

        main figure p {
            width: 150px;
        }

        main figure:hover {
            opacity: 0.6;
            border: 1px solid;
        }
    </style>

<?php


} else {
    mysqli_close($conn);
    header("Location: .../index.php");
    exit();
}
?>