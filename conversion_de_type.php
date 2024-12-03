<?php
    //Conversion de type ou casting
    
    //Conversion de type implicite
    $chaine1 = "25";
	$chaine2 = "75";
	$resultat = $chaine1 + $chaine2;

    //Conversion de type explicite
    $ageInt = 75;
    $ageFloat = (float)$ageInt; //Opération de casting
    $nombre1 = 25.36;
    $nombre2 = 10.25;
    $resultInt = (int) ($nombre1 + $nombre2); //On convertit le résultat de l'addition en int
    $ageString = (string)$ageInt;
    $realEnString = (string)$nombre1;
    //Les constantes
    define("MESSAGE", "Je suis une constante");
    define("DB_HOST", "localhost");
    define("DB_NAME", "isep_db");
    define("DB_USER", "root");
    define("DB_PASSWORD", "");
    echo MESSAGE;
    echo "<br/>";
    echo DB_HOST;
    echo "<br/>";
    echo DB_NAME;
    echo "<br/>";

    const PI = 3.14;
    const TVA = 0.18;

    var_dump($chaine1);
    echo "<br/>";
    var_dump($chaine2);
    echo "<br/>";
    var_dump($resultat);
    echo "<br/>";
    var_dump($ageInt);
    echo "<br/>";
    var_dump($ageFloat);
    echo "<br/>";
    var_dump($nombre1);
    echo "<br/>";
    var_dump($nombre2);
    echo "<br/>";
    var_dump($resultInt);

    //Déterminer le type d'un nombre avec gettype()
    $annee = 2000;
    $dateNaissance = "25/05/2000";
    echo "<br/>";
    echo 'Type de $annee: '.gettype($annee);
    echo "<br/>";
    echo 'Type de $dateNaissance: '.gettype($dateNaissance);

    //Vérifier le type d'une variable: résultat booléan
    echo "<br/>";

    //vérifier si $annee est un entier
    echo is_int($annee); 

    echo "<br/>";
    //Vérifier si $dateNaissance est une chaine
    echo is_string($dateNaissance);

    echo "<br/>";
    //Vérifier si $annee est une valeur numérique
    echo is_numeric($annee);
    
?>