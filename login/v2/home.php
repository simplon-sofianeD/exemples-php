<?php
    session_start();

if( isset($_SESSION['user']) && $_SESSION['user'] != ''){
    $user = $_SESSION['user'];
    $welcomeMessage = "Bienvenue ".$user['prenom']." ".$user['nom'];
} else
    header("location:login.php");
?>

<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>Mon Appli / Accueil</title>
    <script type="text/javascript">
        window.onpageshow = function(event) {
            if (event.persisted) {
                window.location.reload() ;
            }
        };
    </script>
    <?php include_once "fragments/styles.html"; ?>
</head>
<body>

<?php include_once "fragments/header.php"; ?>

<h1><?php echo $welcomeMessage ?></h1>

</body>
</html>