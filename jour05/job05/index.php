<!-- 
Créez une fonction nommée “occurrences”. Cette fonction prend en 
paramètre une chaîne de caractères nommée “str” et un caractère nommé 
“char”. Elle doit retourner le nombre d'occurrences du caractère “char” dans 
“str”
-->

<?php


function occurences($str,$char){
    $i = 0;                                      //$i est notre compteur. Sa valeur sera affichée à la fin de la fonction à l'aide de return.
    for($y = 0; isset($str[$y]) == true; $y++){ // On parcourt la chaîne de caractères de $str
        if($str[$y] == $char){                    // Si le charactère de $str est égal à celui de $char, on incrémente le compteur $i.
            $i++;
        }
    } 
    return $i;
}

echo occurences('aaaaaaaaaaaaa','a');

?>