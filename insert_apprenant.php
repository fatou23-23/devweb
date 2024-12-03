<?php
    require("db_connect.php");
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $matricule = mysqli_real_escape_string($dbConnection, htmlspecialchars($_POST["matricule"]));
        $prenom = mysqli_real_escape_string($dbConnection,htmlspecialchars($_POST["prenom"]));
        $nom = mysqli_real_escape_string($dbConnection,htmlspecialchars($_POST["nom"]));
        $telephone = mysqli_real_escape_string($dbConnection,htmlspecialchars($_POST["telephone"]));
        $email = mysqli_real_escape_string($dbConnection,htmlspecialchars($_POST["email"]));

        //Requête d'insertion des données
        $req = "INSERT INTO apprenant(matricule, prenom, nom, 
            telephone, email) VALUES ('$matricule', '$prenom', '$nom',
                '$telephone', '$email') ";
        if(mysqli_query($dbConnection, $req)){
            header("Location: selection_apprenant.php");
            die();
        }
        else{
            echo "Erreur: ".mysqli_error($dbConnection);
        }
    }
    mysqli_close($dbConnection);
?>