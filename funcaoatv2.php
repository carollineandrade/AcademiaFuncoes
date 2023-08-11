<?php 
/* 2- Crie uma função que receba 2 notas ($n1 e $n2) de um aluno. Essa função deve 
retornar um booleano indicando se o aluno foi aprovado. Para ser aprovado, a soma das 
notas deve ser igual ou superior a 19 e ambas devem ser superiores a 7. */


function nota_aluno ($n1, $n2){
    $soma = $n1 + $n2;
  if ($soma >= 19) {
 
     echo "Aprovado"; 
  } 
  else{
    echo "Reprovado";
  }
       return true;
 }

 $nota1 = nota_aluno(10,8);

  echo "<br>";

 $nota2 = nota_aluno(11,9);