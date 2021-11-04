<!-- Créez une string nommée str et affectez y le texte “Tous ces instants seront 
perdus dans le temps comme les larmes sous la pluie.” Parcourir cette 
chaîne en affichant seulement un caractère sur deux. -->

<?php

    $str = "Tous ces instants seront perdus dans le temps comme les larmes sous la pluie."; // création de la string demandée

    for($x = 0; isset($str[$x]) == true; $x++){ // création de la boucle qui va permettre de parcourir la chaine de caractères de la string
        if ($x % 2 == 0){ // si l'index $x du tableau $str est pair
            echo $str[$x]; // alors on affiche le caractère stocké à cet index
        }
    }

    