<div class="titulo">Função e Escopo</div>


<?php

function imprimirMensagens($msg){
    return "$msg<br>";
}

echo imprimirMensagens("Olá mundo");
echo imprimirMensagens("Minha variável");
echo imprimirMensagens("Teste 3");
echo imprimirMensagens("Testando minha variável");

?>