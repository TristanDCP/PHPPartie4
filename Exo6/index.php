<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exo 6 PHP</title>
</head>
<body>

<h1>Exercice 6</h1>

<p>Faire une fonction qui prend trois paramètres : le nom, le prénom et l'âge d'une personne. Elle doit renvoyer une chaine de la forme :  
Bonjour + nom + prénom + , tu as + age + ans.</p>
    
    <?php

    function showNameAge($lastname, $firstname, $age){
    return "Bonjour  $lastname $firstname tu as  $age ans.";
}

echo showNameAge("Da Costa Pinto", "Tristan", 26);
    ?>
</body>
</html>