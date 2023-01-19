<?php

namespace src\extrator;

/**
 * O formato de entrada de dados é: cpf, nome, email.
 */
class Txt extends Arquivo
{
    public function lerArquivo(string $caminho): array
    {
        $handle = fopen($caminho, 'r');

        while (!feof($handle)) {
            $linha = fgets($handle);
            $this->setDados(
                substr($linha, 11, 30),
                substr($linha, 0, 11),
                substr($linha, 41, 60)
            );
        }

        fclose($handle);

        return $this->getDados();
    }
}
