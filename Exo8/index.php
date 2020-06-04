<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exo 8 PHP</title>
</head>
<body>

<h1>Exercice 8</h1>

<p>Faire une fonction qui prend en paramètre trois nombres et qui renvoit la somme de ces nombres.  
Tous les paramètres doivent avoir une valeur par défaut.</p>
    
    <?php
function addNumbers($nb1 = 1, $nb2 = 2, $nb3 = 3){
    return $nb1 + $nb2 + $nb3;
}

echo addNumbers(5,6,7);
    ?>
</body>
</html>