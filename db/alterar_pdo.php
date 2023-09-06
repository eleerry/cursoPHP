<div class="titulo">PDO: Alterar</div>

<?php

ini_set('display_errors', 1);

require_once "conexao_pdo.php";

$sql = "UPDATE cadastro SET nome = ?, nascimento = ?, email = ?, site = ?, filhos = ?, salario = ? WHERE id = ?";

$conexao = novaConexao();
$stmt = $conexao->prepare($sql);

$resultado = $stmt->execute([
    'Gui',
    '1980-12-12',
    'gui@gui.com.br',
    'https://gui.com',
    1,
    12000,
    12
]);

if($resultado){
    echo "Sucesso!";
} else {
    print_r($stmt->errorInfo());
}

?>
