<?php
$pais="Portugal";
$paissubstr=substr($pais,3,2);
$paisstrelen=strlen($pais);
$paisMaiusc= strtoupper($pais);

echo "O quarto e quinto caracter " .$paissubstr; 
echo '<br>';
echo "A quantidade de caracteres " .$paisstrelen;
echo '<br>';
echo "Converter para maiúsculas " .$paisMaiusc;
?>