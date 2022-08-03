<?php
// Criação de contas e execução de operações como saque e depositos e etc...

require 'src/Conta.php';
require 'src/Pessoa.php';
require 'src/Titular.php';
require 'src/Cpf.php';
require 'src/Endereco.php';

//Criação de contas

$pessoaX = new Titular('Pessoa X', new CPF('123.456.789-10'), new Endereco('Cidade X', 'Bairro X', 'Rua X', 'N X'));
$contaX = new Conta($pessoaX);

$pessoaY = new Titular('Pessoa Y', new CPF('109.876.543-21'), new Endereco('Cidade Y', 'Bairro Y', 'Rua Y', 'N Y'));
$contaY = new Conta($pessoaY);


//Operações
/*
echo Conta::getNumeroDeContas();

$contaX->deposita(200);
$contaY->deposita(800);

echo $contaX->getSaldo();
echo $contaY->getSaldo();

$contaX->saca(50);
$contaX->getSaldo();

$contaY->transfere(300, $contaX);

echo $contaY->getSaldo();
echo $contaX->getSaldo();

echo $contaX->Titular()->getDados();
*/