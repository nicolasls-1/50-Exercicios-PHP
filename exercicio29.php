<?php

/**************************
Curso: Tecnologia em Análise e Desenvolvimento de Sistemas
Disciplina: Linguagem e Técnicas de Programacão
Professor: Flores
Turma: ADS2B
Componentes:
 26006629-2 - Nicolas da Silva Lima
 26011605-2 - Bernardo Rodrigues
 26013884-2 - Gabriel Rafhael Cavalcante
 26011606-2 - Gabriel Ruiz
 26009508-2 - Matheus Eduardo dos Santos
Data: 01 de Novembro de 2026
Descritivo: 29.FOREACH/IF: Dado um array de números [12, 5, 23, 18, 9, 45], imprima apenas os números maiores que 20.
**************************/


$numeros = [12, 5, 23, 18, 9, 45];

foreach ($numeros as $numero) {

    if ($numero > 20) {
        echo $numero . "<br>";
    }
}

?>

Execução do Código: Percorre um array de números usando foreach e exibe apenas os valores maiores que 20