<?php 

require_once ".config.php";

require_session(1);

global $db;

$query = $db->prepare("select * from NUMERO_ARA");
$query->execute();

echo json_encode($query->fetchAll());