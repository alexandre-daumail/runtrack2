<!DOCTYPE html>


<html>
    <head>
        <meta charset="utf-8">
        <title>Job 05</title>
        
<!-- Créez une string nommée str et affectez y “On n est pas le meilleur quand 
on le croit mais quand on le sait”. Créez un dictionnaire nommé dic qui a 
comme keys “consonnes” et “voyelles”. Créez un algorithme qui parcourt, 
compte et stocke le nombre d'occurrences de consonnes et de voyelles de 
str. Affichez ces résultats dans un tableau html qui a comme thead
“Voyelles” et “Consonnes”. -->

<?php
$x = 0; // compteur nb consonnes
$y = 0; // compteur nb voyelles
$str = "On n est pas le meilleur quand on le croit mais quand on le sait";

$dic = [
    'consonnes' => ['b','c','d','f','g','h','j','k','l','m','n','p','q','r','s','t','v','w','x','y','z','B','C','D','F','G','H','J','K','L','M','N','P','Q','R','S','T','V','W','X','Y','Z'],
    'voyelles' => ['a','e','i','o','u','y','A','E,','I','O','U','Y'] 
];


for($i = 0; isset($str[$i]); $i++){
    foreach($dic['consonnes'] as $char1){
        if($str[$i] == $char1)
        $x++;
    }
    foreach($dic['voyelles'] as $char2){
        if($str[$i] == $char2)
        $y++;
    }
}
?>
    </head>

    <body>
        <table border = 1>
            <thead>
                <tr>
                    <th>Voyelles</th>
                    <th>Consonnes</th>
                </tr>
            </thead>

            <tbody>
                <tr>
                    <td><?php echo $x ?></td>
                    <td><?php echo $y ?></td>
                </tr>
            </tbody>
        </table>
    </body>
</html>