<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>Infos saisies</title>
</head>
<body>

<?php

//printf($_POST['nom']);

if (isset($_POST['nom'])) {
    echo "<p>Nom : " . $_POST['nom'] . '</p>';
}

if (isset($_POST['prenom'])) {
    echo "<p>Prénom : " . $_POST['prenom'] . '</p>';
}

if (isset($_POST['ville'])) {
    echo "<p>Ville : " . $_POST['ville'] . '</p>';
}

if (isset($_POST['majeur'])) {
    echo "<p>Majeur : " . $_POST['majeur'] . '</p>';
}

?>

</body>
</html>
