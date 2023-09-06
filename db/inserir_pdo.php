<div class="titulo">PDO: Inserir Dados</div>

<?php
#ini_set('display_errors', 1);

require_once "conexao_pdo.php";

$sql = "INSERT INTO cadastro
(nome, nascimento, email, site, filhos, salario)
VALUES(
    'Guilherme Filho',
    '1998-7-21',
    'guidagalera@gmail.com',
    'https://guidagalera.com.br',
    0,
    3000.48
)";

$conexao = novaConexao();
if($conexao->exec($sql)){
    $id = $conexao->lastInsertId();
    echo "Novo Cadastro com id $id." . "<br>";
} else {
    echo $conexao->errorCode();
    print_r($conexao->errorInfo());
}

?>