<?php

include('conexao.php');

try{
    $id=$_GET['id'];

    echo $id;

    $sql = "DELETE FROM tb_produtos WHERE id=$id";

    $comando = $con->prepare($sql);

    $comando->execute();

    header('location: ../admin/gerenciar_produtos.php');


}catch(PDOException $erro){
    echo $erro->getMessage();
}