<?php

require __DIR__ . "/vendor/autoload.php";

use src\Leitor;

//***********TXT***********//
$leitorTXT = new Leitor();
$leitorTXT->setDiretorio(__DIR__ . '/arquivos');
$leitorTXT->setArquivo('dados.txt');
$arr_txt = $leitorTXT->lerArquivo();

//***********CSV***********//
$leitorCSV = new leitor();
$leitorCSV->setDiretorio(__DIR__ . '/arquivos');
$leitorCSV->setArquivo('dados.csv');
$arr_csv = $leitorCSV->lerArquivo();

//***********TXT***********//
print_r(array_merge($arr_txt, $arr_csv));
