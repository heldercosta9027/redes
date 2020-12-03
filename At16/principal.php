<?php
$nome1 = $_POST['text_nome'];
$idade1= $_POST['text_idade'];

setcookie('nome', $nome1, (time()+ (20)));
setcookie('idade', $idade1, (time()+ (20)));

echo "Nome: ".$nome1."<br>";
echo "Idade: ".$idade1."<br>";

echo "<a href='formulario.html'><h5><b>Voltar</b></h5></a>";
echo "<a href='visitante1.php'><h5><b>Visitante 1</b></h5></a>";
echo "<a href='visitante2.php'><h5><b>Visitante 2</b></h5></a>";      