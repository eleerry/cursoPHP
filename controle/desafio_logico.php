<div class="titulo">Desafio Operadores Lógicos</div>

<!-- 

    Dois Trabalhos -> terça e quinta!
    - se os dois forem executados -> TV 50' e sorvete
    - se apenas um for executado -> TV 32' e sorvete
    - se nenhum for executado -> ficar em casa mais saudável


-->

<form action="#" method="post">
    <div>
        <label for="t1">Trabalho 1 (terça): </label>
        <select name="t1" id="t1">
            <option value="1">Executado</option>
            <option value="0">Não Executado</option>
        </select>
    </div>
    <div>
        <label for="t2">Trabalho 2 (Quinta): </label>
        <select name="t2" id="t2">
            <option value="1">Executado</option>
            <option value="0">Não Executado</option>
        </select>
    </div>
    <button>Executar</button>
</form>

<style>
    button, select{
        font-size: 1.8rem;
    }
</style>

<?php

    $trabalhoUm = !!((int) $_POST['t1']);
    $trabalhoDois = !!((int) $_POST['t2']);
    $osDois = ($trabalhoUm && $trabalhoDois);
    $apenasUm = ($trabalhoUm || $trabalhoDois);

    if($osDois){
        echo "EBA!!!: ;) TV 50' e sorvete!";
    }elseif($apenasUm){
        echo "EBA!!!: :) TV 32' e sorvete!";
    }else{
        echo "POXA!!!: :( ficar em casa mais saudável!";
    }

?>