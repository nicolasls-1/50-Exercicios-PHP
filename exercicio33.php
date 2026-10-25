<?php

// Procedimento que imprime a tabuada de 1 a 10 do número recebido
function mostrarTabuada($numero) {
    echo "Tabuada do $numero:\n";

    for ($i = 1; $i <= 10; $i++) {
        $resultado = $numero * $i;
        echo "$numero x $i = $resultado\n";
    }
}

echo "Digite um número para ver a tabuada: ";
$numero = (int) readline();

mostrarTabuada($numero);

// Explicação: O número digitado pelo usuário é passado ao procedimento mostrarTabuada.
// Dentro dele, um laço for repete de 1 a 10, multiplica o número pelo contador
// e imprime cada linha da tabuada na tela.

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
Descritivo:   Lê um número e exibe na tela a sua tabuada de 1 a 10 por meio de um procedimento.
*******************************************************************************/
?>
