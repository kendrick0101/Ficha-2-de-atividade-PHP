<?php

$count = 111;

while (true) {
    echo "Se o valor for 0, sessão será encerrada. <br><br> ";
    
    $num = (int) readline();

    if ($count == 0) {
        echo 'Você saiu!';
        break;
    }else{ ($count >= 100 && $count <= 200);
        echo "<br><br> Você digitou o número $count entre 100 e 200.";;
        break;
    }
}

?>