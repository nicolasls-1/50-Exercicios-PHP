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
Descritivo:   Jogo simples de adivinhação que solicita números ao usuário até que ele acerte o número secreto (7).
*******************************************************************************/
<?php
$numero = 7;
$tentativa = 0;

while ($tentativa != $numero) {
    $tentativa = (int) readline("Adivinhe o número: ");
}

echo "Parabéns! Você acertou!";
// Explicação: O código usa um laço 'while' para requisitar repetidamente entradas do usuário via 'readline' até que o número inserido corresponda ao valor alvo (7).[cite: 7]
?>