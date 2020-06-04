<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exo 5 PHP</title>
</head>
<body>

<h1>Exercice 5</h1>

<p>Faire une fonction qui prend en paramètre un nombre et une chaine de caractères et qui renvoit la concaténation de ces deux paramètres.</p>
<?php

function concatNumberStrings($firstNumber, $firstString){
    return "$firstNumber $firstString";
}
    echo concatNumberStrings(1, "salut")
      ?>
</body>
</html>