<?php

use Remi\Banco\Modelo\Conta\Conta;
use Remi\Banco\Modelo\Conta\ContaPoupanca;
use Remi\Banco\Modelo\Conta\ContaCorrente;
use Remi\Banco\Modelo\Conta\Titular;
use Remi\Banco\Modelo\CPF;
use Remi\Banco\Modelo\Endereco;

require_once 'autoload.php';

$conta = new ContaCorrente(
    new Titular(
        new CPF('223.456.789-10'), 
        'Osbilio Alencar', 
        new Endereco('Tamandaré', 'bairro teste', 'Rua lálá tenório', '14')
    )
);

// $conta->transfere(200, 'blabla');
$conta->deposita(500);
$conta->saca(100);

echo $conta->recuperaSaldo();

