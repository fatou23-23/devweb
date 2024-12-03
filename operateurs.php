<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        //Les opérateurs arithmétiques
        $nombre1 = 10;
        $nombre2 = 5;

        $addition = $nombre1 + $nombre2;
        $soustraction = $nombre1 - $nombre2;
        $multiplication = $nombre1 * $nombre2;
        $division = $nombre1 / $nombre2;
        $modulo = $nombre1 % $nombre2;
        $puissance = $nombre1 ** $nombre2;

        echo "$nombre1 + $nombre2 = $addition <br/>";
        echo "$nombre1 - $nombre2 = $soustraction <br/>";
        echo "$nombre1 * $nombre2 = $multiplication <br/>";
        echo "$nombre1 / $nombre2 = $division <br/>";
        echo "$nombre1 % $nombre2 = $modulo <br/>";
        echo "$nombre1 ** $nombre2 = $puissance <br/>";

        //Opérateurs de comparaison
        $superieur = $nombre1 > $nombre2;
        $superieurOuEgal = $nombre1 >= $nombre2;
        $inferieur = $nombre1 < $nombre2;
        $inferieurOuEgal = $nombre1 <= $nombre2;
        $egal = $nombre1 == $nombre2;
        $differentDe = $nombre1 != $nombre2;

        echo "$nombre1 > $nombre2 = $superieur<br/>";
        echo "$nombre1 >= $nombre2 = $superieurOuEgal<br/>";
        echo "$nombre1 < $nombre2 = $inferieur<br/>";
        echo "$nombre1 <= $nombre2 = $inferieurOuEgal<br/>";
        echo "$nombre1 == $nombre2 = $egal<br/>";
        echo "$nombre1 != $nombre2 = $differentDe<br/>";

        //Opéreteurs combinés
        $valeur = 5; 
        $valeur += 2;
        echo $valeur;

        $valeur -= 3;
        echo "<br/>";
        echo $valeur;

        $valeur *= 5;
        echo "<br/>";
        echo $valeur;

        echo "<br/>";
        //Opérateur ternaire :
        echo $valeur < 100 ? "Vrai" : "Faux";
        echo "<br/>";
        echo $valeur > 100 ? "Vrai" : "Faux";

        //Opérateurs logiques
        $nombre3 = 10;
        $nombre4 = 5;
        $nombre5 = 3;
        $nombre6 = 7;

        $etLogique = ($nombre3 < $nombre4) && ($nombre5 > $nombre6); 
        echo "<br/>";
        echo $etLogique;

        $ouLogique = ($nombre3 > $nombre4) || ($nombre5 < $nombre6); 


      
    ?>
</body>
</html>