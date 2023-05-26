<?php
//Que les messages recu ou envoyé  d un utilisateur
require_once ".config.php";


global $db;

$query = $db->prepare("select *  from MESSAGE where id_message = ?");
$query->execute([$_GET["id"]]);
echo json_encode($query->fetch());