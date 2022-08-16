<?php

namespace PPZ\Bank\Modelo\Conta;

use PPZ\Bank\Modelo\{Pessoa, CPF, Endereco};
use PPZ\Bank\Modelo\Autenticavel;

class Titular extends Pessoa implements Autenticavel
{
    private Endereco $endereco;

    public function __construct(string $nome, CPF $cpf, Endereco $endereco)
    {
        parent::__construct($nome, $cpf);
        $this->endereco = $endereco;
    }

    public function getNome(): string
    {
        return $this->nome;
    }

    public function Endereco(): Endereco
    {
        return $this->endereco;
    }

    public function getDados(): string
    {
        $dados = "Dados: Titular($this->nome)," . PHP_EOL . 'CPF(' . $this->CPF()->getCpf() . '),' . PHP_EOL . 'Endereço(' . $this->endereco->getEndereco() . ')' . PHP_EOL;
        return $dados;
    }

    public function podeAutenticar(string $senha): bool
    {
        return $senha === 'abcd';
    }
}
