<?php 
require_once ".config.php";

global $db;

$query = $db->prepare("INSERT INTO TRAJET (places, date_trajet, disponible, retour)
                        VALUES
                        (?, ?, ?, ?)");

$query->execute([$_POST["places"], date('d/m/Y H:i:s', strtotime($_POST["date"])), 1, $_POST["retour"]]);

$lastTrajetID = $db->lastInsertId();

$query = $db->prepare("INSERT INTO ARRET (id_trajet, id_ville, ordre)
                        VALUES
                        (?, ?, ?)");

$query->execute([$lastTrajetID, $_POST["depart"], 1]);

if (!empty($_POST["etape1"]))
{
    $query->execute([$lastTrajetID, $_POST["etape1"], 2]);

    if (!empty($_POST["etape2"]))
    {
        $query->execute([$lastTrajetID, $_POST["etape2"], 3]);
        $query->execute([$lastTrajetID, $_POST["arrivee"], 4]);
    } else {
        $query->execute([$lastTrajetID, $_POST["arrivee"], 3]);
    }
} else {
    $query->execute([$lastTrajetID, $_POST["arrivee"], 2]);
}

$query = $db->prepare("INSERT INTO TRAJET_UTILISATEUR (id_trajet, id_utilisateur, conducteur)
                        VALUES
                        (?, ?, ?)");
$query->execute([$lastTrajetID, $_SESSION["user"]["id_utilisateur"], 1]);

echo json_encode([]);