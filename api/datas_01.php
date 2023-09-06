<div class="titulo">Datas</div>


<?php

echo time() . "<br>";
echo date('D, d \d\d M \d\e Y') . '<br>';
setlocale(LC_TIME, 'pt_BR', 'pt_BR.utf-8');
$dataFixa = mktime(15, 30, 50, 8, 16, 2023);
echo strftime('%A, %d de %B de %Y - %H:%M:%S', $dataFixa);
$data = new DateTime();
echo "<br>";
print_r($data);


$arquivo = fopen('teste.txt', 'w');
fwrite($arquivo, "Valor inicial\n");
$str = "Segunda linha\n";
fwrite($arquivo, $str);
fclose($arquivo);

?>