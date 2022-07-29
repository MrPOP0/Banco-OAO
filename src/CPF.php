<?php

class CPF
{
    private string $cpf;

    public function __construct(string $cpf)
    {
        $this->validaCpf($cpf);
    }

    private function validaCpf(string $cpf)
    {
        $cpf = filter_var($cpf, FILTER_VALIDATE_REGEXP, [
            'options' => [
                'regexp' => '/^[0-9]{3}\.[0-9]{3}\.[0-9]{3}\-[0-9]{2}$/'
            ]
        ]);

        if ($cpf === false) {
            echo 'CPF inválido';
            exit();
        } else {
            $this->cpf = $cpf;
        }
        
    }

    public function getCpf(): string
    {
        return $this->cpf;
    }


}
