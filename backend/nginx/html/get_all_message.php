<?php

require_once ".config.php";

require_session(1);

global $db;

$query = $db->prepare("select *  from MESSAGE order by id_message desc;");
$query->execute();

echo json_encode($query->fetchAll());