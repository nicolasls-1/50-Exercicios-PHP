<?php

// Procedimento que imprime todos os elementos de um array
function imprimirArray($array) {
    echo "Elementos do array:\n";

    foreach ($array as $elemento) {
        echo "- $elemento\n";
    }
}

$quantidade = 5;
$nomes = [];

// Lendo os elementos digitados pelo usuário
for ($i = 1; $i <= $quantidade; $i++) {
    echo "Digite o elemento $i: ";
    $nomes[] = trim(readline());
}

imprimirArray($nomes);

// Explicação: O programa pede ao usuário 5 elementos e os guarda em um array.
// Depois, o array é enviado ao procedimento imprimirArray, que percorre
// cada posição com foreach e imprime os elementos um por linha.

/******************************************************************************
Curso: Tecnologia em Análise e Desenvolvimento de Sistemas
Disciplina: Linguagem e Técnicas de Programação
Professor: Flores
Turma: ADS2B
Componentes:
 26006629-2  - Nicolas da Silva Lima
 26011605-2 - Bernardo Rodrigues
 26013884-2 - Gabriel Rafhael Cavalcante
 26011899-2 - Gabriel Ruiz
 26009508-2 - Matheus Eduardo
Data: 01 de novembro de 2026
Descritivo:   Lê elementos digitados pelo usuário e exibe todos na tela por meio de um procedimento que recebe um array.
*******************************************************************************/
?>
