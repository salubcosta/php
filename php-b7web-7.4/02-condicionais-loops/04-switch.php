<?php

function getCustomDayOfWeek(){
    // get week: starting in 0 to sunday 
    switch(date("w")):
        case 0:
            return "Hoje é Domingo";
        case 1:
            return "Hoje é Segunda-feira";
        case 2:
            return "Hoje é Terça-feira";
        case 3:
            return "Hoje é Quarta-feira";
        case 4:
            return "Hoje é Quinta-feira";
        case 5:
            return "Hoje é Sexta-feira";
        case 6:
            return "Hoje é Sábado";
        default:
            return "Inválido!";
    endswitch;
}

echo getCustomDayOfWeek();
