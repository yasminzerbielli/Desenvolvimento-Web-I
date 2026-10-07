<?php 

$lista = ['banana', 'morango', 'maçã', 'uva'];
$lista[0] = 'manga';

foreach($lista as $l => $fruta){
    echo "$l - ".strtoupper($fruta). "<br>";
}

echo "<br>";
echo "<br>";
echo "<br>";

$produto = ['nome' => 'camiseta', 'preco' => 49.90];
echo $produto['nome'];

$arrayData = [];
foreach ($lista as $l){
    $arrayData[] = $l;
}

print_r( $arrayData);