<?php
    //instructions
    $age = 17;
    if($age >= 18){
        echo "Vous-êtes majeur(e)";
    }
    else{
        echo "Vous-êtes mineur(e)";
    }

    //Comparaison de trois nombres pour 
    //déterminer le plus grand
    $nombre1 = 5;
    $nombre2 = 7;
    $nombre3 = 10;

    echo "<br/>";

    if($nombre1 > $nombre2 && $nombre1 > $nombre3){
        echo "$nombre1 est le plus grand";
    }
    else if($nombre2 > $nombre1 && $nombre2 > $nombre3){
        echo "$nombre2 est le plus grand";
    }
    else{
        echo "$nombre3 est le plus grand";
    }

?>