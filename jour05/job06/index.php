<!-- 
    Créez une fonction nommée “leetspeak”. Cette fonction prend en 
paramètre une chaîne de caractères nommée “str”. Elle doit retourner la 
chaine de caractères “str” convertie en leet speak. Cela signifie qu’elle doit 
la modifier de sorte à ce que : les “A” deviennent des “4”, les “B” des “8”, 
les “E” des “3”, les “G” des “6”, les “L” des “1”, les “S” des “5” et les “T” des 
“7”. Cela est valable que l’on crie ou non (majuscules et minuscules).
-->

<?php

function leetspeak($str){
    $leet = ['a' => '4', 'A' =>'4', 'b'=>'8', 'B'=>'8', 'E'=>'3', 'e'=>'3', 'G'=>'6', 'g'=>'6', 'L'=>'1', 'l'=>'1', 'S'=>'5', 's'=>'5', 'T'=>'7', 't'=>'7'];

        for($x=0; isset($str[$x])==true; $x++){ // on fait défiler chaque caractère de $str
            foreach($leet as $cle => $valeur){ // on considère chaque index du tableau $leet comme étant une $clé de type string à laquelle on attribue une $valeur
                if ($str[$x] == $cle){ // si le caractère de str est compris un des index de $leet, 
                    $str[$x] = $valeur; // on lui attribue alors la $valeur associée à la clé testée dans le foreach
                }
            }
        }
        return $str;    //la valeur de str est alors celle convertie par le for et le foreach précédent, qui est la fonction leetspeak.
}


echo leetspeak('eeeeeee'); // on écrit la valeur convertie de la fonction leetspeak
?>

