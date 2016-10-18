<?php

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Identification</title>

    <!-- BOOTSTRAP & JQuery-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
          integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css"
          integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
            integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
            crossorigin="anonymous"></script>

    <style>
        #login-form {
            margin: 40px auto;
            width: 360px;
        }

        form {
            margin: 10px;
        }

        .fields {
            padding: 16px;
        }
    </style>
</head>
<body>


<?php
if (!isset($user)) {
    ?>
    <div id="login-form" class="panel panel-default">

        <div class="panel-heading">
            Identification
        </div>
        <div class="fields">

            <!-- si le login a échoué : afficher le message d'erreur -->
            <?php if (isset($loginFailed)) echo $errorMessage; ?>

            <form action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
                <div>

                    <label for="chpLogin">
                        Identifiant
                        <input id="chpLogin" type="text" name="login" <?php if($loginFailed) echo 'value="'.$login.'"'; ?>/>
                    </label>
                </div>
                <div>

                    <label for="chpPassword">
                        Mot de passe
                        <input id="chpPassword" type="password" name="password"/>
                    </label>
                </div>

                <button type="submit">Entrer</button>
            </form>
        </div>
    </div>
    <?php
} else // si l'identification a réussie
    echo "<h1>Bienvenue " . $user['prenom'] . " " . $user['nom'] . "</h1>"

?>
</body>
</html>
