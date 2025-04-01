<?php

function fibonacci($n){
    if($n < 0){
        exit;
    } elseif($n <= 2){
        return 1;
    } else {
        return fibonacci($n-1) + fibonacci($n-2);
    }
}

echo fibonacci(10 ) . PHP_EOL ; // 55
