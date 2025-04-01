<?php

function subsequente(){
    for($q=0; $q < 10; $q++){
        echo $q."<br/>";
    }
    echo "<hr>";
}

subsequente();
subsequente();
subsequente();

function somar($a, $b){
    return $a+$b;
}
echo somar(3, 7);