<?php
include '../db.php';
$id = $_GET['id'];
$status = $_GET['status'];
set_facilities_status($id, $status);
header('Location: /midousuji-map/?page=edit');
?>