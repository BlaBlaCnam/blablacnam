<?php

require_once ".config.php";

global $db;

$query = $db->prepare("INSERT INTO MESSAGE (contenu, date_message, id_utilisateur_expediteur, id_utilisateur_destinataire)
                                        VALUES (? , date , ?, ?");
$query->execute([$_POST["contenu"],  $_SESSION["user"]["id_utilisateur"], $_POST["destinataire"]]);
