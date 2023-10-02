<?php
require_once 'abstract.php';

class Segitiga extends Bentuk2D
{
    public $alas;
    public $tinggi;

    public function __construct($alas, $tinggi)
    {
        $this->alas = $alas;
        $this->tinggi = $tinggi;
    }

    public function namaBidang()
    {
        return "Segitiga";
    }

    public function keterangan()
    {
        return " Alas = 2 <br> Tinggi = 6 ";
    }

    public function luasBidang()
    {
        return 0.5 * $this->alas * $this->tinggi;
    }

    public function kelilingBidang()
    {
        //    menggunkan rumus pytagoras
        $sisimiring = sqrt(pow($this->alas, 2) + pow($this->tinggi, 2));
        return $this->alas + $this->tinggi + $sisimiring;
    }
}
