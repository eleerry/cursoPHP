<div class="titulo">Desafio Sorteio</div>

<?php

$nome = [
    "Elza",
    "Rapunzel",
    "Branca de Neve",
    "Cinderela",
    "Chapeuzinho",
    "Mulan",
    "Poca",
    "Barbie",
    "Bela"
];

echo "<div center><h1>{$nome[array_rand($nome)]}</h1></div>";

?>


<style>
    [center]{
        display: flex;
        justify-content: center;
    }
</style>