<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Créer Apprenant</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">   
</head>
<body>
    <div class="container">
        <h1>Formulaire de création d'un apprenant</h1>
        <form action="insert_apprenant.php" method="post">
            <div class="form-group mb-3">
                <label for="matricule">Matricule</label>
                <input class="form-control" id="matricule" type="text" name="matricule">
            </div>    
            <div class="form-group mb-3">
                <label for="prenom">Prenom</label>
                <input class="form-control" id="prenom" type="text" name="prenom">
            </div>
            <div class="form-group mb-3">
                <label for="nom">Nom</label>
                <input class="form-control" id="nom" type="text" name="nom">
            </div>
            <div class="form-group mb-3">
                <label for="telephone">Téléphone</label>
                <input class="form-control" id="telephone" type="text" name="telephone">
            </div>
            <div class="form-group mb-3">
                <label for="email">Email</label>
                <input class="form-control" id="email" type="email" name="email">
            </div>
            <input type="submit" class="btn btn-primary" value="Envoyer">
        </form>
    </div>

    <script src="assets/js/bootstrap.bundle.min.js"></script>
</body>
</html>