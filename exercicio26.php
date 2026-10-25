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
Descritivo: 26.Array/Funções Nativas: Dado o array [10, 2, 5, 8, 1], ordene-o em ordem crescente usando sort().
**************************/


$numeros = [10, 2, 5, 8, 1];

sort($numeros);

foreach ($numeros as $numero) {
    echo $numero . " ";
}

?>

Execução do Código: Pega um array desordenado e utiliza a função nativa sort() para organizá-lo em ordem crescente.
