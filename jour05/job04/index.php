<!-- Créez une fonction nommée “calcule” qui prend 3 paramètres : le premier, 
“a”, est un nombre, le deuxième, “operation”, est un caractère contenant le 
type d’opération (+, -, *, /, %), le troisième, “b”, est un nombre. La fonction 
doit retourner le résultat de l’opération. -->

<?php

function calcule($a,$operation,$b){
    if($operation == '+'){
        $resultat = $a + $b;
    }
    if($operation == '-'){
        $resultat = $a - $b;
    }
    if($operation == '*'){
        $resultat = $a * $b;
    }
    if($operation == '/'){
        $resultat = $a / $b;
    }
    if($operation == '%'){
        $resultat = $a % $b;
    }
    return $resultat;
}

echo calcule(5, '+' , 2);

?>