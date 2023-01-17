<?php

require __DIR__."/vendor/autoload.php";

use src\Leitor;

$leitor = new Leitor();
$leitor->setDiretorio(__DIR__.'/arquivos');
$leitor->setArquivo('dados.csv');
$leitor->lerArquivo();

print_r($leitor->lerArquivo());
