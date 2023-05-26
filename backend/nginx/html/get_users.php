<?php 

require_once ".config.php";

global $db;

$query = $db->prepare("select UTILISATEUR.*, SECTION.nom as section, SITE.nom as site from UTILISATEUR, SECTION, SITE WHERE UTILISATEUR.id_section = SECTION.id_section and UTILISATEUR.id_site = SITE.id_site order by id_utilisateur desc;");
$query->execute();

echo json_encode($query->fetchAll());