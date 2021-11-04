<?php
// Créez une string nommée str et affectez y “Dans l'espace, personne ne 
// vous entend crier”. Créez un algorithme qui parcourt, compte et affiche le 
// nombre de caractères présents dans cette chaîne

 $str = "Dans l'espace, personne ne vous entend crier";

 for($i=0; isset($str[$i]); $i++); // en n'ouvrant pas d'accolades, la boucle "for" tourne mais n'effectue pas d'autre fonction que ce qui est demandé dans les parenthères.
    echo "Il y a un total de " . $i . "caractères présents dans cette chaine."; // on affiche simplement la dernière valeur de i quand la boucle for se finit.
?>