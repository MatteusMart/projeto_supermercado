<?php


try{
    define('SERVIDOR','localhost');
    define('USUARIO','root');
    define('SENHA','');
    define('BASEADOS','db_supermercado');

    $con = new PDO("mysql:host=".SERVIDOR.";dbname=".BASEADOS,USUARIO,SENHA);
    $con ->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

}catch(PDOException $erro){
    echo"Erro ao conectar ao banco de dados: ".$erro->getMessage();
}


