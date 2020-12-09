<?php
        $numero = array();
            for($i=0; $i<20; $i++){
                $numero[$i]=rand(1,10000);
            }
         
        
        $produto=0;
        $media=0;
        
        echo "<h3>Ex4</h3>";

        foreach($numero as $n){
            echo $n. " ";
        }
        echo "<br><br>";
        
                     
        for ($i=0 ;$i<20 ;$i++){
        $produto = $numero[$i]* $produto;
        echo "O produto é: ". $produto;
    }
               
           
?>