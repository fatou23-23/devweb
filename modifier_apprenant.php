<?php
    require("db_connect.php");

    $matricule = $prenom = $nom = $telephone = $emain = "";

    //Si le formulaire a été soumis pour enregistrer les modifications 
    //dansla base de données
    //On vérifie si l'id est présent dansle formulaire soumis et qu'il n'est pasvide,on le récumpère
    //pour lamise à jour des données dansla base de données
    if(!empty($_POST["id"])){
        $id = $_POST["id"];
        
        //On récupère aussi les autres données du formulaire
        $matricule = mysqli_real_escape_string($dbConnection, htmlspecialchars($_POST["matricule"]));
        $prenom = mysqli_real_escape_string($dbConnection, htmlspecialchars($_POST["prenom"]));
        $nom = mysqli_real_escape_string($dbConnection, htmlspecialchars($_POST["nom"]));
        $telephone = mysqli_real_escape_string($dbConnection, htmlspecialchars($_POST["telephone"]));
        $email = mysqli_real_escape_string($dbConnection, htmlspecialchars($_POST["email"]));

        //on créé une requête paramétrée de mise à jour des donnéés
        $req = "UPDATE apprenant SET matricule = ?, prenom = ?, nom = ?, telephone = ?, 
            email = ? WHERE id = ?";
        if($stmt = mysqli_prepare($dbConnection, $req)){

            //Chaque s représente une chaîne decaractères et le i représente une valeurnumérique(l'id)
            mysqli_stmt_bind_param($stmt, "sssssi", $paramMatricule, $paramPrenom, $paramNom, 
                $paramTelephone, $paramEmail, $paramId);

                $paramMatricule = $matricule;
                $paramPrenom = $prenom;
                $paramNom = $nom;
                $paramTelephone = $telephone;
                $paramEmail = $email;
                $paramId = $id;

                if(mysqli_stmt_execute($stmt)){
                    /* enregistremnt modifié, rediriger vers la liste des apprenants */
                    header("location: selection_apprenant.php");
                    die();
                } else{
                    echo "Hola! une erreur est survenue lors de la mise à jour des données.";
                }
                mysqli_stmt_close($stmt);
        }
        mysqli_close($dbConnection);

    }
    else{
        if(!empty(trim($_GET["id"]))){
            $id = trim($_GET["id"]);
            $req = "SELECT * FROM apprenant WHERE id = ? ";
            if($stmt = mysqli_prepare($dbConnection, $req)){

                //Préparation d'une requête paramétrée
                mysqli_stmt_bind_param($stmt, "i", $paramId);
                $paramId = $id;

                //Tantative d'xécution de la requête paramétrée
                if(mysqli_stmt_execute($stmt)){
                    $resultat = mysqli_stmt_get_result($stmt);

                    //S'il ya une seule ligne d'enregistrement trouvée
                    if(mysqli_num_rows($resultat) == 1){
                        //On récupère le résultat en tan que tableau associatif
                        //Comme il n'y a qu'une seule ligne à récupérer,
                        //on a pasbesoin de faireune bouclewhile
                        $row = mysqli_fetch_array($resultat, MYSQLI_ASSOC);
                        
                        //On récupère le contenu de chaque colonne ramenée de la base
                        $matricule = $row["matricule"];
                        $prenom = $row["prenom"];
                        $nom = $row["nom"];
                        $telephone = $row["telephone"];
                        $email = $row["email"];
                    }
                    else{
                        //l'id contenu dansl'URL n'est pasvalide
                        header("Location: error.php");
                    }
                }
                else{
                    echo "Queqlue chose s'est mal passée. Veuillez reessayer ";
                }
            }
            mysqli_stmt_close($stmt);

            mysqli_close($dbConnection);
        }
        else{
            //l'URL ne contient pasle paramètre id
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
    <title>Modifier apprenant</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css"> 
</head>
<body>
<div class="container">
        <h1>Formulaire de création d'un apprenant</h1>
        <form action="<?php echo htmlspecialchars(basename($_SERVER['REQUEST_URI'])); ?>" method="post">
            <div class="form-group mb-3">
                <label for="matricule">Matricule</label>
                <input class="form-control" id="matricule" type="text" name="matricule" value="<?php echo $matricule; ?>">
            </div>    
            <div class="form-group mb-3">
                <label for="prenom">Prenom</label>
                <input class="form-control" id="prenom" type="text" name="prenom" value="<?php echo $prenom; ?>">
            </div>
            <div class="form-group mb-3">
                <label for="nom">Nom</label>
                <input class="form-control" id="nom" type="text" name="nom" value="<?php echo $nom; ?>">
            </div>
            <div class="form-group mb-3">
                <label for="telephone">Téléphone</label>
                <input class="form-control" id="telephone" type="text" name="telephone" value="<?php echo $telephone; ?>">
            </div>
            <div class="form-group mb-3">
                <label for="email">Email</label>
                <input class="form-control" id="email" type="email" name="email" value="<?php echo $email; ?>">
            </div>
            <input type="hidden" name="id" value="<?php echo $id; ?>"/>
            <input type="submit" class="btn btn-primary" value="Envoyer">
        </form>
    </div>

    <script src="assets/js/bootstrap.bundle.min.js"></script>
</body>
</html>