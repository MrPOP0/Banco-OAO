<?php

class Pessoa
{
    public string $nome;
    public CPF $cpf;

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

    public function validaNome($nome)
    {
        if (strlen(trim($nome)) > 5) {
            $this->nome = $nome;
        }else{
            exit;
        }
    }
}
