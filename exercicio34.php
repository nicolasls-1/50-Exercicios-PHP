<?php

// Procedimento que informa se o número recebido é par ou ímpar
function verificarParImpar($numero) {
    if ($numero % 2 == 0) {
        echo "O número $numero é: Par\n";
    } else {
        echo "O número $numero é: Ímpar\n";
    }
}

echo "Digite um número: ";
$numero = (int) readline();

verificarParImpar($numero);

// Explicação: O procedimento verificarParImpar usa o operador % (resto da divisão).
// Se o resto da divisão do número por 2 for 0, ele é par; caso contrário, é ímpar.
// O resultado é impresso na tela, sem retornar nenhum valor.

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
Descritivo:   Lê um número e exibe na tela se ele é par ou ímpar por meio de um procedimento.
*******************************************************************************/
?>
