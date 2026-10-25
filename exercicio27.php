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
Descritivo: 27.Array Associativo: Crie um array com as notas de um aluno em 4 disciplinas e calcule a média.
**************************/


$notas = [
    "Matemática" => 7.5,
    "Português"  => 8.0,
    "Programação" => 9.5,
    "Banco de Dados" => 6.0
];

$soma = 0;

foreach ($notas as $disciplina => $nota) {
    echo $disciplina . ": " . $nota . "<br>";
    $soma = $soma + $nota;
}

$media = $soma / count($notas);

echo "<br>Média: " . number_format($media, 2, ",", ".");

?>

Execução do Código: Armazena notas de disciplinas em um array associativo, soma tudo e calcula a média final.
