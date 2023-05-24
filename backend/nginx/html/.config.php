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

header("Content-Type: text/html; charset=utf-8");
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Credentials: true");
header("Access-Control-Allow-Headers: X-Requested-With");