<?php

    for ($i = 2; $i <= 1000; $i++){ 
        $x = 0;                         

        for($j = 1; $j <= $i; $j++){

            if($i % $j == 0){
                $x++;
            }
        }
        if($x == 2){
                echo $i . "<br/>";
        }
    }
?>