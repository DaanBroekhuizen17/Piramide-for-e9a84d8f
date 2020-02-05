<?php

    echo ("hoeveel stapels wil je hebben?");
    $aantal = readline($prompt);




for ($i = 1; $i <= $aantal; $i++) {
    for ($j = 1; $j <= $i; $j++) {
        echo " * ";
    }
    echo (PHP_EOL);
}
?>