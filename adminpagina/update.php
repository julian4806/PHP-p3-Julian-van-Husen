<?php
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

    require_once("../db_conn.php");
    if (isset($_POST['update'])) {
        $UserID = $_GET['ID'];
        $UserName = $_POST['username'];
        $UserEmail = $_POST['email'];
        $UserPassword = $_POST['password'];

        $query = " UPDATE `users` set `user_name` = '$UserName', `email`= ' $UserEmail ', `password`='$UserPassword' WHERE `id`='$UserID'";
        $result = mysqli_query($conn, $query);


if($result){
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