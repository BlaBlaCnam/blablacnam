<?php 

require_once ".config.php";


global $db;

$query = $db->prepare("select * from UTILISATEUR where id_utilisateur = ? and mot_de_passe = ?");
$query->execute([$_POST["user"], hash_pw($_POST["pw"])]);

$user = $query->fetch();
if (!$user)
{
    echo "Utilisateur ou mot de passe invalide!";
    exit;
}

session_start();

$user["PHPSESSID"] = session_id();

$_SESSION["user"] = $user;

echo json_encode($user);