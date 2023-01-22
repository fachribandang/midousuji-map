<?php
$servername = "sql110.epizy.com";
$database = "epiz_33432439_d076c94idb3";
$username = "epiz_33432439";
$password = "WKxQVeY2QZUsw";
// Create connection
$db = mysqli_connect($servername, $username, $password, $database);
// Check connection
mysqli_set_charset($db, "utf8");
if (!$db) {
    die("Connection failed: " . mysqli_connect_error());
}else{
    function get_all_offices () {
        global $db;
        $query = "SELECT * FROM `offices` WHERE 1";
        return mysqli_fetch_all ( mysqli_query($db, $query), MYSQLI_ASSOC);
    }
    function get_all_facilities_accepting_evacuation () {
        global $db;
        $query = 
        "SELECT offices.name,offices.id
        FROM offices
        JOIN facilities ON offices.id=facilities.office_id
        WHERE facilities.name='屋内' AND facilities.acceptance_status=3;";
        return mysqli_fetch_all ( mysqli_query($db, $query), MYSQLI_ASSOC);
    }
}


?>