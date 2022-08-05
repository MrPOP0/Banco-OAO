<?php

namespace PPZ\Bank\Modelo\Conta;

class ContaCorrente extends Conta
{
    protected function tarifaSaque(): float
    {
        return 0.05;   
    }

    public function transfere(float $valor, Conta $contaDestino): void
	{
		if ($valor > $this->saldo) {
			echo 'Saldo insuficiente';
		} else {
			$this->saldo -= $valor;
			$contaDestino->saldo += $valor;
		}
	}
}






