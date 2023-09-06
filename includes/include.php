<div class="titulo">Includes</div>


<?php
/*
echo "Executei essa linha do arquivo include<br>";
include('include_arquivo.php');

echo soma(3, 8) . '<br>';

echo "Variavel: $variavel";
*/

try {
    echo intdiv(7, 0);
} catch(Error $e){
    echo "ERROR<br>";
    echo $e;
}

?>