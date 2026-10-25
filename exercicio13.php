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
 26011899-2 - Gabriel Ruiz
 26009508-2 - Matheus Eduardo
Data: 01 de novembro de 2026
Descritivo:   Faça um programa que solicite uma senha ao usuário. O programa só deve continuar quando a senha correta ("1234") for digitada.
*******************************************************************************/
$senha_correta = "1234";
$tentativa = "";

do {
    $tentativa = rtrim(fgets(STDIN), "\r\n");

    if ($tentativa != $senha_correta) {
        echo "Senha incorreta. Tente novamente.\n"; 
    }

} while ($tentativa != $senha_correta); 

echo "Acesso permitido!\n";

// O sistema pede a senha e somente permite se a senha estiver correta
?>