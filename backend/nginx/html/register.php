<?php 

require_once ".config.php";

global $db;

$query = $db->prepare("select * from UTILISATEUR where id_utilisateur = ?");
$query->execute([$_POST["id_ara"]]);
if ($query->fetch())
{
    echo "Le numero ARA est deja utilise!";
    exit;    
}

if (empty($_POST["section"] || empty($_POST["site"])))
{
    echo "Merci de remplir tous les champs";
    exit;
}

$query = $db->prepare("select * from NUMERO_ARA where id_ara = ?");
$query->execute([$_POST["id_ara"]]);

$ara = $query->fetch();

if (!$ara)
{
    echo "Le numero ARA existe pas!";
    exit;
}


check_pw_safety($_POST["pw"]);



$query = $db->prepare("INSERT INTO 
                UTILISATEUR (id_utilisateur, nom,            prenom,        email,          mot_de_passe,                 telephone,       date_naissance, administrateur, id_section, id_site)
                    VALUES (?,              ?,                  ?,          ?,              ?,                          ?,              ?,              0,               ?,          ?)");
$query->execute([$ara["id_ara"],        $ara["nom"],        $ara["prenom"], $_POST["mail"], hash_pw($_POST["pw"]),       $_POST["phone"], $_POST["date_naissance"], $_POST["section"], $_POST["site"]]);

echo json_encode([]);