<?php

namespace PPZ\Bank\Modelo\Conta;

class ContaPoupanca extends Conta
{
    protected function tarifaSaque(): float
    {
        return 0.03;
    }
}






