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
    function get_all_offices () {
        global $db;
        $query = "SELECT * FROM `offices` WHERE 1";
        return mysqli_fetch_all ( mysqli_query($db, $query), MYSQLI_ASSOC);
    }
    function get_all_facilities_offices () {
        global $db;
        $query = 
        "SELECT `offices`.`id`,`offices`.`name`,`offices`.`map_url`,`facilities`.`acceptance_status`
        FROM `offices`
        JOIN `facilities` ON `offices`.`id`= `facilities`.`office_id`
        WHERE `facilities`.`name`='屋内'";
        return mysqli_fetch_all ( mysqli_query($db, $query), MYSQLI_ASSOC);
    }
    function get_all_facilities_accepting_evacuation () {
        global $db;
        $query = 
        "SELECT offices.name,offices.id
        FROM offices
        JOIN facilities ON offices.id=facilities.office_id
        WHERE facilities.name='屋内' AND facilities.acceptance_status = 3;";
        return mysqli_fetch_all ( mysqli_query($db, $query), MYSQLI_ASSOC);
    }
    function set_facilities_status ($id, $status) {
        global $db;
        $query = "UPDATE `facilities` SET `acceptance_status`= $status WHERE `facilities`.`office_id`= $id AND `facilities`.`name`='屋内';";
        mysqli_query($db, $query);
    }

}


?>