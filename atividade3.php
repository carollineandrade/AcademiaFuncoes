<?php
/* 3- Crie um script em PHP crie dois vetores de 10 posições preenchidos com valores aleatórios.
Faça a soma dos elementos de mesmo índice, colocando o resultado em um terceiro vetor.
Imprima os três vetores, um após o outro. Obs: Utilize um for */

$vetor1 =  array(2, 10, 4, 8, 11, 3, 8, 9, 14, 1);
$vetor2 =  array(5, 7, 9, 11, 15, 16, 9, 0, 11, 6);



for ($i = 0; $i < 10; $i++) {
    if ($vetorResultado[$i] = $vetor1[$i] + $vetor2[$i]) {
        $vetor3[$i] = $vetorResultado[$i];
    }
    if ($vetor1[$i]) {
    }
    if ($vetor2[$i]) {
    }
}

echo "Vetor 1: " . implode(" - ", $vetor1) . "<br>";
echo "Vetor 2: " . implode(" - ", $vetor2) . "<br>";
echo "Vetor 3: " . implode(" - ", $vetor3) . "<br>";
