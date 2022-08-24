<?php

include('backend/conexao.php');

try{

    $sql = "SELECT * FROM tb_produtos";

    $comando = $con->prepare($sql);

    $comando->execute();


    $dados = $comando->fetchAll(PDO::FETCH_ASSOC);

    // echo "<pre>";
    // var_dump($dados);
    // echo "</pre>";


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
    <h3 class="titulo-listar">Listar produtos</h3>
        <div id="grid-produtos">
            <?php
            foreach($dados as $pro):
            ?>
            <figure class="figure-listar">
                <img src="img/viagem-faltando.png" alt="" class="img-listar">
                <figcaption class="figcaption-listar">
                    <h3><?php echo $pro['produto']?></h3>
                    <h3><?php echo $pro['categoria']?></h3>
                    <h3><?php echo $pro['fabricante']?></h3>
                    <h3>R$ <?php echo $pro['preco']?></h3>
                    <small></small>
                    <button class="btn-listar">Comprar</button>
                </figcaption>
            </figure>
            <?php endforeach?>
        </div>
    </div>
    
</body>
</html>