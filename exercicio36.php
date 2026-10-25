<?php

// Procedimento que desenha uma linha com 20 hifens
function desenharLinha() {
    for ($i = 0; $i < 20; $i++) {
        echo "-";
    }
    echo "\n";
}

desenharLinha();

// Explicação: O procedimento desenharLinha usa um laço for que repete 20 vezes,
// imprimindo um hífen a cada repetição. No final, pula uma linha com \n.
// O resultado é uma linha de 20 hifens: --------------------

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
Descritivo:   Exibe na tela uma linha de 20 hifens por meio de um procedimento.
*******************************************************************************/
?>
