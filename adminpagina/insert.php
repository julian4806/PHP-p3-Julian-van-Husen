<?php
// DIT IS DE HOMEPAGINA
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

    require_once('../db_conn.php');

    if (isset($_POST['submit'])) {
        if (empty($_POST['username']) || empty($_POST['email']) || empty($_POST['password'])) {
            echo 'Please Fill in the blanks';
        } else {
            $UserName = $_POST['username'];
            $UserEmail = $_POST['email'];
            $UserPassword = password_hash($_POST['password'], PASSWORD_BCRYPT);

            $query = " INSERT INTO `users` (user_name , email, password) VALUES('$UserName', '$UserEmail', '$UserPassword') ";
            $result = mysqli_query($conn, $query);

            if ($result) {
                header("location:view.php");
            } else {
                echo " check your query ";
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
