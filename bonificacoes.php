<?php

require_once 'autoload.php';

use Remi\Banco\Service\ControladorDeBonificacoes;
use Remi\Banco\Modelo\CPF;
use Remi\Banco\Modelo\Funcionario\{Funcionario, Desenvolvedor, Gerente, Diretor};

$umDesenvolvedor = new Desenvolvedor(
    'Rémi Farine',
    new CPF('092.787.234-10'),
    'Desenvolvedor FullStack',
    1000
);

$umDesenvolvedor->sobeDeNivel();

$umaGerente = new Gerente(
    'Stephanie Gomes',
    new CPF('888.333.444-90'),
    'Gerente',
    3000
);

$umDiretor = new Diretor(
    'Juliano Delariva',
    new CPF('345.678.345-20'),
    'Diretor',
    5000
);

$controlador = new ControladorDeBonificacoes();
$controlador->adicionaBonificacaoDe($umDesenvolvedor);
$controlador->adicionaBonificacaoDe($umaGerente);
$controlador->adicionaBonificacaoDe($umDiretor);

echo $controlador->recuperaTotal();