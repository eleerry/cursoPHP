<div class="titulo">Laço For</div>

<?php

$arr = [
    "Domingo",
    "Segunda",
    "Terça",
    "Quarta",
    "Quinta",
    "Sexta",
    "Sábado"
];

for($i = 0; $i < count($arr); $i++){
    echo "{$arr[$i]} <br>";
}
?>