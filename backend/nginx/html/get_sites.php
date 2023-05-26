<?php 

require_once ".config.php";

global $db;

$query = $db->prepare("select SITE.*, VILLE.nom as ville from SITE, VILLE WHERE SITE.id_ville = VILLE.id_ville order by id_site desc;");
$query->execute();
echo json_encode($query->fetchAll());