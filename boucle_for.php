<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        //Afficher les valeurs de 1 à 10
        for($i=1; $i<=10; $i++){
            echo "$i<br/>";
        }

        //Afficher les valeurs de 10 à 1
        echo "<br/>";
        for($i=10; $i>=1; $i--){
            echo "$i<br/>";
        }

        //Combinaison de la boucle for et des instructions 
        //conditionnelles: afficher les nombres pairs de 0 à 10
        echo "<br/>";
        for($i=0; $i<=10; $i++){
            if($i % 2 == 0)
            {
                echo "$i<br/>";
            }
        }

        //Afficher les valeurs de 10 à -1.
        //Mais après la valeur zéro, on arrête la boucle
        echo "Instructions break<br/>";
        for($i=10; $i>=-1; $i--){
            if($i < 0){
                break;
            }
            echo "$i<br/>";
        }
        //Afficher les valeurs de 1 à 10
        //Si la valeur à afficher est égale à 3 ou à 6
        //Il ne faut pas l'afficher
        echo "<br/>";
        for($i=1; $i<=10; $i++){
            if($i == 3 || $i == 6)
            {
                continue;
            }
            echo "$i<br/>";
        }


    ?>
</body>
</html>