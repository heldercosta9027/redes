<?php
    $nota1= rand(1,20);
    $nota2= rand(1,20);
    $nota3= rand(1,20);
$media = ($nota1+$nota2+$nota3)/3;
    if($media>=9,5){
        echo 'Aluno está aprovado';
    }
    elseif($media>8 &&  $media<9,5){
        echo 'O aluno irá a recuperação'
    }
    elseif($media<=8){
        echo 'O aluno está reprovado'
    }
?>