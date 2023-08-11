<?php 
/*1- Crie uma função que receba 2 valores inteiros como argumentos e retorne a sua soma. 
Se o valor da soma for negativo a função deverá o valor 0. */

function soma_resultado ($numA, $numB){
   $soma = $numA + $numB;
 if ($soma < 0) {

    return 0; 
 } 
      return $soma;
}

  

  $resultado1 = soma_resultado(5, 10);
  echo "resultado positov: $resultado1";
  echo "<br>";
  $resultado2 = soma_resultado(-10, 0 );
  echo "resultado negativo: $resultado2";
  echo "<br>";
 


