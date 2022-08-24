<?php


try{
    define('SERVIDOR','10.97.46.100');
    define('USUARIO','mateus');
    define('SENHA','123');
    define('BASEADOS','db_supermercado_mateus');

    $con = new PDO("mysql:host=".SERVIDOR.";dbname=".BASEADOS,USUARIO,SENHA);
    $con ->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

}catch(PDOException $erro){
    echo"Erro ao conectar ao banco de dados: ".$erro->getMessage();
}


