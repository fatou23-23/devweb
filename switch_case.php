<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        //switch...case
        $jour = "Lundi";
        switch($jour){
            case "Lundi":
                echo "Lundi, premier jour de la semaine";
                break;
            case "Mardi":
                echo "Mardi, deuxième jour de la semaine";
                break;
            case "Mercredi":
                echo "Mercredi, trosième jour de la semaine";
                break;
            case "Jeudi":
                echo "Jeudi, quatrième jour de la semaine";
                break;
            case "Vendredi":
                echo "Vendredi, cinqième jour de la semaine";
                break;
            case "Samedi":
                echo "Samedi, premier jour du weekend";
                break;
            case "Dimanche":
                echo "Dimanche, dernier jour du weekend";
                break;
            default:
                echo "Jour de la semaine inconnu";
                break;
        }
    ?>
</body>
</html>