<?php
    $carros = array(
        'Punto'=> array(
        'cor'=> 'azul',
            'potencia'=> '1.0',
            'opcionais'=> 'Ar.Cond.'
        ),
        'Corsa'=> array(
        'cor'=> 'cinza',
            'potencia'=> '1.3',
            'opcionais'=> 'MP3'
        ),
        'Golf'=> array(
        'cor'=> 'Branco',
            'potencia'=> '1.0',
            'opcionais'=> 'Metalica'
        )  
    );
    echo $carros['Punto']['opcionais'];

    foreach ($carros as $modelo=>$carro){
        echo '<h1>'. $modelo. '</h1>'
        foreach($carro as $chave=>$detalhe){
            echo '<b>'. $chave. '</b>'. $detalhe. '<br>';
        }
    }
?>