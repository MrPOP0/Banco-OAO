<?php

namespace PPZ\Bank\Modelo\Funcionario;

class Diretor extends Funcionario
{
    public function calculaBonificacao(): float
    {
        return $this->salario * 0.6;
    }
}






