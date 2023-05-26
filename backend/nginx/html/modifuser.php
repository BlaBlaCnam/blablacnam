<?php 

require_once ".config.php";

require_session();

global $db;

$query = $db->prepare("update UTILISATEUR set id_section = ?, 
id_site = ?, nom = ?, prenom = ?, telephone = ?, email = ?, date_naissance = ? where id_utilisateur = ?");
$query->execute([$_POST["section"], $_POST["site"], $_POST["nom"], $_POST["prenom"], $_POST["telephone"], 
$_POST["email"], $_POST["date_naissance"], $_SESSION["user"]["id_utilisateur"]]);



$query = $db->prepare("select * from UTILISATEUR where id_utilisateur = ?");
$query->execute([$_SESSION["user"]["id_utilisateur"]]);
$user = $query->fetch();
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