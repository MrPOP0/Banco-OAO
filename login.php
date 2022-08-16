<?php

require_once 'src/autoload.php';

use PPZ\Bank\Modelo\{CPF, Endereco};
use PPZ\Bank\Modelo\Conta\Titular;
use PPZ\Bank\Modelo\Funcionario\{Funcionario, Diretor, Gerente};
use PPZ\Bank\Service\Autenticador;

$autenticador = new Autenticador();
$diretor = new Diretor(
    'Ednaldo Martins',
    new CPF('824.624.876-74'),
    20700);
$gerente = new Gerente(
    'Jane Cleide',
    new CPF('635.752.469-53'),
    12400);
$julio = new Titular(
        'Júlio César', 
        new CPF('123.456.789-10'), 
        new Endereco('Água Branca', 'Centro', 'Rua Barão', '27'));


$autenticador->tentaLogar($julio, '4321');



