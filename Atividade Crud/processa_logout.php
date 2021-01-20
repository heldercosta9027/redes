<?php
if(!isset($_SESSION['login'])){
    $_SESSION['login']="incorreto";
    header("refresh:5;url=index.php");
}
if($_SESSION['login']=="correto" && isset($_SESSION['login'])){
    //aqui colocamos o conteúdo a página
}
else{
    echo 'Para entrar nest página nessecita de efetuar <ahref="login">login</a>';
    header('refresh:2;url=login.php');
}