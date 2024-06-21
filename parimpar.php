<?php
echo'<br><br>';
$vetor = [100, 23, 53, 48, 51, 60, 7, 8, 9, 10, 11, 182, 133, 140, 115];

foreach ($vetor as $num) {
    if ($num % 2 == 0) {
        echo "O $num é par.<br><br>";
    } else {
        echo "O $num é ímpar.<br><br>";
    }
}
?>