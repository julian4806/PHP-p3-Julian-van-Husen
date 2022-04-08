<?php
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

    require_once("../db_conn.php");
    $query = " SELECT * FROM `products` ";
    $result = mysqli_query($conn, $query);

?>


    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>View Records</title>
        <link rel='stylesheet' href='css/style.css'>
    </head>

    <body>

        <div class="container">
            <table>
                <tr>
                    <td>Product ID</td>
                    <td>Product Title</td>
                    <td>Product Image</td>
                    <td>Product Description</td>

                    <td>Edit</td>
                    <td>Delete</td>
                </tr>

                <?php

                while ($row = mysqli_fetch_assoc($result)) {
                    $ProductID = $row['id'];
                    $ProductTitle = $row['title'];
                    $ProductImage = $row['image'];
                    $ProductDescription = $row['description'];

                ?>

                    <tr>
                        <td><?php echo $ProductID ?></td>
                        <td><?php echo $ProductTitle ?></td>


                        <td><?php

                            while (True) {
                                echo "<img style=' width: 50px; ' src='images/" . $row['image'] . "'> <br />";
                                break;
                            } ?></td>
                        <!-- Not everything is showing? -->
                        <td><?php echo $ProductDescription ?>
                        </td>

                        <td><a href="edit.php?GetID=<?php echo $ProductID ?>">Edit</a></td>
                        <td><a href="delete.php?Del=<?php echo $ProductID ?>">Delete</a></td>
                    </tr>




                <?php
                }
                ?>

            </table>
            <a href="addproduct.php">Add a Product</a>
        </div>

        </form>

    </body>

    </html>



<?php
} else {
    header("Location: ../index.php");
    exit();
}
?>