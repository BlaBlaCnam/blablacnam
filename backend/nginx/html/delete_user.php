<?php 

require ".config.php";

global $db;

require_session(1);

// TODO : delete references in trajet etc.

$query = $db->prepare("delete from TRAJET_UTILISATEUR where id_utilisateur = ?");
$query->execute([$_GET["id"]]);

$query = $db->prepare("delete from MESSAGE where id_utilisateur_destinataire = ? or id_utilisateur_expediteur = ?");
$query->execute([$_GET["id"],  $_GET["id"]]);

$query = $db->prepare("delete from UTILISATEUR where id_utilisateur = ?");
$query->execute([$_GET["id"]]);

echo json_encode([]);