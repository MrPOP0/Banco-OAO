<?php

namespace PPZ\Bank\Modelo\Funcionario;

class Desenvolvedor extends Funcionario
{
    public function calculaBonificacao(): float
    {
        return $this->getSalario() * 0.35;
    }

    public function promocao()
    {
        $this->aumentoSalario($this->getSalario() * 0.75);
    }
}
