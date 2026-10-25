<?php

// Procedimento que recebe um nome e imprime uma saudação personalizada
function saudacaoUsuario($nome) {
    echo "Olá, $nome!\n";
}

echo "Digite seu nome: ";
$nome = trim(readline());

saudacaoUsuario($nome);

// Explicação: O programa lê o nome digitado pelo usuário com readline() e envia esse valor
// como parâmetro para o procedimento saudacaoUsuario, que imprime "Olá, [nome]!" na tela.
// Como é um procedimento, ele não retorna valor, apenas exibe o resultado.

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
Descritivo:   Lê o nome do usuário e exibe na tela uma saudação personalizada por meio de um procedimento.
*******************************************************************************/
?>
