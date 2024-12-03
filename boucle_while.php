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
        $i = 1;
        while($i <= 10){
            echo "$i<br/>";
            $i++;
        }

        //Boucle do...while
        echo "<br/>";
        $i = 11;
        do{
            echo "$i<br/>";
            $i++;
        }while($i <= 10);
            
    ?>
</body>
</html>