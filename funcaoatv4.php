<?php
/* 4- Crie uma função em PHP que receba a altura e o peso de uma pessoa, calcule seu IMC de acordo com a
fórmula abaixo:
IMC = Peso dividido pela altura ao quadrado ( peso ÷ (altura²)). */


function informacao($altura, $peso)
{
   $imc = $peso / ($altura * $altura);

   if ($imc < 18.5) {
      return "magreza";
   } else if ($imc >= 18.5 && $imc <= 24.9) {
      return "normal";
   } else if ($imc >= 25 && $imc <= 30) {
      return "sobrepeso";
   } else {
      return "obeso";
   }
}

$altura = 1.67;
$peso = 69;

$imc = informacao($altura, $peso);
echo "Altura: $altura <br>";
echo "Peso: $peso <br>";
echo "IMC : $imc <br>";



