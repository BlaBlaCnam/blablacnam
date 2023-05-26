<?php

require ".config.php";

global $db;

require_session(1);


$query = $db->prepare("delete from MESSAGE where id_message = ?");
$query->execute([$_GET["id"]]);



echo json_encode([]);