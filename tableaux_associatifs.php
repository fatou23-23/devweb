<?php
    //Création d'un tableau associatif
    $jours = array("lun" => "Lundi", "mar" => "Mardi",
        "mer" => "Mercredi", "jeu" => "Jeudi",
        "ven" => "Vendredi", "sam" => "Samedi", 
        "dim" => "Dimanche");
    
    $couleurs = [];
    $couleurs["blanc"] = "Blanc";
    $couleurs["jaune"] = "Jaune";
    $couleurs["vert"] = "Vert";
    $couleurs["noir"] = "Noir";
    $couleurs["rouge"] = "Rouge";
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
        //Affichage des valeursdu tableau $jour avec foreach
        foreach($jours as $cle => $valeur){
            echo "$cle : $valeur<br/>";
        }
    ?>
</body>
</html>