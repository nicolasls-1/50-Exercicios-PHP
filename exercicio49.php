<?php
/******************************************************************************
Curso: Tecnologia em Análise e Desenvolvimento de Sistemas
Disciplina: Linguagem e Técnicas de Programação
Professor: Flores
Turma: ADS2B
Componentes:
 26006629-2  - Nicolas da Silva Lima
 26011605-2 - Bernardo Rodrigues
 26013884-2 - Gabriel Rafhael Cavalcante
 26011606-2 - Gabriel Ruiz
 26009508-2 - Matheus Eduardo
Data: 01 de novembro de 2026
Descritivo:   Faça uma função gerarArrayPares que receba um número n e retorne um array com todos os números pares de 0 até n.
*******************************************************************************/

function gerarArrayPares($n) {
    $pares = [];

    for ($i = 0; $i <= $n; $i++) {
        if ($i % 2 == 0) {
            $pares[] = $i;
        }
    }

    return $pares;
}

$n = 20;

$resultado = gerarArrayPares($n);

echo "Números pares de 0 até $n:\n";
foreach ($resultado as $numero) {
    echo $numero . " ";
}
echo "\n";

// Explicação: Um laço 'for' vai de 0 até n e, quando o resto da divisão por 2 é 0 ($i % 2 == 0), o número é par e é adicionado ao array com $pares[] = $i; no final a função retorna o array.
?>
