<?php

class Titular extends Pessoa
{
    private Endereco $endereco;

    public function __construct(string $nome, CPF $cpf, Endereco $endereco)
    {
        $this->validaNome($nome);
        $this->nome = $nome;
        $this->cpf = $cpf;
        $this->endereco = $endereco;
    }

    public function getNome(): string
    {
        return $this->nome;
    }

    public function CPF(): CPF
	{
		return $this->cpf;
	}

    public function Endereco(): Endereco
    {
        return $this->endereco;
    }

    public function getDados(): string
    {
        $dados = "Dados: Titular($this->nome)," . PHP_EOL . 'CPF(' . $this->cpf->getCpf() . '),' . PHP_EOL . 'Endereço(' . $this->endereco->getEndereco() . ')' . PHP_EOL;
        return $dados;
    }

}
