<?php

require_once ".config.php";

global $db;

$queryTrajets = $db->prepare("
    select TRAJET.id_trajet as id_trajet
    from TRAJET
    inner join ARRET on TRAJET.id_trajet = ARRET.id_trajet
    where 1=1
    group by TRAJET.id_trajet
");

$queryTrajets->execute();
$trajets = $queryTrajets->fetchAll();

foreach ($trajets as &$trajet) {
    $queryTrajetData = $db->prepare("select * from TRAJET where id_trajet = ?");
    $queryTrajetData->execute([$trajet['id_trajet']]);
    $trajetData = $queryTrajetData->fetch();

    $trajet['places'] = $trajetData['places'];
    $trajet['date_trajet'] = $trajetData['date_trajet'];
    $trajet['disponible'] = $trajetData['disponible'];
    $trajet['retour'] = $trajetData['retour'];

    $queryDepart = $db->prepare("
        select VILLE.nom as ville, SITE.nom as site
        from TRAJET
        inner join ARRET on TRAJET.id_trajet = ARRET.id_trajet
        inner join VILLE on ARRET.id_ville = VILLE.id_ville
        left join SITE on VILLE.id_ville = SITE.id_ville
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
        left join SITE on VILLE.id_ville = SITE.id_ville
        where TRAJET.id_trajet = ?
        order by ARRET.ordre desc
    ");
    $queryArrivee->execute([$trajet['id_trajet']]);
    $arrivee = $queryArrivee->fetch();

    $depart['site'] = $depart['site'] == null ? 'CNAM '.$depart['ville'] : $depart['site'];
    $arrivee['site'] = $arrivee['site'] == null ? 'CNAM '.$arrivee['ville'] : $arrivee['site'];

    $trajet['depart'] = $trajetData['retour'] == "1" ? $depart['site'] : $depart['ville'];
    $trajet['arrivee'] = $trajetData['retour'] == "1" ? $arrivee['ville'] : $arrivee['site'];
}

echo json_encode($trajets);