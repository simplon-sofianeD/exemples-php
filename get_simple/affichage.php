<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>affichage nom</title>
  </head>
  <body>

    <?php
      if((isset($_POST['nom']) && $_POST['nom']!=""))
        $nom = $_POST['nom'];
      else
        $nom = "Anonyme";

      $nom = (isset($_POST['nom']) && $_POST['nom']!="")
          ? $_POST['nom'] : 'non renseigné';
      echo "<h1>Salutation ".$nom." !</h1>";
    ?>

  </body>
</html>

<?php



?>
