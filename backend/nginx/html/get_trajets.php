<?php

require_once ".config.php";

global $db;

$condition = "";
$parametresConditions = [];
$andOrVille = isset($_POST['id_site']) ? 'or' : 'and';

if (isset($_POST['id_site'])) {
    $minOrMaxArretSite = 0 == $_POST['retour'] ? 'max' : 'min' ;
    $condition .= " and ARRET.ordre = (SELECT $minOrMaxArretSite(a.ordre) FROM ARRET a WHERE a.id_trajet = ARRET.id_trajet) and ARRET.id_ville = (SELECT s.id_ville FROM SITE s WHERE s.id_site = ?)";
    $parametresConditions[] = $_POST['id_site'];
}
if (isset($_POST['id_ville'])) {
    $minOrMaxArretVille = 0 == $_POST['retour'] ? 'min' : 'max' ;
    $condition .= " $andOrVille ARRET.ordre = (select $minOrMaxArretVille(a.ordre) from ARRET a where a.id_trajet = ARRET.id_trajet) and ARRET.id_ville = ?";
    $parametresConditions[] = $_POST['id_ville'];
}
//if (isset($_POST['date_trajet'])) {
//    $condition .= "  and TRAJET.date_trajet like '%?%'";
//    $parametresConditions[] = $_POST['date_trajet'];
//}

$queryTrajets = $db->prepare("
    select *
    from TRAJET
    inner join ARRET on TRAJET.id_trajet = ARRET.id_trajet
    where 1=1
");
$queryTrajets->execute($parametresConditions);
$trajets = $queryTrajets->fetchAll();

function isRetour($trajet) {
    return $trajet['retour'] == 1;
}

foreach ($trajets as &$trajet) {
    $queryNbReservations = $db->prepare("
        select COUNT(TRAJET_UTILISATEUR.id_utilisateur) as nb_reservations
        from TRAJET
        inner join TRAJET_UTILISATEUR on TRAJET.id_trajet = TRAJET_UTILISATEUR.id_trajet
        where TRAJET_UTILISATEUR.conducteur = 0
        and TRAJET.id_trajet = ?
        group by TRAJET.id_trajet
    ");
    $queryNbReservations->execute([$trajet['id_trajet']]);
    $nbReservations = $queryNbReservations->fetch() ?? 0;

    $queryDepart = $db->prepare("
        select VILLE.nom as ville, SITE.nom as site
        from TRAJET
        inner join ARRET on TRAJET.id_trajet = ARRET.id_trajet
        inner join VILLE on ARRET.id_ville = VILLE.id_ville
        inner join SITE on VILLE.id_ville = SITE.id_ville
        where TRAJET.id_trajet = ?
        order by ARRET.ordre asc
    ");
    $queryDepart->execute([$trajet['id_trajet']]);
    $depart = $queryDepart->fetch();

    $queryArrivee = $db->prepare("
        select VILLE.nom as ville, SITE.nom as site
        from TRAJET
        inner join ARRET on TRAJET.id_trajet = ARRET.id_trajet
        inner join VILLE on ARRET.id_ville = VILLE.id_ville
        inner join SITE on VILLE.id_ville = SITE.id_ville
        where TRAJET.id_trajet = ?
        order by ARRET.ordre desc
    ");
    $queryArrivee->execute([$trajet['id_trajet']]);
    $arrivee = $queryArrivee->fetch();

    $trajet['nb_places_libres'] = $trajet['places'] - $nbReservations['nb_reservations'];
    $trajet['depart'] = $trajet['retour'] == 1 ? $depart['site'] : $depart['ville'];
    $trajet['arrivee'] = $trajet['retour'] == 1 ? $arrivee['ville'] : $arrivee['site'];
}

echo json_encode($trajets);