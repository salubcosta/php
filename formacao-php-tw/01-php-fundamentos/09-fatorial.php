<?php

function fatorial($n){
    if($n==1){
        return 1;
    }
    return fatorial($n-1) * ($n);
}

echo fatorial(5);