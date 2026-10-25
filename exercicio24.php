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
 26009508-2 - Matheus Eduardo
Data: 01 de Novembro de 2026
Descritivo: 24.FOREACH Aninhado: Usando o array de produtos do exercício 23, imprima o nome e o preço de cada produto.
**************************/


$produtos = [
    ["nome" => "Mouse",   "preço" => 49.90],
    ["nome" => "Teclado", "preço" => 89.90],
    ["nome" => "Monitor", "preço" => 799.00]
];

foreach ($produtos as $produto) {

    foreach ($produto as $chave => $valor) {

        if ($chave == "preço") {

            echo "Preço: R$ " . number_format($valor, 2, ",", ".") . "<br>";
         else 
            echo "Nome: " . $valor . "<br>";

    }

    echo "<br>";
?>

Execução do Código: Usa um laço dentro do outro para exibir os detalhes do catálogo de produtos de forma hierárquica.	