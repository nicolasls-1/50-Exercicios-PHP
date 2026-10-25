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
Descritivo:   Escreva uma função fatorial que receba um número e retorne seu fatorial.
*******************************************************************************/

function fatorial($numero) {
    $resultado = 1;

    for ($i = 1; $i <= $numero; $i++) {
        $resultado = $resultado * $i;
    }

    return $resultado;
}

$numero = 5;

$fat = fatorial($numero);

echo "O fatorial de $numero é: $fat\n";

// Explicação: O resultado começa em 1 e um laço 'for' de 1 até o número multiplica o resultado por cada valor ($resultado * $i), calculando o fatorial (ex: 5! = 5 x 4 x 3 x 2 x 1 = 120).
?>
