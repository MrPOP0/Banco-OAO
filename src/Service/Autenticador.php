<?php

namespace PPZ\Bank\Service;

use PPZ\Bank\Modelo\Autenticavel;

final class Autenticador
{
    final public function tentaLogar(Autenticavel $autenticavel, string $senha): void
    {
        if ($autenticavel->podeAutenticar($senha)) {
            echo 'Ok. Usuário logado, :D';
        } else {
            echo 'Senha Incorreta, :(';
        }
    }
}



