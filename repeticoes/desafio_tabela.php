<div class="titulo">Desafio tabela 2</div>

<form action="#" method="post">
    <label for="linhas">Numero de linhas:
        <input type="text" name="linhas" id="linhas">
    </label>
    <label for="colunas">Numero de colunas:
        <input type="text" name="colunas" id="colunas">
    </label>
    <button type="submit">Gerar</button>
</form>

<?php

    $linhas = intval($_POST['linhas']);
    $colunas = intval($_POST['colunas']);
?>

<table>

    <?php
        if($linhas > 0 && $colunas > 0){
            $num = 1;
            for($i = 1; $i <= $linhas; $i++){
                echo "<tr>";
                for($j = 1; $j <= $colunas; $j++){
                    echo "<td>$num</td>";
                    $num++;
                }
                echo "</tr>";
            }
        }
    ?>

</table>

<style>

    form{
        width: 100%;
        display: flex;
        flex-direction: column;
        align-items: center;
    }

    label {
        display: flex;
        justify-content: space-between;
        align-items: center;
        width: 100%;
        height: 50px;
        margin: 10px;
    }

    input[type="text"]{
        width: 50%;
        height: 100%;
        padding: 1rem;
    }

    button[type="submit"]{
        cursor: pointer;
        width: 100%;
        height: 50px;
    }

    table {
        border: 1px solid #444;
        border-collapse: collapse;
        margin: 20px 0px;
    }

    table td {
        border: 1px solid #444;
        padding: 10px 20px;
    }

</style>