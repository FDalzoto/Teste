<?php

$host = "localhost";
$banco = "empresa";
$usuario = "root";
$senha = "";

try {
    $con = new PDO("mysql:host=$host;dbname=$banco;charset=utf8", $usuario, $senha);
    $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    echo "Conexão realizada com sucesso!";
    
    $vmatricula = $_POST["lmatricula"];
    $vnome = $_POST["lnome"];
    $vdataNasc = $_POST["ldataNasc"];
    $vendereco = $_POST["lendereco"];
    $vsexo = $_POST["lsexo"];
    $vsalario = $_POST["lsalario"];
    $vsupervisor = $_POST["lsupervisor"];
    $vdepto = $_POST["ldepto"];

    $sql = "INSERT INTO funcionario 
    (matricula, nome, dataNasc, endereco, sexo, salario, supervisor, depto) 
    VALUES (:matricula, :nome, :dataNasc, :endereco, :sexo, :salario, :supervisor, :depto)";

    $stmt = $con->prepare($sql);

    $stmt->execute([
        ":matricula" => $vmatricula,
        ":nome" => $vnome,
        ":dataNasc" => $vdataNasc,
        ":endereco" => $vendereco,
        ":sexo" => $vsexo,
        ":salario" => $vsalario,
        ":supervisor" => $vsupervisor,
        ":depto" => $vdepto
    ]);

    echo "O funcionário: " . $vnome . " foi cadastrado com sucesso.";

} catch (PDOException $erro) {
    echo "Erro: " . $erro->getMessage();
}
?>

<p>
<a href="ListarAlterarExcluirFuncionarios.php">Voltar para a lista de funcionários</a>
</p>
