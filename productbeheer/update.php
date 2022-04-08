<?php
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

    require_once("../db_conn.php");
    if (isset($_POST['update'])) {
        $ProductID = $_GET['ID'];
        $ProductDescription = $_POST['description'];

        $file = $_FILES['image'];

        $ProductTitle = $_POST['title'];
        $ProductDescription = $_POST['description'];
        $fileName = $_FILES['image']['name'];

        $fileTmpName = $_FILES['image']['tmp_name'];
        $fileError = $_FILES['image']['error'];
        $fileType = $_FILES['image']['type'];
        $fileExt = explode('.', $fileName);
        $fileActualExt = strtolower(end($fileExt));

        $allowed = array('jpg', 'jpeg', 'png');

        if (in_array($fileActualExt, $allowed)) {
            if ($fileError === 0) {
                $fileNameNew = uniqid('',  true) . "." . $fileActualExt;
                $fileDestination = 'images/' . $fileNameNew;
                move_uploaded_file($fileTmpName, $fileDestination);

                $query = " UPDATE `products` set `title` = '$ProductTitle', `image`= ' $ProductImage ', `description`='$ProductDescription' WHERE `id`='$ProductID'";
                $result = mysqli_query($conn, $query);
            } else {
                echo " Oops something went wrong while uploading your file! ";
            }
        } else {
            echo " You cannot upload files of this type! ";
        }

        if ($result) {
            header("location:view.php");
        } else {
            echo ' Please Check Your Query ';
        }
    } else {
        header("location:view.php");
    }
?>

<?php
} else {
    header("Location: ../index.php");
    exit();
}
?>