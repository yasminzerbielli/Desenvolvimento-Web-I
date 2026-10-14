<?php

class Conta {
    private float $saldo = 0;

    public function getSaldo(): float {
        return $this->saldo;
    }

    public function depositar(float $valor): void {
        $this->saldo += $valor;
    }

    public function sacar(float $valor): void {
        if ($valor > $this->saldo) {
            throw new Exception("Saldo insuficiente");
        }
        $this->saldo -= $valor;
    }
}
