<?php
    $numero = rand(1,10);
    
    for ($i=1 ;$i<=10 ;$i++){
        $res = $i * $numero;
        echo $numero.'x' . $i .'='. $res . '<br>';
    }
?>
