<?php
/******************************************************************************
Curso: Tecnologia em Análise e Desenvolvimento de Sistemas
Disciplina: Linguagem e Técnicas de Programação
Professor: Flores
Turma: ADS2B
Componentes:
 26006629-2  - Nicolas da Silva Lima
 26011605-2 - Bernardo Rodrigues
 26013884-2 - Gabriel Rafhael Cavalcante
 26011606-2 - Gabriel Ruiz
 26009508-2 - Matheus Eduardo
Data: 01 de novembro de 2026
Descritivo:   : Crie um menu de opções (1. Iniciar, 2. Parar, 3. Sair) e use do-while para mostrar o menu até que o usuário escolha "Sair".

*******************************************************************************/
$inicio = 1;
$parar = 2;
$sair = 3;

do {
    
    echo "$inicio. Iniciar\n";
    echo "$parar. Parar\n";
    echo "$sair. Sair\n";
    echo "Escolha uma opção: ";

    $opcao = (int) fgets(STDIN);

    if ($opcao === $inicio) {
        echo "-> Executando: Sistema Iniciado!\n";
    } elseif ($opcao === $parar) {
        echo "-> Executando: Sistema Parado!\n";
    } elseif ($opcao === $sair) {
        echo "-> Saindo do programa... Até logo!\n";
    } else {
        echo "-> Opção inválida! Tente novamente.\n";
    }

} while ($opcao !== $sair);
// O sistema informa as variaveis e o usuario escolhe até sair
?>