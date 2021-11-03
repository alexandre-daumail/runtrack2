<?php

$i = 0;

while ($i <= 100){
    if ($i == 42) {
        echo "La Plateforme_" . "<br/>";
    }
    if ($i <= 20){
        echo "<i>" . $i . "</i>" . "<br/>";
    }
    if ($i > 20 && $i <25){
        echo  $i . "<br/>";    
    }
    if ($i >= 25 && $i != 42 && $i <= 50){
        echo  "<u>" . $i . "</u>". "<br/>";    
    }
    if ($i > 50) {
        echo "$i" . "<br/>";
    }
    $i++;
}
?>