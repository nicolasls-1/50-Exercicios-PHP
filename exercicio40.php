<?php

// Procedimento que recebe um array associativo de um carro e imprime seus dados
function mostrarCarro($carro) {
    echo "===== Dados do Carro =====\n";
    echo "Marca:  " . $carro["marca"] . "\n";
    echo "Modelo: " . $carro["modelo"] . "\n";
    echo "Ano:    " . $carro["ano"] . "\n";
}

echo "Digite a marca do carro: ";
$marca = trim(readline());

echo "Digite o modelo do carro: ";
$modelo = trim(readline());

echo "Digite o ano do carro: ";
$ano = (int) readline();

// Montando o array associativo com os dados digitados
$carro = [
    "marca" => $marca,
    "modelo" => $modelo,
    "ano" => $ano
];

mostrarCarro($carro);

// Explicação: Os dados do carro são lidos do usuário e guardados em um array associativo
// com as chaves marca, modelo e ano. Esse array é enviado ao procedimento mostrarCarro,
// que acessa cada chave e imprime os valores na tela.

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
Descritivo:   Lê os dados de um carro, guarda em um array associativo e exibe na tela por meio de um procedimento.
*******************************************************************************/
?>
