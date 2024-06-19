<?php

namespace Remi\Banco\Modelo;

interface Autenticavel
{
    public function podeAutenticar(string $senha): bool;
}

