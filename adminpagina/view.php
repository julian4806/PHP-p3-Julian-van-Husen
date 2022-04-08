<!-- https://www.youtube.com/watch?v=zz_2DMmcjZU -->

<?php
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

    require_once("../db_conn.php");
    $query = " SELECT * FROM `users` ";
    $result = mysqli_query($conn, $query);



?>


    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>View Records</title>
        <link rel='stylesheet' href='assets/style.css'>
    </head>

    <body>

        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="card">
                        <table>
                            <tr>
                                <td>User ID</td>
                                <td>User Name</td>
                                <td>User Email</td>
                                <td>Edit</td>
                                <td>Delete</td>
                            </tr>

                            <?php

                            while ($row = mysqli_fetch_assoc($result)) {
                                $UserID = $row['id'];
                                $UserName = $row['user_name'];
                                $UserEmail = $row['email'];
                                // $UserPassword = $row['password'];

                            ?>


                                <tr>
                                    <td><?php echo $UserID ?></td>
                                    <td><?php echo $UserName ?></td>
                                    <td><?php echo $UserEmail ?></td>

                                    <td><a href="edit.php?GetID=<?php echo $UserID ?>">Edit</a></td>
                                    <td><a href="delete.php?Del=<?php echo $UserID ?>">Delete</a></td>
                                </tr>

                            <?php
                            }
                            ?>





                        </table>
                        <a href="adduser.php">Add a User</a>
                    </div>
                </div>
            </div>
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