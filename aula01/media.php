<form method="POST">
    <input name='nota01' placeholder="Digite a nota 01" type="number" min="0">
    <input name='nota02' placeholder="Digite a nota 02" type="number" min="0">

    <button>Enviar</button>
</form>

<?php 

if(!empty($_POST && $_SERVER['REQUEST_METHOD'] === 'POST')){
    $nota1 = $_POST['nota01'];
    $nota2 = $_POST['nota02'];
    $media = ($nota1 + $nota2) / 2;

    if ($media >= 7){
        echo "Aprovado!";
    } elseif ($media < 7 && $media >= 6){
        echo "Recuperação!";
    } elseif($media > 10 || $media < 0){
        echo "Média inválida";
    } else {
        echo "Reprovado";
    }
}