<?php
if (isset($_GET['nom']))
    echo "GET : coucou " . $_GET['nom'];
else if (isset($_POST['nom']) && isset($_POST['prenom']))
    echo "POST : coucou " . $_POST['nom'] . " " . $_POST['prenom'];
else
    echo 'rien reçu';


?>
