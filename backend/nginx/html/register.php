<?php 

require_once ".config.php";

global $db;

$query = $db->prepare("INSERT INTO UTILISATEUR (id_utilisateur, nom,            prenom, email,                          mot_de_passe,                 telephone,       date_naissance, administrateur, id_section, id_site)
                                        VALUES ('test42', 'Faussurier', 'Marc', 'faussurier.marc@icloud.com', '". hash_pw('PommeDeTerre42#23') . "', '0627037228', '2000-02-20', 0, NULL, NULL)");
$query->execute();
