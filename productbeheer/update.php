<?php
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

    require_once("../db_conn.php");
    if (isset($_POST['update'])) {
        $ProductID = $_GET['ID'];
        $ProductImage = $_FILES['image']['name'];
        $ProductTitle = $_POST['title'];
        $ProductDescription = $_POST['description'];

        $query = " UPDATE `products` set `title` = '$ProductTitle', `image`= ' $ProductImage ', `description`='$ProductDescription' WHERE `id`='$ProductID'";
        $result = mysqli_query($conn, $query);


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