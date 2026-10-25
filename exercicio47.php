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
Descritivo:   Crie uma função contarVogais que receba uma string e retorne o número de vogais.
*******************************************************************************/

function contarVogais($texto) {
    $texto = strtolower($texto);
    $contador = 0;

    for ($i = 0; $i < strlen($texto); $i++) {
        $letra = $texto[$i];

        if ($letra == "a" || $letra == "e" || $letra == "i" || $letra == "o" || $letra == "u") {
            $contador++;
        }
    }

    return $contador;
}

$frase = "Programacao em PHP";

$total = contarVogais($frase);

echo "A frase \"$frase\" tem $total vogais\n";

// Explicação: O texto é convertido para minúsculo e um laço 'for' percorre cada letra; se a letra for a, e, i, o ou u o contador aumenta em 1, e no final a função retorna o total de vogais.
?>
