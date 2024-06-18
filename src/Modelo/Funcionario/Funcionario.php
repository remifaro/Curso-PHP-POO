<?php

namespace Remi\Banco\Modelo\Funcionario;

use Remi\Banco\Modelo\{CPF, Pessoa};

// Funcionário é uma pessoa
abstract class Funcionario extends Pessoa 
{
    private $cargo;
    private $salario;

    public function __construct(string $nome, CPF $cpf, string $cargo, float $salario)
    {
        parent::__construct($nome, $cpf);
        $this-> cargo = $cargo;
        $this-> salario = $salario;
    }

    public function recuperaCargo(): string
    {
        return $this->cargo;
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

    public function calculaBonificacao(): float
    {
       return $this->salario*0.1; 
    }
}

