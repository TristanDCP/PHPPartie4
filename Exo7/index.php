<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exo 7 PHP</title>
</head>
<body>

<h1>Exercice 7</h1>

<p>Faire une fonction qui prend deux paramètres : l'âge et le genre d'une personne. Le genre peut être :

Homme
Femme  


La fonction doit renvoyer en fonction des paramètres :

Vous êtes un homme et vous êtes majeur
Vous êtes un homme et vous êtes mineur
Vous êtes une femme et vous êtes majeure
Vous êtes une femme et vous êtes mineure </p>
    
    <?php
function showGenderAge($gender, $age){
    if($gender == "Homme" && $age >=18){
        echo "Vous êtes un homme et vous êtes majeur";
    } else if ($gender == "Homme" && $age <=18){
        echo "Vous êtes un homme et vous êtes mineur";
    } else if ($gender == "Femme" && $age >=18){
        echo "Vous êtes une femme et vous êtes majeure";
    } else if ($gender == "Femme" && $age <=18){
        echo "Vous êtes une femme et vous être mineure";
    }}
echo showGenderAge("Homme", 26);
    ?>
</body>
</html>