<?php

namespace PPZ\Bank\Modelo\Funcionario;

use PPZ\Bank\Modelo\Autenticavel;

class Gerente extends Funcionario implements Autenticavel
{
    public function calculaBonificacao(): float
    {
        return $this->salario * 0.5;
    }

    public function podeAutenticar(string $senha): bool
    {
        return $senha === '4321';
    }
}