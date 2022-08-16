<?php

namespace PPZ\Bank\Modelo;

interface Autenticavel
{
    public function podeAutenticar(string $senha): bool;
}