<?php 
/* 2- Crie um script em PHP que crie um vetor de 5 elementos inteiros com valores aleatórios,
entre 0 e 10. Encontre e mostre o menor elemento e sua posição no vetor. */ 

$vetor = array(7, 8, 6, 2, 9);


$menorelemento = $vetor[0];
$posicãoelemento = 0;

for ($i = 0; $i < 5; $i++) {
    if ($vetor[$i] < $menorelemento) {
        $menorelemento = $vetor[$i];
        $posicaoelemento = $i + 1;
    }
}
  
echo "menor elemento ", $menorelemento . "<br>";
echo "posição elemento ", $posicaoelemento;