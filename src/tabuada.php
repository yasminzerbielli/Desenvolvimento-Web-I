<form method="POST">
    <input name='numero' placeholder="Digite um número de 1 a 10">
    <button>Enviar</button>
</form>


<?php

$lista = [1,2,3,4,5,6,7,8,9,10];

if(!empty($_POST && $_SERVER['REQUEST_METHOD'] === 'POST')){
    $numero = $_POST['numero'];
    foreach($lista as $l){
        $multiplicacao = $numero * $l;
        echo "$numero x $l = $multiplicacao";
        echo "<br>";
    }
}

