<?php 

require_once ".config.php";

global $db;

$query = $db->prepare("select * from SITE;");
$query->execute();
echo json_encode($query->fetchAll());