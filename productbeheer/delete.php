<?php

session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

    require_once("../db_conn.php");
    if (isset($_GET['Del'])) {
        $ProductID = $_GET['Del'];
        $query = "DELETE FROM `products` WHERE `id` = '$ProductID'";
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
