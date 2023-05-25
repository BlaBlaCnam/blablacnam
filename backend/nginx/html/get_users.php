<?php 

require_once ".config.php";

require_session(1);

global $db;

$query = $db->prepare("select UTILISATEUR.*, SECTION.nom as section, SITE.nom as site from UTILISATEUR, SECTION, SITE WHERE UTILISATEUR.id_section = SECTION.id_section and UTILISATEUR.id_site = SITE.id_site;");
$query->execute();

echo json_encode($query->fetchAll());