<?php 

require_once ".config.php";

global $db;

$query = $db->prepare("select * from VILLE order by id_ville desc;");
$query->execute();
echo json_encode($query->fetchAll());