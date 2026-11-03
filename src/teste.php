<?php

ini_set('display_errors', '0');
ini_set('display_startup_errors', '0');
error_reporting(E_ALL);
ini_set('log_errors', '1');   // erros vão para o log do PHP, não para a tela

require __DIR__ . '/autoload.php';
use App\Model\{Produto, ProdutoFisico, ProdutoDigital};
use App\DAO\ProdutoDAO;
use App\Database\Conexao;


$pdo = Conexao::get();
$dao = new ProdutoDAO($pdo);

$f = fopen('storage/produtos.csv', 'w');
fputcsv($f, ['id', 'nome', 'preco']);   // cabeçalho
$exportados = [];
foreach ($dao->listar() as $p) {
  fputcsv($f, [$p->getId(), $p->getNome(), $p->getPreco()]);
  $exportados[] = $p;
}
fclose($f);

// mostra o que foi adicionado ao CSV (com escape contra XSS)
echo '<h3>' . count($exportados) . ' produto(s) adicionado(s) ao CSV</h3><ul>';
foreach ($exportados as $p) {
  echo '<li>'
    . htmlspecialchars((string) $p->getId(), ENT_QUOTES, 'UTF-8') . ' - '
    . htmlspecialchars($p->getNome(), ENT_QUOTES, 'UTF-8') . ' - R$ '
    . htmlspecialchars((string) $p->getPreco(), ENT_QUOTES, 'UTF-8')
    . '</li>';
}
echo '</ul>';