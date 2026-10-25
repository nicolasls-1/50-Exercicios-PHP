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
Descritivo:   Crie uma função maiorNumero que receba dois números e retorne o maior entre eles.
*******************************************************************************/

function maiorNumero($a, $b) {
    if ($a > $b) {
        return $a;
    } else {
        return $b;
    }
}

$n1 = 15;
$n2 = 27;

$maior = maiorNumero($n1, $n2);

echo "Entre $n1 e $n2, o maior é: $maior\n";

// Explicação: A função maiorNumero usa um 'if' para comparar os dois números e retorna o primeiro se ele for maior, senão retorna o segundo.
?>
