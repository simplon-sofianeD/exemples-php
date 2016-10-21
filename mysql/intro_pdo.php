<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Auteurs</title>

<body>

<?php
try {
    // on ouvre une connexion à la base de données
    $connexion = new PDO(
        'mysql:host=localhost:3306;dbname=blog;charset=utf8',
        'root', 'root');
} catch (Exception $excp) {
    die('Erreur : ' . $excp->getMessage());
}

if( isset($_POST['nom']) && isset($_POST['prenom']) && isset($_POST['mail']) ){
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $mail = $_POST['mail'];

    $qInsertion = "INSERT INTO auteurs (nom, prenom, mail) "
                    ." VALUES ( :nom, :prenom, :mail )";

    $rq = $connexion->prepare($qInsertion);

    $rq->bindParam(":nom", $nom, PDO::PARAM_STR);
    $rq->bindParam(":prenom", $prenom, PDO::PARAM_STR);
    $rq->bindParam(":mail", $mail, PDO::PARAM_STR);

    $rq->execute();

}

//echo "Resultat insertion : ".printf($resultat).'</br>';

$requete = "SELECT * FROM auteurs";
$resultats = $connexion->query($requete);

while ($auteur = $resultats->fetch()) {
    echo "<div>" . $auteur["prenom"] . " » " . $auteur["mail"] . "</div>";
}
$resultats->closeCursor();

?>

<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
    <label for="fldNom">
        Nom
        <input id="fldNom" type="text" name="nom"/>
    </label>
    <label for="fldPrenom">
        Prenom
        <input id="fldPrenom" type="text" name="prenom"/>
    </label>
    <label for="fldMail">
        Mail
        <input id="fldMail" type="text" name="mail"/>
    </label>
    <button>Ajouter</button>
</form>


</body>
</html>
