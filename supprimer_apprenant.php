<?php
    require("db_connect.php");

    if(!empty($_POST["id"])){
        
        $req = "DELETE FROM apprenant WHERE id = ?";
        
        if($stmt = mysqli_prepare($dbConnection, $req)){
            mysqli_stmt_bind_param($stmt, "i", $paramId);
            
            $paramId = trim($_POST["id"]);
            
            /*supprimé l'apprenant et retourner à la liste des apprenants */
            if(mysqli_stmt_execute($stmt)){
                
                header("Location: selection_apprenant.php");
                die();
            } else{
                echo "Hola! une erreur est survenue lors de la surpression.";
            }
        }

        //On ferme le statement
        mysqli_stmt_close($stmt);
        
        //On ferme la connexion ()
        mysqli_close($dbConnection);
    } else{
        /* verifier si le paramètre id de la requête de suppression exite */
        if(empty(trim($_GET["id"]))){
            header("Location: error.php");
            die();
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Supprimer un apprenant</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css"> 
</head>
<body>
    <div class="container">
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
        <div class="alert alert-danger">
            <input type="hidden" name="id" value="<?php echo trim($_GET["id"]); ?>"/>
            <p>Etes vous sûr de vouloir supprimer cet apprenant ?</p>
            <p>
                <input type="submit" value="Oui" class="btn btn-danger">
                <a href="selection_apprenant.php" class="btn btn-secondary">Annuler</a>
            </p>
        </div>
    </div>
</body>
</html>