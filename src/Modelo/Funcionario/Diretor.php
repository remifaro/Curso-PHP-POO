<?php

namespace Remi\Banco\Modelo\Funcionario;

use Remi\Banco\Modelo\Autenticavel;

class Diretor extends Funcionario implements Autenticavel
{
    public function calculaBonificacao(): float
    {
        return $this->recuperaSalario()*2;
    }

    public function podeAutenticar(string $senha): bool
    {
        return $senha === '1234';
    }
}