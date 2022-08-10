<?php

include('backend/conexao.php');

try{

    $sql = "SELECT * FROM tb_viagens";

    $comando = $con->prepare($sql);

    $comando->execute();


    $dados = $comando->fetchAll(PDO::FETCH_ASSOC);


}catch(PDOException $erro){
    echo $erro->getMessage();
    }

?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Lista de Produtos</title>
</head>
<body>
    <div id="container">
    <h3>Listar produtos</h3>
        <figure>
            <img src="img/viagem-faltando.png" alt="">
            <figcaption>
                <h3>nome</h3>
                <h3>categoria</h3>
                <h3>fabricante</h3>
                <h3>R$</h3>
                <small></small>
            </figcaption>
        </figure>
    </div>
    
</body>
</html>