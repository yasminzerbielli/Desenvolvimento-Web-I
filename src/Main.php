<?php

require_once 'Produto.php';
require_once 'Carrinho.php';
require_once 'Cliente.php';
require_once 'Conta.php';

echo "<pre>";

echo "=== PRODUTO ===\n";

$caneta = new Produto(1, "Caneta", 2.50, 10);
$caderno = new Produto(2, "Caderno", 20.00, 2);
echo "Criar produto Caneta (id 1, preço 2.50, estoque 10)\n";
echo "id: " . $caneta->getId() . "\n";
echo "nome: " . $caneta->getNome() . "\n";
echo "preço: " . $caneta->getPreco() . "\n";
echo "temEstoque(10): " . ($caneta->temEstoque(10) ? "sim" : "não") . "\n";
echo "temEstoque(11): " . ($caneta->temEstoque(11) ? "sim" : "não") . "\n";

echo "\n=== CARRINHO ===\n";

$carrinho = new Carrinho();
echo "Criar carrinho vazio -> total(): " . $carrinho->total() . "\n";

$carrinho->adicionar($caneta, 4);
echo "adicionar(Caneta, 4) -> total(): " . $carrinho->total() . "\n";

$carrinho->adicionar($caderno);
echo "adicionar(Caderno) -> total(): " . $carrinho->total() . "\n";

try {
    $carrinho->adicionar($caderno, 5);
} catch (Exception $e) {
    echo "adicionar(Caderno, 5) com estoque 2 -> Erro: " . $e->getMessage() . "\n";
}

echo "\n=== CLIENTE ===\n";

$cliente = new Cliente("Ana", "ana@email.com");
echo "Criar cliente Ana com email ana@email.com\n";
echo "nome: " . $cliente->getNome() . "\n";
echo "email: " . $cliente->getEmail() . "\n";

$cliente->setNome("Ana Maria");
echo "setNome(Ana Maria) -> getNome(): " . $cliente->getNome() . "\n";

$cliente->setEmail("ana.maria@ifc.edu.br");
echo "setEmail(ana.maria@ifc.edu.br) -> getEmail(): " . $cliente->getEmail() . "\n";

try {
    $cliente->setEmail("email-errado");
} catch (Exception $e) {
    echo "setEmail(email-errado) -> Erro: " . $e->getMessage() . "\n";
}
echo "getEmail() depois do erro: " . $cliente->getEmail() . "\n";

echo "\n=== CONTA ===\n";

$conta = new Conta();
echo "Criar conta -> getSaldo(): " . $conta->getSaldo() . "\n";

$conta->depositar(100);
echo "depositar(100) -> getSaldo(): " . $conta->getSaldo() . "\n";

$conta->sacar(30);
echo "sacar(30) -> getSaldo(): " . $conta->getSaldo() . "\n";

try {
    $conta->sacar(500);
} catch (Exception $e) {
    echo "sacar(500) com saldo 70 -> Erro: " . $e->getMessage() . "\n";
}
echo "getSaldo() depois do erro: " . $conta->getSaldo() . "\n";
