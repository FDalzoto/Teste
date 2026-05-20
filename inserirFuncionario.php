<?php

require 'conexao.php';
   
$vmatricula = $_POST["lmatricula"];
$vnome = $_POST["lnome"];
$vdataNasc = $_POST["ldataNasc"];
$vendereco = $_POST["lendereco"];
$vsexo = $_POST["lsexo"];
$vsalario = $_POST["lsalario"];
$vsupervisor = $_POST["lsupervisor"];
$vdepto = $_POST["ldepto"];

$sqlInsere = "INSERT INTO funcionario (matricula, nome, dataNasc, endereco, sexo, salario, supervisor, depto) VALUES ($vmatricula, $vnome, $vdataNasc, $vendereco, $vsexo, $vsalario, $vsupervisor, $vdepto)";
$result = mysqli_query($con, $sqlInsere);

if($result == true){
    echo "O(a) Funcionario(a): " . $vnome . " foi cadastrado(a).";
} else{
    echo "Falha no Cadastro!";
}

?>

<p>
<a href="index.html">Voltar para a lista de funcionários</a>
</p>
