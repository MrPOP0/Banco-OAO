<?php



class Conta
{
	private Titular $titular;
	private float $saldo;
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

	public function transfere(float $valor, Conta $contaDestino): void
	{
		if ($valor > $this->saldo) {
			echo 'Saldo insuficiente';
		} else {
			$this->saldo -= $valor;
			$contaDestino->saldo += $valor;
		}
	}

	public function Titular()
	{
		return $this->titular;
	}

	public function getSaldo(): string
	{
		$mensagem = $this->titular->nome . ', seu saldo é de ' . $this->saldo . PHP_EOL;
		
		return $mensagem;
	}

	public static function getNumeroDeContas(): int
	{
		return self::$numeroDeContas;
	}

}