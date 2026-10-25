<?php

// Procedimento que imprime uma contagem regressiva a partir do número recebido até 0
function contagemRegressiva($numero) {
    for ($i = $numero; $i >= 0; $i--) {
        echo "$i\n";
    }
}

echo "Digite o número inicial da contagem: ";
$numero = (int) readline();

contagemRegressiva($numero);

// Explicação: O procedimento contagemRegressiva usa um laço for que começa no número
// informado pelo usuário e diminui 1 a cada repetição ($i--), imprimindo cada valor
// até chegar em 0.

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
Descritivo:   Lê um número e exibe na tela uma contagem regressiva até 0 por meio de um procedimento.
*******************************************************************************/
?>
