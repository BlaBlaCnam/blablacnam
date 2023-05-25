<?php 

require_once ".config.php";

global $db;

$query = $db->prepare("INSERT INTO TRAJET (places, date_trajet, disponible, retour)
                        VALUES
                        (?, ?, ?, ?)");

var_dump(new DateTime($_POST["date"]));
$query->execute([$_POST["places"], new DateTime('d/m/Y hh:mm',$_POST["date"]), 1, $_POST["retour"]]);

$lastTrajetID = $db->lastInsertId();

$query = $db->prepare("INSERT INTO ARRET (id_trajet, id_ville, ordre)
                        VALUES
                        (?, ?, ?)");
$query->execute([$lastTrajetID, $_POST["depart"], $_POST["1"]]);
$query->execute([$lastTrajetID, $_POST["etape1"], $_POST["2"]]);
$query->execute([$lastTrajetID, $_POST["etape2"], $_POST["3"]]);
$query->execute([$lastTrajetID, $_POST["arrivee"], $_POST["4"]]);

$query = $db->prepare("INSERT INTO TRAJET_UTILISATEUR (id_trajet, id_utilisateur, conducteur)
                        VALUES
                        (?, ?, ?)");
$query->execute([$lastTrajetID, $_SESSION["user"]["id_utilisateur"], 1]);

echo json_encode([]);