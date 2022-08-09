<?php
// Criação de funcionários 

require_once 'src/autoload.php';

use PPZ\Bank\Modelo\{Pessoa, CPF};
use PPZ\Bank\Modelo\Funcionario\{Funcionario, Desenvolvedor, Diretor, Gerente, Estagiario};
use PPZ\Bank\Service\Bonificacao;
//Funcionários

$diretor = new Diretor(
        'Ednaldo Martins',
        new CPF('824.624.876-74'),
        'Diretor',
        20700);

$gerente = new Gerente(
        'Jane Cleide',
        new CPF('635.752.469-53'),
        'Gerente',
        12400);

$dev = new Desenvolvedor(
        'Júlio César',
        new CPF('478.354.210-85'),
        'Desenvolvedor',
        6300);

$estagiario = new Estagiario(
    'José Ulisses',
    new CPF('954.785.854-34'),
    'Estagiário',
    1200);


//Operações

$estagiario->alteraNome('João Inocêncio');

echo $dev->getNome() . PHP_EOL;
echo $estagiario->getCargo() . PHP_EOL;
echo $dev->getSalario() . PHP_EOL;

$dev->promocao();

echo $dev->getSalario() . PHP_EOL;

$controlador = new Bonificacao();
$controlador->adicionaBonificacao($dev);
$controlador->adicionaBonificacao($estagiario);
echo $controlador->getTotal() . PHP_EOL;
