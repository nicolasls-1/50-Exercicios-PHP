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
Descritivo:   Escreva uma função calcularAreaRetangulo que receba a largura e a altura e retorne a área.
*******************************************************************************/

function calcularAreaRetangulo($largura, $altura) {
    $area = $largura * $altura;
    return $area;
}

$largura = 6;
$altura = 4;

$area = calcularAreaRetangulo($largura, $altura);

echo "Largura: $largura\n";
echo "Altura: $altura\n";
echo "A área do retângulo é: $area\n";

// Explicação: A função calcularAreaRetangulo multiplica a largura pela altura, que é a fórmula da área do retângulo, e retorna o resultado.
?>
