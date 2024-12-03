<?php
     require("apprenant_data.php");
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Relevé de notes UA</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css"> 
</head>
<body>
    <div class="container">
        <?php
            if($_SERVER["REQUEST_METHOD"] === "POST"){
                $notes = $_POST["notes"];
                echo "<table class='table table-bordered'>";
                echo "<thead>";
                echo "<tr>";
                echo "<th>Matricule</th>";
                echo "<th>Prénom</th>";
                echo "<th>Nom</th>";
                echo "<th>Note</th>";
                echo "</tr>"; 
                echo "</thead>";
                echo "<tbody>";
                foreach($listApprenant as $cle => $valeurs){
                    echo "<tr>";
                    echo "<td>".$valeurs["matricule"]."</td>";
                    echo "<td>".$valeurs["prenom"]."</td>";
                    echo "<td>".$valeurs["nom"]."</td>";
                    echo "<td>".$notes[$cle]."</td>";
                    echo "</tr>";
                }
                echo "</tbody>";
            echo "</table>";
            }
        ?>
    </div>

    <script src="assets/js/bootstrap.bundle.min.js"></script>
</body>
</html>