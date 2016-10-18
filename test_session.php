<?php
session_start();

$_SESSION['compteur'] =
    isset($_SESSION['compteur'])
        ? (int)$_SESSION['compteur'] + 1
        : 0;

echo "Compteur : ".$_SESSION['compteur'];

?>



