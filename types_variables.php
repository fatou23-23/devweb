<?php
    //Les variables scalaires
    //Nombres entiers
    $age = 25;
    $matricule = 0052415;

    //Nombres réels
    $prixUnitaire = 555.25;
    $temperature = 25487.25;

    //Chaînes de caractères
    $prenom = "Moussa";
    $email = "moussa.diba@gmail.com";

    //Booléens
    $isNombrePremier = false;
    $isMasculin = true;

    //Tableaux
    $nombres = array(1, 0, 100, 500, -1, 25);
    $pays = ["Sénégal", "Mali", "Niger"];

    //Valeur nulle
    $valeurNulle = null;

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
        //Déterminer le type d'une variable
        var_dump($isMasculin);
        echo "<br/>";
        var_dump($age);
        echo "<br/>";
        var_dump($nombres);
        echo "<br/>";
        var_dump($pays);
        echo "<br/>";
        var_dump($valeurNulle);
    ?>
</body>
</html>