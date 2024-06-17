<?php

namespace Remi\Banco\Modelo\Conta;

use Remi\Banco\Modelo\Pessoa;
use Remi\Banco\Modelo\CPF;
use Remi\Banco\Modelo\Endereco;

// Titular é uma pessoa
class Titular extends Pessoa
{
    private Endereco $endereco;

    public function __construct(CPF $cpf, string $nome, Endereco $endereco)
    {
        parent::__construct($nome, $cpf);
        $this->endereco = $endereco;
    }

    public function recuperaEndereco(): Endereco
    {
        return $this->endereco;
    }
}


