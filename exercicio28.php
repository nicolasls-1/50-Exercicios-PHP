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
Descritivo: 28.Array/Busca: Crie um array de frutas. Escreva um código que verifique se a fruta "Maçã" existe no array.
**************************/


$frutas = ["Banana", "Maçã", "Laranja", "Uva", "Manga"];

if (in_array("Maçã", $frutas)) {
    echo "A fruta Maçã existe no array.";
} else {
    echo "A fruta Maçã não existe no array.";
}

?>

Execução do Código: Verifica se a fruta "Maçã" está presente em uma lista de frutas