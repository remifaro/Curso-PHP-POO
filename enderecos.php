<?php

use Remi\Banco\Modelo\Endereco;

require_once 'autoload.php';

$umEndereco = new ENdereco('Recife', 'Boa Viagem', 'Rua Izabel Magalhães', '34');
$outroEndereco = new ENdereco('Jaboatão dos Guararapes', 'Piedade', 'Av. Ayrton Senna', '508');

echo $umEndereco -> cidade . PHP_EOL;

echo $umEndereco . PHP_EOL;
echo $outroEndereco . PHP_EOL;

$umEndereco->cidade = "Nova Cidade";
echo $umEndereco -> cidade;