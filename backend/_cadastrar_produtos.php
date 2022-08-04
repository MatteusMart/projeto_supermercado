<?php

include 'conexao.php';


try{
    $nome = $_POST['nome'];
    $categoria = $_POST['categoria'];
    $fabricante = $_POST['fabricante'];
    $valor = $_POST['valor'];

    $sql = "INSERT INTO
                tb_produtos
            (
             `nome`,
             `categoria`,
             `fabricante`,
             `valor`
             )
             VALUES
             (
              '$nome',
              '$categoria',
              '$fabricante',
              '$valor'
              )
              ";
        $comando = $con->prepare($sql);

        $comando ->execute();

        echo "Cadastro realizado com sucesso";
    

}catch(PDOException $erro){
    echo $erro->getMessage();
}


?>