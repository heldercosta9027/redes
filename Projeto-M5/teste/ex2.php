<html>
    <head>
        <title>Projeto do Módulo 5</title>
        <meta charset="utf-8">
    </head>
    <body>
        <?php
        echo "<h3>Ex2</h3>";
        
        $numero = rand(1,7);
        switch ($numero){
        case (1):
            echo "Domingo";
        break;
                
        case(2):
            echo "Segunda-Feira";
        break;
                
        case(3):
                echo "Terça-Feira";
        break;
        
        case(4):
                echo "Quarta-Feira";
        break;
                
        case(5):
                echo "Quinta-Feira";
        break;
                
        case(6):
                echo "Sexta-Feira";
        break;
                
        case(7):
                echo "Sábado";
        break;
        }
        ?>
    </body>

</html>