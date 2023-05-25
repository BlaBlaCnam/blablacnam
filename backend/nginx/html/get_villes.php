<?php 

require_once ".config.php";

global $db;

$query = $db->prepare("select * from VILLE;");
$query->execute();
echo json_encode($query->fetchAll());