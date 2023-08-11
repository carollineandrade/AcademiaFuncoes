<?php 
/* 4- Seu salário atual é de R$5.000,00. O do seu colega é de R$2.500,00. Suponha que você
tenha 10% de aumento todo ano e seu colega 20%. Crie um script que calcula em quantos anos 
seu colega irá passar a ganhar mais que você. */
$salatual = 5000;
$salcolega = 2500;

$aumentoatual = 0.10;
$aumentocolega = 0.20;
$anos = 0;

while ($salatual >= $salcolega){
    $salatual = ($salatual * $aumentoatual) + $salatual;
    $salcolega = ($salcolega * $aumentocolega) + $salcolega;
    $anos++;
}

  echo "Em $anos anos o salario do colega ira ultrapassar o seu";

