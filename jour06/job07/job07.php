<!-- Créez une fonction nommée “bubblesort”. Cette fonction prend en 
paramètres un tableau nommé “tab” contenant plusieurs chaînes de 
caractères et un booléen nommé “croissant”. Si “croissant” vaut true, la 
fonction doit retourner le tableau trié par ordre croissant, sinon la fonction 
doit retourner le tableau trié par ordre décroissant.
Exemple : Si tab contient [“abc”, “ghi”, “def”] le resultat sera “abc”, “def”, 
“ghi” par ordre croissant et “ghi”, “def”, “abc” par ordre décroissant. -->

<?php

function bubblesort($tab, $croissant){
    if($croissant == true){
        foreach ($tab as $key)
        return($key);
    }
}