<?php

namespace PPZ\Bank\Modelo;

abstract class Pessoa
{
    protected string $nome;
    private CPF $cpf;

    public function __construct(string $nome, CPF $cpf)
    {
        $this->nome = $nome;
        $this->cpf = $cpf;
    }
    
    public function getNome(): string
    {
        return $this->nome;
    }

    public function CPF(): CPF
	{
		return $this->cpf;
	}

    final protected function validaNome($nome)
    {
        if (strlen(trim($nome)) > 5) {
            $this->nome = $nome;
        }else{
            exit;
        }
    }
}
