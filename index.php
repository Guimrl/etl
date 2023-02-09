<?php

require __DIR__ . "/vendor/autoload.php";

use src\Leitor;

exibeMenu();
$opcao = readLine("Qual arquivo voce quer ler?");

if ($opcao == 1) {
    echo "Lendo arquivo de texto...";
    $leitorTXT = new Leitor();
    $leitorTXT->setDiretorio(__DIR__ . '/arquivos');
    $leitorTXT->setArquivo('dados.txt');
    $arr_txt = $leitorTXT->lerArquivo();
    print_r($arr_txt);
} elseif ($opcao == 2) {
    echo "Lendo arquivo csv...";
    $leitorCSV = new leitor();
    $leitorCSV->setDiretorio(__DIR__ . '/arquivos');
    $leitorCSV->setArquivo('dados.csv');
    $arr_csv = $leitorCSV->lerArquivo();
    print_r($arr_csv);
} elseif ($opcao == 3) {
    echo "Lendo todos os arquivos...";
    print_r(array_merge($arr_txt, $arr_csv));
} elseif ($opcao == 4) {
    echo "Saindo...";
    exit();
} elseif($opcao == 5) {
    echo "Lendo arquivo xml...";
    $leitorXML = new leitor();
    $leitorXML->setDiretorio(__DIR__ . '/arquivos');
    $leitorXML->setArquivo('dados.xml');
    $arr_xml = $leitorXML->lerArquivo();
    print_r($arr_xml); 
}else {
    echo "comando inválido";
}

function exibeMenu(): void
{
    echo "MENU DE OPÇÕES\n\n";
    echo "1 - TXT\n";
    echo "2 - CSV\n";
    echo "3 - TODOS\n";
    echo "4 - SAIR\n";
    echo "5 - XML\n";
}
