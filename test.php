<?php
include 'function.php';
include 'inc/header.php';



$lignes = explode('/', $_SERVER["SCRIPT_FILENAME"]);

$verif = end($lignes);

echo ($page === $verif) ? header("locaction:404.php") : " hum";
