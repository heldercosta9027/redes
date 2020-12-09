<?php
        $numero = array();
            for($i=0; $i<15; $i++){
                $numero[$i]=rand(1,1000);
            }
         
        $posicao=rand(0,14);
        
        echo "<h3>Ex3</h3>";

        foreach($numero as $n){
            echo $n. " ";
        }
        echo "<br><br>";
        
        echo $posicao."<br><br>";
        
        echo $numero[$posicao]. "<br><br>";
                       
        if($numero[$posicao]%2 !=0){
            echo "Impar";
        }
        else{
            echo "Par";
        }
?>