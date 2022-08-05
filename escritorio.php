<?php
// Criação de funcionários 

require_once 'src/autoload.php';

use PPZ\Bank\Modelo\{Funcionario, Pessoa, CPF};

//Funcionários

$dev = new Funcionario('Júlio César', new CPF('478.354.210-85'), 'Desenvolvedor');

$estagiário = new Funcionario('José Ulisses', new CPF('954.785.854-34'), 'Estagiário');


//Operações

$dev->alteraNome('João Inocêncio');
echo $dev->getNome() . PHP_EOL;
echo $estagiário->getCargo();
