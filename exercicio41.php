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
Descritivo:   Crie uma função chamada somar que receba dois números e retorne a soma deles.
*******************************************************************************/

function somar($a, $b) {
    $resultado = $a + $b;
    return $resultado;
}

$numero1 = 8;
$numero2 = 4;

$soma = somar($numero1, $numero2);

echo "A soma de $numero1 + $numero2 é: $soma\n";

// Explicação: A função somar recebe dois números, soma os dois e devolve o resultado com o return, que depois é guardado numa variável e exibido na tela.
?>
