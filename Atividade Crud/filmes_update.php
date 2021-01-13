<?php
    if($_SERVER['REQUEST_METHOD']=='POST'){
        $titulo="";
        $sinopse="";
        $quantidade=0;
        $data_lançamento="";
        $idioma="";
        
        if(isset($_POST['titulo'])){
            $titulo=$_POST['titulo'];
        }
        else{
            echo '<script>alert("É obrigatório o preenchimento do título");</script>';
        }
        if(isset($_POST['sinopse'])){
            $sinopse=$_POST['sinpose'];
        }
        if(isset($_POST['quantidade'])&& is_numeric($_POST['quantidade'])){
        $quantidade=$_POST['quantidade'];
        }
        if(isset($_POST['idioma'])){
            $idioma=$_POST['idioma'];
        }
        if (isset($_POST['idioma'])){
            $idioma=$_POST['idioma'];
        }
        if(isset($_POST['data_lancamento'])){
            $data_lançamento=$_POST['data_lancamento'];
        }
        
        $con=new mysqli("localhost", "root", "", "filmes");
        
        
        if($con->connect_errno!=0){
            echo "Ocorreu um erro no acesso à base de dados. <br>" . $con->connect_error;
            exit;
        }
        else{
            $sql="insert into filmes (titulo, sinopse, idioma, data_lancamento, quantidade) value(?,?,?,?,?);";
            $stm=$con->prepare($sql);
        }
        
        if($stm!=false){
            $stm->bind_param("ssssi", $titulo, $sinpse, $idioma, $data_lancamento, $quantidade);
            $stm->execute();
            $stm-execute();
        
        $stm->close();
        
        echo '<script>alert("Filme alterado com sucesso!!");</script>';
        echo "Aguarde um momento. A reencaminhar página";
        header ("refresh:5; url= index.php");
        }
        else{
            
        }
        else{
            echo "<h1> Houve um erro ao processar o seu pedido! <br> Irá ser reencaminhado! </h1>";
            header ("refresh:5; url=index.php");
        }
    }
