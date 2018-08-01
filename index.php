<?php
//Déclaration d'une fonction qui retourne une chaîne de caractères passer en paramètres
function st($text){
  return $text;
}
?>
<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8" />
    <title>Exercice 2/4</title>
  </head>
  <body>
    <p>
      <?= st('Bonjour'); // Affichage du retour de la fonction et on donne une valeur à son paramètre ?>
    </p>
  </body>
</html>
