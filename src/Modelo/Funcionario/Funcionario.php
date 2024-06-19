<?php

namespace Remi\Banco\Modelo\Funcionario;

use Remi\Banco\Modelo\{CPF, Pessoa};

// Funcionário é uma pessoa
abstract class Funcionario extends Pessoa 
{
    private $salario;

    public function __construct(string $nome, CPF $cpf, float $salario)
    {
        parent::__construct($nome, $cpf);
        $this-> salario = $salario;
    }

    public function alteraNome(string $nome): void
    {
        $this->validaNome($nome);
        $this->nome = $nome;
    }

    public function recebeAumento(float $valorAumento):void
    {
        if($valorAumento < 0){
            echo "Aumento deve ser positivo.";
            return;
        }

        $this->salario += $valorAumento;
    }

    public function recuperaSalario(): float
    {
        return $this->salario;
    }

    // Todas as classes que estenderem a classe atual, precisam implementar esse método abstrato.
    abstract public function calculaBonificacao(): float;

}

