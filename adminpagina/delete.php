<?php

session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

    require_once("../db_conn.php");
    if (isset($_GET['Del'])) {
        $UserID = $_GET['Del'];
        $query = "DELETE FROM `users` WHERE `id` = '$UserID'";
        $result = mysqli_query($conn, $query);

        if ($result) {
            header("location:view.php");
        } else {
            echo ' Please Check your query ';
        }
    } else {
        header("location:view.php");
    }
} else {
    mysqli_close($conn);
    header("Location: ../index.php");
    exit();
}
