<?php 

require_once ".config.php";

global $db;

$query = $db->prepare("select * from SECTION;");
$query->execute();
echo json_encode($query->fetchAll());