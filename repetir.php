<?php
echo'<br><br><br><br><br>';

$palavra = "kendrick";

for ($i = 1; $i <= 4; $i++) {
    for ($j = 1; $j <= $i; $j++) {
        echo strtoupper($palavra). " ";
    }
    
    echo "<br>";
}
?>