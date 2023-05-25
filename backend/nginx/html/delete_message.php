<?php

require ".config.php";

global $db;

require_session(1);


$query = $db->prepare("delete from MESSAGE where id_utilisateur_destinataire = ? or id_utilisateur_expediteur = ?");
$query->execute([$_GET["id"],  $_GET["id"]]);



echo json_encode([]);