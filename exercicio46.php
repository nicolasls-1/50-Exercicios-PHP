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
Descritivo:   Elabore uma função ehPrimo que receba um número e retorne true se ele for primo e false caso contrário.
*******************************************************************************/

function ehPrimo($numero) {
    if ($numero < 2) {
        return false;
    }

    for ($i = 2; $i < $numero; $i++) {
        if ($numero % $i == 0) {
            return false;
        }
    }

    return true;
}

$teste1 = 7;
$teste2 = 10;

if (ehPrimo($teste1)) {
    echo "$teste1 é primo\n";
} else {
    echo "$teste1 não é primo\n";
}

if (ehPrimo($teste2)) {
    echo "$teste2 é primo\n";
} else {
    echo "$teste2 não é primo\n";
}

// Explicação: A função retorna false se o número for menor que 2 e usa um laço 'for' de 2 até o número - 1 testando se alguma divisão tem resto 0 ($numero % $i == 0); se achar um divisor retorna false, se não achar nenhum retorna true.
?>
