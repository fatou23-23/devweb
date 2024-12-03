<?php
    //Récupération des données du formulaire
    $prenom = $_POST["prenom"];
    $nom = $_POST["nom"];
    $age = $_POST["age"];
    $email = $_POST["email"];
    $telephone = $_POST["telephone"];
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
        echo "Prénom: $prenom<br/>";
        echo "Nom: $nom<br/>";
        echo "Age: $age<br/>";
        echo "Email: $email<br/>";
        echo "Téléphone: $telephone<br/>";
    ?>
</body>
</html>