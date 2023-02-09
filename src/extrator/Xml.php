<?php

namespace src\extrator;

/**
 * O formato de entrada de dados é: cpf, nome, email.
 */
class Xml extends Arquivo
{
    public function lerArquivo(string $caminho): array
    {
        $handle = fopen($caminho, 'r');

        while (!feof($handle)) {
            $linha = fgets($handle);
            print_r(strip_tags($linha));
        }

        fclose($handle);

        return $this->getDados();
    }
}
