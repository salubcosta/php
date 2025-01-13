<?php

class Conta{
    private $titular;
    private $saldo;

    public function __construct(String $titular) {
        $this->titular = $titular;
    }

    public function getTitular(){
        return $this->titular;
    }

    public function setTitular(String $titular){
        $this->titular = $titular;
    }

    public function getSaldo(): float {
        return $this->saldo;
    }

    public function depositar(float $valor){
        $this->saldo += $valor;
        return "Depósito realizado!";
    }

    public function sacar(float $valor){
        if ($this->getSaldo() < $valor){
            return "Saldo insuficiente!";
        } else {
            $this->saldo -= $valor;
            return "Saque efetuado!";
        }
    }
}