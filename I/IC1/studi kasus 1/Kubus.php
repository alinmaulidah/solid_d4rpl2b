<?php
include_once "Shape2Dimension.php";
include_once "Shape3Dimension.php";

interface Kubus extends Shape2Dimension,Shape3Dimension{
    public function calculateArea(): void 
    {
        $sisi = 5;
        $luas = 6 * $sisi * $sisi;
        echo "Luas: " . $luas . "\n";
    }
    public function calculateVolume(): void{
        $sisi = 5;
        $volume = $sisi * $sisi * $sisi;
        echo "Volume: " . $volume . "\n";
    }
}
