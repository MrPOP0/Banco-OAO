<?php

class Titular
{
    private string $nome;
    private CPF $cpf;

    public function __construct(string $nome, CPF $cpf)
    {
        $this->validaNome($nome);
        $this->nome = $nome;
        $this->cpf = $cpf;
    }

    public function getNome(): string
    {
        return $this->nome;
    }

    public function CPF()
	{
		return $this->cpf;
	}

    public function getDados(): string
    {
        $dados = 'Titular: ' . $this->nome . PHP_EOL . 'CPF: ' . $this->cpf->getCpf() . PHP_EOL;
        return $dados;
    }

    private function validaNome($nome)
    {
        if (strlen(trim($nome)) > 5) {
            $this->nome = $nome;
        }else{
            exit;
        }
    }

}
