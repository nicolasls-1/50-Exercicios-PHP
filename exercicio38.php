<?php

// Procedimento que calcula a média de duas notas e informa a situação do aluno
function calcularMediaAluno($nota1, $nota2) {
    $media = ($nota1 + $nota2) / 2;

    echo "Média: $media\n";

    if ($media >= 7) {
        echo "Situação: Aprovado\n";
    } else {
        echo "Situação: Reprovado\n";
    }
}

echo "Digite a primeira nota: ";
$nota1 = (float) readline();

echo "Digite a segunda nota: ";
$nota2 = (float) readline();

calcularMediaAluno($nota1, $nota2);

// Explicação: O procedimento calcularMediaAluno soma as duas notas recebidas e divide por 2
// para obter a média. Em seguida, usa um if para verificar: se a média for maior ou igual
// a 7, imprime "Aprovado"; caso contrário, imprime "Reprovado".

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
Descritivo:   Lê duas notas, calcula a média e exibe na tela se o aluno foi aprovado ou reprovado por meio de um procedimento.
*******************************************************************************/
?>
