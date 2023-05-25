<?php
//Que les messages recu ou envoyé  d un utilisateur
require_once ".config.php";

require_session(1);

global $db;

$query = $db->prepare("select *  from MESSAGE WHERE id_utilisateur_expeditateur = ? OR id_utilisateur_destinataire = ?;");
$query->execute([$_SESSION["user"]["id_utilisateur"], $_SESSION["user"]["id_utilisateur"]]);

echo json_encode($query->fetchAll());