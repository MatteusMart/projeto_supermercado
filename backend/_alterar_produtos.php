<?php
    include('conexao.php');

    try{
        $id         = $_POST['id'];
        $produtos   = $_POST['produtos'];
        $categoria  = $_POST['categoria'];
        $fabricante = $_POST['fabricante'];
        $preco      = $_POST['preco'];

        $nome_original_imagem = $_FILES['imagem']['nome'];

        if ($nome_original_imagem!=null){
            $extensao = pathinfo($nome_original_imagem,PATHINFO_EXTENSION);
    
        if($extensao != 'jpg' &&$extensao != 'jpeg' &&
        $extensao != 'png'){
            echo 'Formato de imagem inválido';
            exit;
        }

        $hash = md5(uniqid($_FILES['aimg']['tmp_name'],true));

        $nome_final_imagem = $hash.'.'.$extensao;

        $pasta = '../img/upload/';

        $nimagem = 'foto.jpg';
        
        move_uploaded_file($_FILES['aimg']['tmp_name'],$pasta.$nome_final_imagem);
 
        $sql = "UPDATE tb_produtos
        SET 
            `produto` = '$produto', `categoria` = '$categoria', `fabricante` = '$fabricante' , `preco` = '$preco' , `imagem` = $nome_final_imagem
             WHERE id=$id";
        }else{
            $sql = "UPDATE tb_produtos
        SET 
            `produto` = '$produto', `categoria` = '$categoria', `fabricante` = '$fabricante' , `preco` = '$preco'
             WHERE id=$id";
        }

        $comando = $con->prepare($sql);

        $comando->execute();

        header('location: ../admin/gerenciar_produtos.php');

    }catch(PDOException $erro){
        echo $erro->getMessage();
    }

?>