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

        for($x=0; isset($str[$x])==true; $x++){
            foreach($leet as $cle => $valeur){
                if ($str[$x] == $cle){
                    $str[$x] = $valeur;
                }
            }
        }
        return $str;    
}


echo leetspeak('ghdht');
?>

