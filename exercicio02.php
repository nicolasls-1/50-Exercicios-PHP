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
Descritivo:   Exibe na tela apenas os números pares no intervalo de 0 a 20.
*******************************************************************************/
<?php
$num = 0;
for($i=0; $i<=20;$i++){
  if ($i % 2==0){
    echo "num:" .$i ."" . "\n";
  }
  

}
// Explicação: O código percorre de 0 a 20 com um 'for' e utiliza uma condição 'if' com o operador módulo (%) para filtrar e exibir apenas os números pares.[cite: 2]
?>