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
}else{
    function get_all_offices(){
        global $db;
        $query = "SELECT * FROM `offices` WHERE 1";
        return mysqli_fetch_all ( mysqli_query($db, $query), MYSQLI_ASSOC);
    }

}


?>