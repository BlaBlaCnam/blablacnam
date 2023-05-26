<?php 

require_once ".config.php";

global $db;

$query = $db->prepare("select * from SECTION order by id_section desc;");
$query->execute();
echo json_encode($query->fetchAll());