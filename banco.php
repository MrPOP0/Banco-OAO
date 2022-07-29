<?php
// Criação de contas e execução de operações como saque e depositos e etc...

require 'src/Conta.php';
require 'src/Titular.php';
require 'src/Cpf.php';

//Criação de contas

$pessoaX = new Titular('Pessoa X', new CPF('123.456.789-10'));
$contaX = new Conta($pessoaX);

$pessoaY = new Titular('Pessoa Y', new CPF('109.876.543-21'));
$contaY = new Conta($pessoaY);


//Operações
/*
$contaX->deposita(200);
$contaY->deposita(800);

echo $contaX->getSaldo();
echo $contaY->getSaldo();

$contaX->saca(50);
$contaX->getSaldo();

$contaY->transfere(300, $contaX);

echo $contaY->getSaldo();
echo $contaX->getSaldo();

echo Conta::getNumeroDeContas();
*/
//echo $contaX->getSaldo();
echo $contaX->Titular()->getDados();
