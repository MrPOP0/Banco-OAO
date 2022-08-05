<?php

namespace PPZ\Bank\Modelo;

use PPZ\Bank\Modelo\{Pessoa, CPF};

class Funcionario extends Pessoa
{
    private string $cargo;

    public function __construct(string $nome, CPF $cpf, string $cargo)
    {
        parent::__construct($nome, $cpf);
        $this->cargo = $cargo;
    }

    public function getCargo(): string
    {
        return $this->cargo;
    }

    public function alteraNome(string $nome): void
    {   
        $this->validaNome($nome);
        $this->nome = $nome;

        echo "Seu nome foi alterado para $nome" . PHP_EOL;
    }
}
