<?php
$array1 = array(
    0 => array(
        0 => "Steve",
        1 =>31,
        2 => "solteiro"),
    1 => array(
        0 =>"ciclano",
        1 =>12,
        2 => "solteiro"),
    2 => array(
        0 =>"beltrano",
        1 =>81,
        2 => "solteiro"),
    3 => array(
        0 =>"fulano",
        1 =>34,
        2 => "solteiro"),
    );

$array2 = array(
    0 => array(
        0 =>"Artur",
        1 =>37,
        2 => "solteiro"
    ),
    1 => array(
        0 =>"bob",
        1 =>39,
        2 => "solteiro"
    ),
    2 => array(
        0 =>"Eva",
        1 =>30,
        2 => "solteiro"),
    3 => array(
        0 =>"fulano",
        1 =>34,
        2 => "solteiro")
);



$arrNaoRepeteEm2 = function($arr1, $arr2){
    $arr = array();
    for($i = 0; $i < count($arr1); $i++){
        $match = false;
        for($x = 0; $x < count($arr2); $x++){
            $match = $arr1[$i] == $arr2[$x];
        }
        if(!$match){
            array_push($arr, $arr1[$i]);
        }
    }
    return $arr;
};

print_r($arrNaoRepeteEm2($array1, $array2));

// $numeros = [10, 20, 25, 91, 18, 41];
// $filtrados = array_filter($numeros, function($item){
//     return $item > 20; #retornar o item que é maior que 20.
// });