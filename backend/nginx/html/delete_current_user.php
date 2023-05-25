<?php 

require_once ".config.php";

global $db;

$query = $db->prepare("delete from UTILISATEUR where id_utilisateur = ?;");
$query->execute([$_SESSION["user"]["id_utilisateur"]]);

session_destroy();

echo json_encode([]);