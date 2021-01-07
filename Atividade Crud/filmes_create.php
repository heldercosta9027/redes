<?php

    if($_SERVER['REQUEST_METHOD']=="POST"){
        $titulo="";
        $sinopse="";
        $idioma="";
        $data_lançamento="";
        $quantidade=0;
        
        
        if(isset($_POST['titulo'])){
            $titulo=$_POST['titulo'];
        }
        else{
            echo'<script>alert("É obrigatório do titulo.");</script>';
        }
        if(isset($_POST['sinpse'])){
            $sinopse=$_POST['sinpse'];
        }
        if(isset($_POST['quantidade'])&& is_numeric($_POST['quantidade'])){
        $quantidade=$_POST['quantidade'];
        }
        if(isset($_POST['idioma'])){
            $idioma=$_POST['idioma'];
        }
    }