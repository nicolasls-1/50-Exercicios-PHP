<?php

// Procedimento que recebe nome, idade e cidade e imprime os dados organizados
function mostrarDados($nome, $idade, $cidade) {
    echo "===== Dados Pessoais =====\n";
    echo "Nome:   $nome\n";
    echo "Idade:  $idade anos\n";
    echo "Cidade: $cidade\n";
}

echo "Digite seu nome: ";
$nome = trim(readline());

echo "Digite sua idade: ";
$idade = (int) readline();

echo "Digite sua cidade: ";
$cidade = trim(readline());

mostrarDados($nome, $idade, $cidade);

// Explicação: O programa lê três informações do usuário (nome, idade e cidade)
// e as envia como parâmetros ao procedimento mostrarDados, que imprime
// cada dado em uma linha, de forma organizada.

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
Descritivo:   Lê nome, idade e cidade e exibe os dados de forma organizada na tela por meio de um procedimento.
*******************************************************************************/
?>
