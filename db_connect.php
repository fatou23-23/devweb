<?php
    $dbHost = "localhost";
    $dbUser = "root";
    $dbPassword = "";
    $dbName = "gestionnotesisep";

    //Connexion à la base de données
    $dbConnection = mysqli_connect($dbHost, $dbUser, 
        $dbPassword, $dbName) or die(mysqli_connect_error());
    mysqli_set_charset($dbConnection, 'utf8');