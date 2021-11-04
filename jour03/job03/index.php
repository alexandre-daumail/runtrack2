<!-- Créez une string nommée str et affectez y “I'm sorry Dave I'm afraid I can't 
do that”. Créez un algorithme qui parcourt cette chaîne et affiche 
uniquement les voyelles -->

<?php
    $str = "I'm sorry Dave I'm afraid I can't do that."; // création chaîne de caractère

    for($n = 0; isset($str[$n]); $n++){ // boucle qui parcourt la string
        if($str[$n] == "a" || $str[$n] == "e" || $str[$n] == "I"|| $str[$n] == "o"|| $str[$n] == "u"|| $str[$n] == "y"){ // condition qui dit que si la lettre $n de la string $str est égale à
            echo $str[$n] . "<br>"; // alors le processus écrit la lettre $n
        }
    }
?>