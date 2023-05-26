<?php
//Que les messages recu ou envoyé  d un utilisateur
require_once ".config.php";


global $db;

$query = $db->prepare("select *  from MESSAGE WHERE id_utilisateur_expediteur = ? OR id_utilisateur_destinataire = ?;");
$query->execute([$_SESSION["user"]["id_utilisateur"], $_SESSION["user"]["id_utilisateur"]]);

echo json_encode($query->fetchAll());