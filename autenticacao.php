<?php
 use Remi\Banco\Modelo\{CPF, Endereco};
 use Remi\Banco\Modelo\Funcionario\{Diretor, Gerente};
 use Remi\Banco\Service\Autenticador;
 use Remi\Banco\Modelo\Conta\Titular;

 require_once 'autoload.php';

 $autenticador = new Autenticador();
 $umGerente = new Gerente(
    'João da Silva',
    new CPF('123.123.123-10'),
    10000
 );

 $umTitular = new Titular(
    new CPF('123.123.123-10'),
    'Alberto da Silva',
    new Endereco('', '', '', '')
 );

 $autenticador->tentaLogin($umGerente, '4321');
 echo "\n";
 $autenticador->tentaLogin($umTitular, 'abcd');