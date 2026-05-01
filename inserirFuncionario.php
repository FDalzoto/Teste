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

$sqliIserir = "insert into funcionario (matricula, nome, dataNasc, endereco, sexo, salario, supervisor, depto) values ('$vmatricula', '$vnome', '$vdataNasc', '$endereco', '$vsexo', '$vsalario', '$vsupervisor', '$vdepto')";
$result = mysqli_query($conn, $sqliIserir);

if($result == true){
    echo "O funcionario: " . $vnome . "foi cadastrado com sucesso.";
} else {
    echo "Falha no cadastro.";
}
?>

<p>
<a href="ListarAlterarExcluirFuncionarios.php"> Voltar para a lista de funcionarios</a>
</p>
