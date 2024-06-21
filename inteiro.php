<?php
echo"<br><br><br><br><br><br>";
$vetor = [12, 34, 56, 78, 90, 23, 45, 67, 89, 10, 11, 13, 15, 17, 19, 20, 21, 22, 24, 25];

$max = max($vetor);
$min = min($vetor);


$pares = 0;
$soma = 0;


foreach ($vetor as $num) {
    $soma += $num;
    if ($num % 2 == 0) $pares++;
}


$media = $soma / count($vetor);
$percentual_pares = ($pares / count($vetor)) * 100;

echo "O maior número no vetor é: $max<br>";
echo "O menor número no vetor é: $min<br>";
echo "O percentual de pares: $percentual_pares%<br>";
echo "A média dos números do vetor é: $media<br>";
?>