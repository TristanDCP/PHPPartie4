<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exo 4 PHP</title>
</head>
<body>

<h1>Exercice 4</h1>

<p>Faire une fonction qui prend en paramètre deux nombres. La fonction doit retourner :

Le premier nombre est plus grand si le premier nombre est plus grand que le deuxième
Le premier nombre est plus petit si le premier nombre est plus petit que le deuxième
Les deux nombres sont identiques si les deux nombres sont égaux</p>
    
    <?php
function showNumbers($isnb1, $isnb2){
    if ($isnb1 > $isnb2){
        echo "Le premier nombre est plus grand.";
    } else if ($isnb1 < $isnb2){
        echo "Le premier nombre est le plus petit.";
    } else if ($isnb1 == $isnb2){
        echo "Les deux nombres sont identiques.";
    }
}

echo showNumbers(1, 6);
    ?>
</body>
</html>