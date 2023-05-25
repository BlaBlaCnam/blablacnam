<?php 

require_once ".config.php";

global $db;

require_session();

if (hash_pw($_POST["old_pw"]) != $_SESSION["user"]["mot_de_passe"])
{
    echo "L'ancien mot de passe est incorrect!";
    exit;
}

check_pw_safety($_POST["pw1"]);

if ($_POST["pw1"] == $_POST["pw2"])
{
    $query = $db->prepare("UPDATE UTILISATEUR SET mot_de_passe = ? where id_utilisateur = ?");
    $query->execute([hash_pw($_POST["pw1"]), $_SESSION["user"]["id_utilisateur"]]);
    echo json_encode([]); 

}
else 
{
    echo "Les mots de passe ne sont pas identiques!";
    exit;
}