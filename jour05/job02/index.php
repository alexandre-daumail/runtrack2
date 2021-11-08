<!-- Créez une fonction nommée “bonjour”. Cette fonction prend en paramètre
un booléen nommé “jour”. Si le paramètre “jour” vaut true, la fonction doit
afficher “Bonjour”, si “jour” vaut false, la fonction doit afficher “Bonsoir”. -->

<!doctype html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <title>Job02 Jour04</title>
    <?php

    function bonjour ($jour){
        if($jour == true){
            echo'Bonjour';
        }
        else{
            echo'Bonsoir';
        }
    }
    ?>
</head>



<body>
<?php
bonjour(true);
echo '<br>';
bonjour(false);
?>
</body>

</html>