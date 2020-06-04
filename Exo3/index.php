<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exo 3 PHP</title>
</head>
<body>

<h1>Exercice 3</h1>

<p>Faire une fonction qui prend en paramètre deux chaines de caractères et qui revoit la concaténation de ces deux chaines.</p>
    
    <?php

function showStrings($firstChain, $secondChain){
    return "$firstChain  $secondChain";
    
}

echo showStrings("Sau", "Cisse");
    ?>
</body>
</html>