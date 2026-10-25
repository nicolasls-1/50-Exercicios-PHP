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
Descritivo:   Elabore uma função converterParaMaiusculas que receba uma string e a retorne em letras maiúsculas.
*******************************************************************************/

function converterParaMaiusculas($texto) {
    $textoMaiusculo = strtoupper($texto);
    return $textoMaiusculo;
}

$frase = "estou aprendendo php";

$resultado = converterParaMaiusculas($frase);

echo "Texto original: $frase\n";
echo "Texto em maiúsculas: $resultado\n";

// Explicação: A função converterParaMaiusculas recebe um texto e usa a função strtoupper() do PHP para deixar todas as letras maiúsculas, retornando o texto convertido.
?>
