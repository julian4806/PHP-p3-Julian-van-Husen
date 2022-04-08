<?php
$root = '/[Schoolwerk%20ALLE%20VAKKEN]/Periode%203/PHP/';

$sname= "localhost";
$unmae= "root";
$password = "";

// Julian
// Julian
// 210549@student.glu.nl

$db_name = "p3/php";

$conn = mysqli_connect($sname, $unmae, $password, $db_name);

if (!$conn) {
	echo "Connection failed!";
}

// MySQLi Procedural