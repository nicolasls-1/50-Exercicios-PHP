/******************************************************************************
Curso: Tecnologia em Análise e Desenvolvimento de Sistemas
Disciplina: Linguagem e Técnicas de Programação
Professor: Flores
Turma: ADS2B
Componentes:
 26006629-2  - Nicolas da Silva Lima
 26011605-2 - Bernardo Rodrigues
 26013884-2 - Gabriel Rafhael Cavalcante
 26011899-2  - Gabriel Ruiz
 26009508-2 - Matheus Eduardo
Data: 01 de novembro de 2026
Descritivo:   Lê um número inteiro e calcula a quantidade total de dígitos presentes nele.
*******************************************************************************/

<?php
$num = (int) readline("Digite um número inteiro: ");

$num = abs($num);
$contador = 0;

if ($num == 0) {
    $contador = 1;
}

while ($num > 0) {
    $num = (int) ($num / 10);
    $contador++;
}

echo "Quantidade de dígitos: " . $contador;
// Explicação: O código processa o número inteiro utilizando o valor absoluto e um laço 'while' que divide o número por 10 sucessivamente, contando quantas vezes a divisão é realizada para determinar o número de dígitos.[cite: 10]
?>