<?php
$host = "localhost";
$banco = "empresa";
$usuario = "root";
$senha = "";

try{
    $conexao = new PDO("mysql:host=$host; dbname=$banco; charset=utf8", $usuario, $senha);  

    $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXEPTION);

    echo "Conexão realizada com sucesso!";

} catch (PDOException $erro) {
    echo "Erro na conexão: " .
$erro->getMessage();

}
?>