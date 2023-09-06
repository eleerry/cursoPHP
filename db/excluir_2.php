<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>

<div class="titulo">Excluir Registros #2</div>

<?php

require_once "conexao.php";

$conexao = novaConexao();

if($_GET['excluir']){
    $excluirSQL = "DELETE FROM cadastro WHERE id = ?";
    $stmt = $conexao->prepare($excluirSQL);
    $stmt->bind_param("i", $_GET['excluir']);
    $stmt->execute();
}

$sql = "SELECT * FROM cadastro";

$resultado = $conexao->query($sql);
$registros = [];

if($resultado){
    if($resultado->num_rows > 0){
        while($row = $resultado->fetch_assoc()){
            $registros[] = $row;
        }
    }
}else {
    echo "ERRO: " . $conexao->error;
}

$conexao->close();

?>

<table class="table">
    <thead>
        <th>Código</th>
        <th>Nome</th>
        <th>Nascimento</th>
        <th>E-mail</th>
        <th>Site</th>
        <th>Filhos</th>
        <th>Salário</th>
        <th>Ações</th>
    </thead>
    <tbody>
        <?php foreach($registros as $registro): ?>
            <tr>
                <td><?= $registro['id'] ?></td>
                <td><?= $registro['nome'] ?></td>
                <td>
                    <?= 
                    date('d/m/Y', strtotime($registro['nascimento'])) ?>
                </td>
                <td><?= $registro['email'] ?></td>
                <td><?= $registro['site'] ?></td>
                <td><?= $registro['filhos'] ?></td>
                <td><?= $registro['salario'] ?></td>
                <td><a 
                    href="/exercicio.php?dir=db&file=excluir_2&excluir=<?= $registro['id'] ?>"
                    class="btn btn-danger">
                        Excluir
                    </a>
                </td>
            </tr>
        <?php endforeach ?>
    </tbody>
</table>

<style>
    table > * {
        font-size: 1.2rem;
    }
</style>
