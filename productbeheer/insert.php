<?php
// DIT IS DE HOMEPAGINA
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

    require_once('../db_conn.php');




    if (isset($_POST['submit'])) {
        if (empty($_POST['title'])  || empty($_POST['description'])) {

            echo 'Please Fill in the blanks';
        } else {

            // testCode
            $file = $_FILES['image'];

            $ProductTitle = $_POST['title'];
            $ProductDescription = $_POST['description'];
            $fileName = $_FILES['image']['name'];

            $fileTmpName = $_FILES['image']['tmp_name'];
            // $fileSize = $_FILES['file']['size'];
            $fileError = $_FILES['image']['error'];
            $fileType = $_FILES['image']['type'];

            $fileExt = explode('.', $fileName);
            $fileActualExt = strtolower(end($fileExt));

            $allowed = array('jpg', 'jpeg', 'png');

            if (in_array($fileActualExt, $allowed)) {
                if ($fileError === 0) {
                    // if ($fileSize < (1000000 * 50)) { //100mb
                    $fileNameNew = uniqid('',  true) . "." . $fileActualExt;
                    $fileDestination = '../productbeheer/images/' . $fileNameNew;
                    move_uploaded_file($fileTmpName, $fileDestination);

                    // image file directory
                    $query = " INSERT INTO `products` (`title` , `image`, `description`) VALUES('$ProductTitle', '$fileNameNew', '$ProductDescription') ";
                    $result = mysqli_query($conn, $query);



                    // header("Location: index.php?uploadsuccess");
                    // } else {
                    // echo "Your file is too big!";
                    // }
                } else {
                    echo " Oops something went wrong while uploading your file! ";
                }
            } else {
                echo " You cannot upload files of this type! ";
            }

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
