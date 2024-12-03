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
        <h1>Formulaire d'information</h1>
        <form action="resultat.php" method="post">
            <div class="form-group mb-3">
                <label for="prenom">Prenom</label>
                <input class="form-control" id="prenom" type="text" name="prenom">
            </div>
            <div class="form-group mb-3">
                <label for="nom">Nom</label>
                <input class="form-control" id="nom" type="text" name="nom">
            </div>
            <div class="form-group mb-3">
                <label for="age">Age</label>
                <input class="form-control" id="age" type="number" min="0" name="age">
            </div>
            <div class="form-group mb-3">
                <label for="email">Email</label>
                <input class="form-control" id="email" type="email" name="email">
            </div>
            <div class="form-group mb-3">
                <label for="telephone">Téléphone</label>
                <input class="form-control" id="telephone" type="text" name="telephone">
            </div>
            <input type="submit" class="btn btn-primary" value="Envoyer">
        </form>
    </div>

    <script src="assets/js/bootstrap.bundle.min.js"></script>
</body>
</html>