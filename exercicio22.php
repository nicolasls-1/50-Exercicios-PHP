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
Descritivo: 22.Array Associativo/FOREACH: Usando o array do exercício 21, imprima cada dado no formato "chave: valor".
**************************/


$aluno = [
    "nome"  => "Carlos Silva",
    "idade" => 20,
    "curso" => "Análise e Desenvolvimento de Sistemas"
];

foreach ($aluno as $chave => $valor) {
    echo $chave . ": " . $valor . "<br>";
?>

Execução do Código: Percorre o array do aluno com foreach para imprimir no padrão chave: valor.