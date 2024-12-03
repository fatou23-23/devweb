<?php
    require("db_connect.php");
    $apprenantData = [];

    //Requête de sélection des données de la tablea
    $req = "SELECT * FROM apprenant";
    $resultat = mysqli_query($dbConnection, $req);
    if(mysqli_num_rows($resultat) > 0){
        while($row = mysqli_fetch_assoc($resultat)){
            $apprenantData[] = $row;
        }
        //Libérer le result set 
        mysqli_free_result($resultat);
    } 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List desapprenants</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">   
</head>
<body>
    <div class="container">
        <div class="mt-3 mb-3">
            <a href="form_apprenant.php" class="btn btn-success">Nouveau</a>
        </div>
        <h1>Liste des apprenants</h1>
        <table class="table table-striped table-bordered">
            <thead>
                <th>Matricule</th>
                <th>Prenom</th>
                <th>Nom</th>
                <th>Téléphone</th>
                <th>E-mail</th>
                <th>Action</th>
            </thead>
            <tbody>
                <?php
                    foreach($apprenantData as $cle => $valeur){
                        echo '<tr>';
                        echo '<td>'.$valeur["matricule"].'</td>';
                        echo '<td>'.$valeur["prenom"].'</td>';
                        echo '<td>'.$valeur["nom"].'</td>';
                        echo '<td>'.$valeur["telephone"].'</td>';
                        echo '<td>'.$valeur["email"].'</td>';
                        echo '<td>';
                        echo '<a href="modifier_apprenant.php?id='.$valeur['id'].'" class="btn btn-primary">Modifier</a>';
                        echo '&nbsp;&nbsp;<a href="supprimer_apprenant.php?id='.$valeur['id'].'" class="btn btn-danger">Supprimer</a>';
                        echo "</td>";
                        echo "</tr>";
                    }
                ?>
            </tbody>
        </table>
    </div>

    <script src="assets/js/bootstrap.bundle.min.js"></script>
</body>
</html>