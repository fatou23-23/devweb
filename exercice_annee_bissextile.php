<?php
    /**
     * Vérifie si une année est bissextile
     * @param $annee l'année à vérifier
     * @return Résultat retourné
     */
    function isBissextile($annee){
        return ($annee % 400 === 0 || 
            ($annee % 4 === 0 && $annee % 100 !== 0));
    }

    function showAllAnneeBissextile($annees){
        foreach($annees as $valeur){
            if(isBissextile($valeur)){
                echo "$valeur est une année bissexitile<br/>";
            }
            else{
                echo "$valeur n'est pas une année bissexitile<br/>";
            }
        }
    }
    /**
     * Filtre les années bissextiles dans un tableau d'années
     * @param $annnees Le tableau d'années passé en paramètre
     * @return Le tableau des années bissextiles trouvées
     */
    function getAllAnneeBissextile($annees){
        $tabAnnees = [];
        foreach($annees as $valeur){
            if(isBissextile($valeur)){
                $tabAnnees[] = $valeur;
            }
        }
        return $tabAnnees;
    }

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
        $annees = [1960, 2005, 2002, 1210, 1921, 2000, 2024, 3024];
        $anneesBissextiles = getAllAnneeBissextile($annees);
        foreach($anneesBissextiles as $annee){
            echo "$annee, "; 
        }
    ?>
</body>
</html>