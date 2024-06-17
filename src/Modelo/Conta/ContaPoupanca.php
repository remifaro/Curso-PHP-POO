<?php

namespace Remi\Banco\Modelo\Conta;

class ContaPoupanca extends Conta
{
    // sobescrita de método - reescrever uma funcionalidade da classe base em uma das classes filhas. 
    protected function percentualTarifa()
    {
        return 0.03;
    }

}

