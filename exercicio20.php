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
 26011899-2 - Gabriel Ruiz
 26009508-2 - Matheus Eduardo
Data: 01 de novembro de 2026
Descritivo:   20.Array/FOR: Crie um array com os 7 dias da semana e imprima-os usando um laço for.
*******************************************************************************/
$dias_semana = ["Domingo", "Segunda-feira", "Terça-feira", "Quarta-feira", "Quinta-feira", "Sexta-feira", "Sábado"];

for ($i = 0; $i < count($dias_semana); $i++) {
    echo $dias_semana[$i] . "\n";
}

// o sistema imprime os dias da semana usando o laço for
?>
