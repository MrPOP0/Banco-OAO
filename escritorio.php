<?php
// Criação de funcionários 

require 'src/CPF.php';
require 'src/Pessoa.php';
require 'src/Funcionario.php';

//Funcionários

$dev = new Funcionario('Pessoa A', new CPF('478.354.210-85'), 'Desenvolvedor');

$estagiário = new Funcionario('Pessoa B', new CPF('954.785.854-34'), 'Estagiário');


//Operações
/*
$dev->alteraNome('Pessoa V');
echo $dev->getNome() . PHP_EOL;
echo $estagiário->getCargo();
*/