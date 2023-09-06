<div class="titulo">Inserir Regristro #01</div>

<?php

require_once "conexao.php";

$sql = "INSERT INTO cadastro
(nome, nascimento, email, site, filhos, salario)
    VALUES(
        'Maria Silva',
        '2001-11-11',
        'maria_silva@email.com.br',
        'https://maria.com.br',
        0,
        7800.12
    );
";

$conexao = novaConexao();
$resultado = $conexao->query($sql);

if($resultado){
    echo "Sucesso!!!";
}else{
    echo "Erro: " . $conexao->error;
}

$conexao->close();

?>