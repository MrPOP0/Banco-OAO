<?php

namespace PPZ\Bank\Modelo\Funcionario;

class Estagiario extends Funcionario
{    
    public function calculaBonificacao(): float
    {
        return $this->getSalario() * 0.1;
    }
}
