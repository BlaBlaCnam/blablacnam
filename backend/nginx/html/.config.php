<?php

try 
{
    $db = new PDO("sqlsrv:Server=172.16.100.110,1433;Database=BLABLACNAM", "sa" , "d70PMWhgdzq8NAùùl73,;:jdqzo");
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

if (isset($_POST["PHPSESSID"]) || isset($_GET["PHPSESSID"]))
{
    if (!isset($_SESSION["is_logged_in"]) || !$_SESSION["is_logged_in"])
    {
        echo "La session à expiré, merci de vous reconnecter.";  
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
        echo "Vous devez être connecté pour continuer!";  
        exit;
    }

    if ($_SESSION["user"]["administrateur"] != $admin)
    {
        echo "Vous n'avez pas les bon droits!";
        exit;
    }
}