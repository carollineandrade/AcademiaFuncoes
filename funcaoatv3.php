<?php 
/* 3- Crie uma função em PHP que calcule e imprima o salário reajustado de um funcionário
de acordo com a seguinte regra:
• salários até R$ 3.000,00 , reajuste de 50%
• salários de R$ 3.000,00 ou mais, reajuste de 30 */ 

function salario_ajustado ($salario){

    $reajuste1 = 0.50;
    $reajuste2 = 0.30;

  if ($salario <= 2999) {
    $salarioreajuste = ($salario * $reajuste1) + $salario;
 
  } 
    else {
        $salarioreajuste = ($salario * $reajuste2) + $salario;

  }
       return $salarioreajuste;
 }
  
 $salarioReajustado1 = salario_ajustado(2999); 
  echo "Salario de R$2999 é $salarioReajustado1"; 

  echo "<br>";

  $salarioReajustado2 = salario_ajustado(3000); 
  echo "Salario de R$3000 é $salarioReajustado2";

  echo "<br>";  

  $salarioReajustado2 = salario_ajustado(3500); 
  echo "Salario de R$3500 é $salarioReajustado2";
  