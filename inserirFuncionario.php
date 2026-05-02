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

$vmatricula = $_POST["lmatricula"];
$vnome = $_POST["lnome"];
$vdataNasc = $_POST["ldataNasc"];
$vendereco = $_POST["lendereco"];
$vsexo = $_POST["lsexo"];
$vsalario = $_POST["lsalario"];
$vsupervisor = $_POST["lsupervisor"];
$vdepto = $_POST["ldepto"];

$sqliIserir = "insert into funcionario (matricula, nome, dataNasc, endereco, sexo, salario, supervisor, depto) values ('$vmatricula', '$vnome', '$vdataNasc', '$endereco', '$vsexo', '$vsalario', '$vsupervisor', '$vdepto')";
$result = mysqli_query($con, $sqliIserir);

if($result == true){
    echo "O funcionario: " . $vnome . "foi cadastrado com sucesso.";
} else {
    echo "Falha no cadastro.";
}
?>

<p>
<a href="ListarAlterarExcluirFuncionarios.php"> Voltar para a lista de funcionarios</a>
</p>
