<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exo 2 PHP</title>
</head>
<body>

<h1>Exercice 2</h1>

<p>Faire une fonction qui prend en paramètre une chaine de caractères et qui retourne cette même chaine.</p>
    
    <?php
    function returnString($showText){
        return $showText;
    }

    echo returnString("saucisse")
    ?>
</body>
</html>