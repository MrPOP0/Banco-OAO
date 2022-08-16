<?php

namespace PPZ\Bank\Modelo\Funcionario;

use PPZ\Bank\Modelo\{Pessoa, CPF};

abstract class Funcionario extends Pessoa
{
    private float $salario;

    public function __construct(string $nome, CPF $cpf, float $salario)
    {
        parent::__construct($nome, $cpf);
        $this->salario = $salario;
    }

    public function getSalario(): string
    {
        return $this->salario;
    }

    protected function aumentoSalario($valor): void
    {
        if ($valor < 0) {
            'Valor deve ser positivo';
            return;
        } else {
            $this->salario += $valor;
        }
        
    }

    public function alteraNome(string $nome): void
    {   
        $this->validaNome($nome);
        $this->nome = $nome;

        echo "Seu nome foi alterado para $nome" . PHP_EOL;
    }

    abstract public function calculaBonificacao(): float;
}
