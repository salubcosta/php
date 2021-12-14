<?php
/**
 * Desafio proposto B7Web
 * 
 * Documentação: https://www.php.net/manual/pt_BR/function.date
 */

function getDateAndDayOfWeek(string $date):string {
    return date('d/m/Y', strtotime($date)).' '.getDay(date('N', strtotime($date)));
}

function getDay(int $day){
    $dayOfWeek = ['Segunda-Feira','Terça-Feira','Quarta-Feira','Quinta-Feira','Sexta-Feira','Sábado','Domingo'];
    return $dayOfWeek[$day-1];
}

echo getDateAndDayOfWeek('2017-08-18'); //input date format (year-month-day)