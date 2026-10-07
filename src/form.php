<form method="POST">
    <input name='nome' placeholder="Seu nome">
    <button>Enviar</button>
</form>

<?php 

if(!empty($_POST && $_SERVER['REQUEST_METHOD'] === 'POST')){
    $nome = $_POST['nome'];
    echo $nome;
}