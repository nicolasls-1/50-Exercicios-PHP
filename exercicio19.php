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
 26011899-2 - Gabriel Ruiz
 26009508-2 - Matheus Eduardo
Data: 01 de novembro de 2026
Descritivo:   19.FOREACH: Usando o array de números do exercício 17, calcule e imprima a soma de todos os números com foreach.
*******************************************************************************/
$numeros =[10,20,30,40];
$soma = 0;

foreach ($numeros as $numero) {
    $soma += $numero;
}

echo "Soma total: $soma\n";

// o sistema calcula e imprime a soma dos números do array
?>
