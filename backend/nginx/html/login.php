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

$user["PHPSESSID"] = session_id();


$query = $db->prepare("select * from SITE where id_site = ?");
$query->execute([$user['id_site']]);

$user["site"] = $query->fetch();

$query = $db->prepare("select * from SECTION where id_section = ?");
$query->execute([$user['id_section']]);

$user["section"] = $query->fetch();

$_SESSION["user"] = $user;
$_SESSION["is_logged_in"] = true;

echo json_encode($user);