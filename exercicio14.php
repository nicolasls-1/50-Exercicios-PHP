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
Descritivo:   Escreva um programa que leia um número e o imprima. O programa deve repetir até que o número lido seja negativo.
*******************************************************************************/
do {
    $numero = (float)rtrim(fgets(STDIN), "\r\n");

    if ($numero >= 0) {
        echo "Número lido: $numero\n";
    }

} while ($numero >= 0);

echo "Programa encerrado (número negativo digitado).\n";


// o sistema pede um numero ate ser negativo
?>