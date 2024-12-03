<?php
    //Création de tableaux indexes
    $nombres = array(100, 0, -1, 3, 10);
    $jours = array("Lundi", "Mardi", "Mercredi");

    //Création d'un tableau avec les []
    $pays = ["Sénégal", "Mali", "Niger", "Ghana", "Guinnée"];

    //Quelques manipulation sur les tableaux
    //Connaître la taille d'un tableau: count()
    $tailleTabPays = count($pays);


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
        echo 'Le tableau $pays à '. $tailleTabPays.' éléments<br/>';

        echo "<br/>";
        //Afficher tous les éléments du tableau $pays
        for($i=0; $i<$tailleTabPays; $i++){
            echo "$pays[$i]<br/>";
        }

        //Accéder à un élément individuel du tableau
        echo '$pays[0]: '.$pays[0].'<br/>' ;     //Accès au premier élément
        echo '$pays[1]: '.$pays[1].'<br/>' ;      //Accès au deuxième élément
        echo '$pays[2]: '.$pays[2].'<br/>' ;      //Accès au troisième élément
        echo '$pays[3]: '.$pays[3].'<br/>' ;      //Accès au quatrième élément
        echo '$pays[4]: '.$pays[4].'<br/>' ;     // //Accès au cinquième élément

        //Modifier une valeur du tableau
        $pays[2] = "Gabon";
        echo "<br/>";
        echo '$pays[0]: '.$pays[0].'<br/>' ;     //Accès au premier élément
        echo '$pays[1]: '.$pays[1].'<br/>' ;      //Accès au deuxième élément
        echo '$pays[2]: '.$pays[2].'<br/>' ;      //Accès au troisième élément
        echo '$pays[3]: '.$pays[3].'<br/>' ;      //Accès au quatrième élément
        echo '$pays[4]: '.$pays[4].'<br/>' ;     // //Accès au cinquième élément

        //Trier un tableau en ordre croissant: sort()
        sort($pays);
        echo "<br/>";
        echo '$pays[0]: '.$pays[0].'<br/>' ;     //Accès au premier élément
        echo '$pays[1]: '.$pays[1].'<br/>' ;      //Accès au deuxième élément
        echo '$pays[2]: '.$pays[2].'<br/>' ;      //Accès au troisième élément
        echo '$pays[3]: '.$pays[3].'<br/>' ;      //Accès au quatrième élément
        echo '$pays[4]: '.$pays[4].'<br/>' ;     // //Accès au cinquième élément

        //Afficher les éléments du tableau avec la boucle foreach
        echo "<br/>";
        foreach($pays as $valeur){
            echo "$valeur<br/>";
        }




    ?>
</body>
</html>