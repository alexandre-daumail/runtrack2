<!-- Créez une chaîne de caractères str qui contient “Les choses que l'on 
possede finissent par nous posseder.”. Créez un algorithme qui parcourt et 
écrit cette chaine à l’envers. -->


<?php

$str = "Les choses que l'on possede finissent par nous posseder.";

for($x = 0; isset($str[$x]); $x++); // $x est le compteur de charactères dans la phrase.

    for($i = $x -1; $i >= 0; $i--){  
        // Comme on sait le nombre de caractères dans la chaîne str, on peut initialiser une boucle qui commence par le dernier index de cetet chaîne. 
        // il ne nous reste plus que décrémenter $i pour aller dans le sens inverse
        echo $str[$i];
    }
?>