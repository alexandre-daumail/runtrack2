<!-- Créer une chaîne str qui contient “Certaines choses changent, et d'autres 
ne changeront jamais.”. Créer un algorithme qui parcourt cette string en 
remplaçant le premier caractère par le deuxième, le deuxième par le 
troisième etc.. et le dernier par le premier. -->

<?php

$str = "Certaines choses changent, et d'autres ne changeront jamais.";
$y=1;
for($x = 0; isset($str[$x]); $x++){
    while(isset($str[$x])){
        
        echo $str[$y];
        $y++;
    }
}

?>