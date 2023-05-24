<?php 

require_once ".config.php";


if (isset($_SESSION["is_logged_in"]))
echo json_decode($_SESSION["user"]);