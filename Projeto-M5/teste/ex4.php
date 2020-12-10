<?php
    $produto=1;
    $soma=0;
    for($i=0;$i<20;$i++){
        $numero=rand(1,10000);
        $vetor[$i]=$numero;
    }
    echo "<h3>Ex4</h3>";


    $maior=$vetor[0];
    $menor=$vetor[0];
    

    for($i=0;$i<20;$i++){
        $produto = $produto * $vetor[$i];
        $soma=$soma+$vetor[$i];
    }

    $media=$soma/20;
    
    foreach ($vetor as $n){
        if($n>$maior){
            $maior=$n;
        }     
    }

    foreach($vetor as $n){
        if($n<$menor){
            $menor=$n;
        }     
    }
    
    
    echo "<h4>O maior número é: ".$maior. "<br><br></h4>"; 
    echo "<h4>O menor número é: ".$menor. "<br><br></h4>"; 
    echo "<h4>O produto deles é: ".$produto. "<br><br></h4>";
    echo "<h4>A média deles é: ".$media. "<br></h4>";
?> 