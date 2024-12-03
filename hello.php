<?php
    $prenom;
    $nom;
    $age;

    $ecole = "ISEP";
    $salleFormation = "M25";
    $dateNaissance = "25/05/2000";

    $prenom = "Moussa";
    $nom = "Ndiaye";
    $age = 25;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        echo "Bonjour en PHP<br/>"; 
        echo "Prénom: $prenom<br/>";
        echo "Nom: $nom<br/>";
        echo "Age: $age<br/>";
        echo "Ecole: $ecole<br/>";
        
        echo "Salle de formation: ".$salleFormation."<br/>";
        echo "Date de naissance: ".$dateNaissance."<br/>";
    ?>
</body>
</html>