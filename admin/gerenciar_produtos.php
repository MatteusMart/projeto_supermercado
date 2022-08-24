<?php

    include('../backend/conexao.php');

    try{
        $sql = "SELECT * FROM tb_produtos";

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
    <title>Gerenciar produtos</title>
</head>
<body>
    <div id="container-gerenciar">
        <h2>Gerenciar Produtos</h2>
        <div id="tabel">     
            <table border = '1'>
                <tr>
                    <th>Id</th>
                    <th>Nome</th>
                    <th>Categoria</th>
                    <th>Fabricante</th>
                    <th>Valor</th>
                    <th>Editar</th>
                    <th>Excluir</th>
                </tr>
                <?php
                    foreach($dados as $produ):
                ?>
                <tr>
                    <td><?php echo $produ['id'];?></td>
                    <td><?php echo $produ['produto'];?></td>
                    <td><?php echo $produ['categoria'];?></td>
                    <td><?php echo $produ['fabricante'];?></td>
                    <td>R$<?php echo $produ['preco'];?></td>
                    <td>Editar</td>
                    <td>
                        <a href="../backend/_deletar_produtos.php?id=<?php echo $produ['id'];?>"> Excluir</a>
                    </td>
                </tr>
                <?php
            endforeach;
            ?>
            </table>
            
        </div>
    </div>
</body>
</html>