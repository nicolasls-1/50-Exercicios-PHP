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
Descritivo:   Crie uma função obterPrimeiroElemento que receba um array e retorne seu primeiro elemento.
*******************************************************************************/

function obterPrimeiroElemento($lista) {
    return $lista[0];
}

$frutas = ["Banana", "Maçã", "Uva", "Laranja"];

$primeiro = obterPrimeiroElemento($frutas);

echo "O primeiro elemento do array é: $primeiro\n";

// Explicação: A função obterPrimeiroElemento retorna o valor que está na posição 0 do array, porque o primeiro elemento de um array sempre fica no índice 0.
?>
