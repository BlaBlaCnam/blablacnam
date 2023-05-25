<?php 

require_once ".config.php";

global $db;

$query = $db->prepare("select * NUMERO_ARA where id_ara = ?");
$query->execute([$_POST["id_ara"]]);

var_dump($query->fetch());