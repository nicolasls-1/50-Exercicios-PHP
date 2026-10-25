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
Descritivo:   Crie uma função inverterString que receba uma string e a retorne invertida, sem usar a função strrev().
*******************************************************************************/

function inverterString($texto) {
    $invertida = "";

    for ($i = strlen($texto) - 1; $i >= 0; $i--) {
        $invertida = $invertida . $texto[$i];
    }

    return $invertida;
}

$palavra = "Programacao";

$resultado = inverterString($palavra);

echo "Original: $palavra\n";
echo "Invertida: $resultado\n";

// Explicação: Um laço 'for' começa na última posição do texto (strlen($texto) - 1) e vai diminuindo até 0, juntando cada letra numa nova variável, o que deixa o texto invertido sem usar strrev().
?>
