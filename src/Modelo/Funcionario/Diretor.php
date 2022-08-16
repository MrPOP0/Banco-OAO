<?php

namespace PPZ\Bank\Modelo\Funcionario;

use PPZ\Bank\Modelo\Autenticavel;

class Diretor extends Funcionario implements Autenticavel
{
    public function calculaBonificacao(): float
    {
        return $this->salario * 0.6;
    }

    public function podeAutenticar(string $senha): bool
    {
        return $senha === '1234';
    }
}






