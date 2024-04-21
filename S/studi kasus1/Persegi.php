<?php

class Persegi{
    private int $sisi;

    public function persegi(int $sisi): int{
        return $sisi * $sisi;
    }
    public function getSisi(): int{
        return $this->sisi;
    }
    
}

include_once "Persegi.php";

class PenghitungPersegi{
    public function hiungluasPersegi(Persegi $persegi): int {
        return $persegi->sisi * (100 * $persegi->sisi);
    }
}

