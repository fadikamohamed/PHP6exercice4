<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8" />
    <title>Exercice 4</title>
  </head>
  <body>
    <p>
      <?php
        //index.php?language=PHP&server=LAMP
        if (isset($_GET['language']) AND isset($_GET['server'])) {
          echo 'Le language est ' . $_GET['language'] . ' et le serveur est ' . $_GET['server'];
        }
       ?>
    </p>
  </body>
</html>
