<?php

try 
{
    $db = new PDO("sqlsrv:Server=172.16.100.110;Database=BLABLACNAM", "sa" , "d70PMWhgdzq8NAùùl73,;:jdqzo");
} 
catch (Exception $ex)
{
    echo "Failed to connect to DB.";
    exit;
}

$salt = "dwajlojdwa4dwa64687486442";

function hash_pw($pw)
{
    global $salt;

    return (sha1($pw . $salt));
}

if (isset($_POST["PHPSESSID"]))
    session_id($_POST["PHPSESSID"]);
else if (isset($_GET["PHPSESSID"]))
    session_id($_GET["PHPSESSID"]);

session_start();


if (isset($_SESSION["is_logged_in"]) && $_SESSION["is_logged_in"])
{
    $query = $db->prepare("select * from UTILISATEUR where id_utilisateur = ?");
    $query->execute([$_SESSION["user"]["id_utilisateur"]]);
    if (!$query->fetch())
    {
        session_destroy();
        echo json_encode(["session_expired" => true]);
        exit;
    }
}

if (isset($_POST["PHPSESSID"]) || isset($_GET["PHPSESSID"]))
{
    if (!isset($_SESSION["is_logged_in"]) || !$_SESSION["is_logged_in"])
    {
        echo json_encode(["session_expired" => true]);
        exit;
    }
}


header("Content-Type: text/html; charset=utf-8");
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Credentials: true");
header("Access-Control-Allow-Headers: X-Requested-With");

function require_session($admin = 0)
{
    if (!isset($_SESSION["is_logged_in"]) || !$_SESSION["is_logged_in"])
    {
        session_destroy();
        echo json_encode(["session_expired" => true]);
        exit;
    }

    if ($_SESSION["user"]["administrateur"] != $admin)
    {
        session_destroy();
        echo json_encode(["session_expired" => true]);
        exit;
    }
}

function check_pw_safety($pw)
{
    if (strlen($pw) < 5)
    {
        echo "Le mot de passe doit etre d'au moins 6 caracteres!";
        exit ;
    }
}
