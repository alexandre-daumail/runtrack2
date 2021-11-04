<!-- 
Job 01
Créez un tableau contenant les nombres 200, 204, 173, 98, 171, 404, 459. 
Parcourez ce tableau et affichez “X est paire<br />” ou “X est impaire<br/>”, 
X prenant tour à tour chacune des valeurs comprises dans ce tableau. -->

<?php

    $tableau = [200, 204, 173, 98, 171, 404, 459]; // création du tableau

    foreach($tableau as $valeurDuTableau){ // pour chaque valeur du tableau
        if ($valeurDuTableau % 2 == 0){ // si la valeur du tableau modulo 2 est égale à zéro (les nombres pairs sont divisibles par 2 donc il n'y a pas de reste)
            echo $valeurDuTableau . " est paire <br/>"; // on écrit alors que la valeur est paire
        }
        else{
            echo $valeurDuTableau . " est impaire <br/>"; // sinon, on écrit qu'elle est impaire
        }
    }

    // à l'aide du foreach, j'ai pu afficher la parité des valeurs du tableau sans avoir à connaître le nombre de valeurs du tableau.