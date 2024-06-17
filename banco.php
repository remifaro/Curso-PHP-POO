<?php

require_once 'autoload.php';
// require_once 'src/Modelo/Conta/Conta.php';
// require_once 'src/Modelo/Endereco.php';
// require_once 'src/Modelo/Pessoa.php';
// require_once 'src/Modelo/Conta/Titular.php';
// require_once 'src/Modelo/CPF.php';

use Remi\Banco\Modelo\Conta\Titular;
use Remi\Banco\Modelo\Endereco;
use Remi\Banco\Modelo\CPF;
use Remi\Banco\Modelo\Conta\Conta;
// Ou podemos colocar assim: 
// use Remi\Banco\Modelo\Conta\{Titular, Conta};
// use Remi\Banco\Modelo\{CPF, Endereco};


$endereco = new Endereco('Recife', 'Boa Viagem', 'Rua Izabel Magalhães', '34');
$vinicius = new Titular(new CPF('123.456.789-10'), 'Vinicius Dias', $endereco);
$primeiraConta = new Conta($vinicius);
$primeiraConta->deposita(500);
$primeiraConta->saca(300); // isso é ok

echo $primeiraConta->recuperaNomeTitular() . PHP_EOL;
echo $primeiraConta->recuperaCpfTitular() . PHP_EOL;
echo $primeiraConta->recuperaSaldo() . PHP_EOL;

$patricia = new Titular(new CPF('698.549.548-10'), 'Patricia', $endereco);
$segundaConta = new Conta($patricia);
var_dump($segundaConta);


$outroEndereco = new Endereco('Olinda', 'Bairro Novo', 'Rua da Matilda', '55 A');
$outra = new Conta(new Titular(new CPF('123.654.789-01'), 'Che Guevara', $outroEndereco));
unset($segundaConta);
echo Conta::recuperaNumeroDeContas();
