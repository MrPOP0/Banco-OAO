<?php

namespace PPZ\Bank\Service;

use PPZ\Bank\Modelo\Funcionario\Funcionario;

final class Bonificacao
{
    private float $totalBonificacao = 0;

    public function adicionaBonificacao(Funcionario $funcionario)
    {
        $this->totalBonificacao += $funcionario->calculaBonificacao();
    }

    public function getTotal():string
    {
        return "Foi gasto um total de $this->totalBonificacao em bonificações de funcionários";
    }
}
