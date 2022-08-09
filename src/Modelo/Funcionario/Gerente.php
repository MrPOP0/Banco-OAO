<?php

namespace PPZ\Bank\Modelo\Funcionario;

class Gerente extends Funcionario
{
    public function calculaBonificacao(): float
    {
        return $this->salario * 0.5;
    }
}