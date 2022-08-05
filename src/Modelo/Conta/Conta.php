<?php

namespace PPZ\Bank\Modelo\Conta;

abstract class Conta
{
	private Titular $titular;
	protected float $saldo;
	private static int $numeroDeContas = 0;
	
	public function __construct(Titular $titular)
	{
		$this->titular = $titular;
		$this->saldo = 0;

		self::$numeroDeContas++;
	}

	public function __destruct()
	{
		self::$numeroDeContas;
	}

	public function saca(float $valor): void
	{
		$tarifa = $valor * $this->tarifaSaque();
		$valor += $tarifa;
		if ($valor > $this->saldo) {
			echo 'Saldo insuficiente';
		} else {
			$this->saldo -= $valor;
		}
		
	}

	public function deposita(float $valor): void
	{
		if ($valor <= 0) {
		 	echo "Valor inválido" . PHP_EOL . "Insira um valor positivo";
		 }else{
		 	$this->saldo += $valor;
		 }
		  
	}

	public function Titular(): Titular
	{
		return $this->titular;
	}

	public function getSaldo(): string
	{
		$mensagem = $this->titular->getNome() . ', seu saldo é de ' . $this->saldo . PHP_EOL;
		
		return $mensagem;
	}

	abstract protected function tarifaSaque():float;

	public static function getNumeroDeContas(): string
	{
		return 'Numero de contas abertas: ' . self::$numeroDeContas . PHP_EOL;
	}

}