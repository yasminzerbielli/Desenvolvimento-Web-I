<?php

class Produto{
    public string $nome;
    public float $preco;
    public int $estoque = 0;

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

    public function setNome(string $nome){
        return $this->nome = $nome;
    }


}

// $p = new Produto();
// $p->nome = "Camiseta";
// $p->preco = 59.90;


$b = new Produto("Camiseta", 50, 0);

echo $b->nome . " - ". $b->preco;
echo "<br>";
echo "Valor aplicado com desconto: " . $b->aplicarDesconto(10);

$produtos = [
    new Produto("Blusas", 50.9, 10),
    new Produto("Calças", 100, 20),
    new Produto("Tiara", 15, 1)
];

echo "<br>";
foreach($produtos as $p)
{
    echo "<br><br>Nome:" . $p->getNome() . "<br>Preço: " .number_format($p->preco, 2,',', '.') . "<br>Estoque: " . $p->estoque;
}
