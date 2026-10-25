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
Descritivo: 23.Array Associativo: Crie um array de produtos, onde cada produto é um array associativo com "nome" e "preço".
**************************/


$produtos = [
    ["nome" => "Mouse",   "preço" => 49.90],
    ["nome" => "Teclado", "preço" => 89.90],
    ["nome" => "Monitor", "preço" => 799.00]
];

foreach ($produtos as $produto) {
    echo $produto["nome"] . " - R$ " . number_format($produto["preço"], 2, ",", ".") . "<br>";
?>

Execução do Código: Cria uma lista (array de arrays associativos) contendo o nome e preço de vários produtos.