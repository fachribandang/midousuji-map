<?php
$servername = "localhost";
$database = "d076c94idb3";
$username = "root";
$password = "";
// Create connection
$db = mysqli_connect($servername, $username, $password, $database);
// Check connection
mysqli_set_charset($db, "utf8");
if (!$db) {
    die("Connection failed: " . mysqli_connect_error());
}
?>