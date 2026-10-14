<?php

class Produto{
    private string $nome;
    private float $preco;
    private int $estoque = 0;

    public function __construct(
        string $nome,
        float $preco,
        int $estoque
    )
    {
        $this->nome = $nome;
        $this->preco = $preco;
        $this->estoque = $estoque;
    }

    public function aplicarDesconto(float $pacote): float
    {
        return $this->preco * (1 - $pacote/100);
    }

    public function getNome(): string
    {
        return $this->nome;
    }

    public function getPreco(): float
    {
        return $this->preco;
    }

    public function getEstoque(): int
    {
        return $this->estoque;
    }

    public function setNome(string $nome){
        $this->nome = $nome;
    }

    public function setPreco(float $preco){
        if ($preco < 0) throw new InvalidArgumentException("Preço inválido");
        $this->preco = $preco;
    }

    public function setEstoque(int $estoque){
        $this->estoque = $estoque;
    }
}

$produtos = [
    new Produto("Blusas", 50.9, 10),
    new Produto("Calças", 100, 20),
    new Produto("Tiara", 15, 1)
];

echo "<br>";
foreach($produtos as $p)
{
    echo "<br><br>Nome:" . $p->getNome() . "<br>Preço: " .number_format($p->getPreco(), 2,',', '.') . "<br>Estoque: " . $p->getEstoque();
    
    $p->setNome("teste de troca de nome");
    echo "<br>Novo nome: " . $p->getNome();
}
