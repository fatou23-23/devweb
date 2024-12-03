<?php
    require("apprenant_data.php");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css"> 
</head>
<body>
    <div class="container">
        <form method="post" action="releve_note_ua.php">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Matricule</th>
                        <th>Prénom</th>
                        <th>Nom</th>
                        <th>Note</th>
                    </tr>  
                </thead>
                <tbody>
                    <?php
                        foreach($listApprenant as $cle => $valeurs){
                            echo "<tr>";
                            echo "<td>".$valeurs["matricule"]."</td>";
                            echo "<td>".$valeurs["prenom"]."</td>";
                            echo "<td>".$valeurs["nom"]."</td>";
                            echo "<td><input type='number' min='0' max='20' 
                                required name='notes[]'></td>";
                            echo "</tr>";
                        }
                    ?>
                </tbody>
                
            </table>
            <input type="submit" value="Envoyer" class="btn btn-primary" >
        </form>
    </div>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
</body>
</html>