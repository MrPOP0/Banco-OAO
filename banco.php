<?php
// Criação de contas e execução de operações como saque e depositos e etc...

require_once 'src/autoload.php';

use PPZ\Bank\Modelo\Conta\{Conta, ContaCorrente, ContaPoupanca, Titular};
use PPZ\Bank\Modelo\{CPF, Endereco};

//Criação de contas

//Corrente
$julio = new Titular('Júlio César', new CPF('123.456.789-10'), new Endereco('Água Branca', 'Centro', 'Rua Barão', '27'));
$conta1 = new ContaCorrente($julio);

$ulisses = new Titular('José Ulisses', new CPF('109.876.543-21'), new Endereco('Delmiro', 'El Dourado', 'Rua Soldado Jose', '49'));
$conta2 = new ContaCorrente($ulisses);

//Poupança
$jane = new Titular('Jane Cleide', new CPF('852.456.127-46'), new Endereco('Inhapi', 'Bairro Novo', 'Rua São Bento', '75'));
$conta3 = new ContaPoupanca($jane);

//Operações

echo Conta::getNumeroDeContas();

$conta1->deposita(200);
$conta2->deposita(800);

echo $conta1->getSaldo();
echo $conta2->getSaldo();

$conta1->saca(50);
$conta1->getSaldo();

$conta2->transfere(300, $conta1);

echo $conta2->getSaldo();
echo $conta1->getSaldo();

echo $conta1->Titular()->getDados();

echo PHP_EOL . 'OPERAÇÕES DA POUPANÇA' . PHP_EOL . PHP_EOL;

$conta3->deposita(750);
echo $conta3->getSaldo();

$conta3->saca(50);
echo $conta3->getSaldo();