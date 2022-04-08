<?php
// DIT IS DE HOMEPAGINA
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

    require_once('../db_conn.php');




    if (isset($_POST['submit'])) {
        if (empty($_POST['title'])  || empty($_POST['description'])) {

            echo 'Please Fill in the blanks';
        } else {

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
                    $fileDestination = '../productbeheer/images/' . $fileNameNew;
                    move_uploaded_file($fileTmpName, $fileDestination);

                    $query = " INSERT INTO `products` (`title` , `image`, `description`) VALUES('$ProductTitle', '$fileNameNew', '$ProductDescription') ";
                    $result = mysqli_query($conn, $query);
                } else {
                    echo " Oops something went wrong while uploading your file! ";
                }
            } else {
                echo " You cannot upload files of this type! ";
            }
            // testCodeEnd

            if ($result) {
                header("location:view.php");
            } else {
                echo " check your query ";
                // print($result);
            }
        }
    } else {
        header("location: index.php");
    }
} else {
    mysqli_close($conn);
    header("Location: .../index.php");
    exit();
}
