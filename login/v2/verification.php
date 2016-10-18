<?php

session_start();

// définition de constantes pour les données de l'utilisateur fictif.
// en "vrai" on récupérera ces données dans une base de données
define('USER_MAIL', "toto@gmail.com");
define('USER_PASS', "azerty");
define('USER_NAME', "Dupont");

// vérification : est ce que le mot de passe et le login
if (isset($_POST["login"]) && isset($_POST["password"])) {

    // si les infos d'identification ont été transmise
    // stockage du login / pass
    $login = $_POST["login"];
    $password = $_POST["password"];

    // vérification si infos transmises correspondent à infos attendues
    if ($login == USER_MAIL && $password == USER_PASS) {
        /* si correspondance :
            on crée un objet $user qui contient les infos qu'on connait pour l'utilisateur
         (comme si cela venait d'une base de données) */
        $user = [
            "nom" => USER_LASTNAME,
            "prenom" => USER_FIRSTNAME,
            "mail" => USER_MAIL
        ];

        $loginFailed = false;
    } else {
        // sinon si le login/pass ne correspondent pas on crée une variable pour indiquer
        $loginFailed = true;
        $errorMessage = '<div class="alert alert-danger">Erreur d\'identification</div>';
    }
}
?>

