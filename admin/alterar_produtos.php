<?php
    include('../backend/conexao.php');

?>

<!DOCTYPE html>
<html lang="pt_bt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>alterar Produto</title>
</head>
<body>
<div id="container">
        <div id="base-container">
            <h2>Super Mercado</h2>
            <form action="../backend/_cadastrar_produtos.php" method="post">
                <div id="pai">
                    <div>
                        <label for="nome">Nome</label>
                        <input class="text" type="text" id="nome" name="nome" required>
                    </div>
                    <div>
                        <label for="categoria">Categoria</label>
                        <input class="text" type="text" id="categoria" name="categoria" required>
                    </div>
                    <div>
                        <label for="">Fabricante</label>
                        <input class="text" type="text" id="fabricante" name="fabricante" required>
                    </div>
                    <div>
                        <label for="">Imagem</label>
                        <input type="file" name="imagem" id="imagem">
                    </div>
                    <div>
                        <label for="valor">Valor</label>
                        <input class="text" type="number" id="valor" name="valor" required>
                    </div>
                </div>
                <div id="botao">
                    <input type="submit" value="Cadastrar">
                </div>

                
            </form>
        </div>
    </div>
</body>
</html>