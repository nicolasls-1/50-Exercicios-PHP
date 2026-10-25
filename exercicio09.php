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
Descritivo:   Lê múltiplos números informados pelo usuário e exibe a soma total quando digitado o número 0.
*******************************************************************************/
<?php
$soma = 0;
$num = -1;

while ($num != 0) {
    $num = (int) readline("Digite um número (0 para parar): ");
    $soma = $soma + $num;
}

echo "A soma dos números é: " . $soma;
// Explicação: O código implementa um acumulador dentro de um laço 'while' que soma continuamente os valores digitados até que o usuário insira o número 0 para encerrar.[cite: 9]
?>