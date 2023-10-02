<?php
require_once 'abstract.php';

class Persegipanjang extends Bentuk2D
{
    public $panjang;
    public $lebar;

    public function __construct($panjang, $lebar)
    {
        $this->panjang = $panjang;
        $this->lebar = $lebar;
    }

    public function namaBidang()
    {
        return "Persegi Panjang";
    }

    public function keterangan()
    {
        return " Panjang = 4 <br> Lebar = 2";
    }

    public function luasBidang()
    {
        return $this->panjang * $this->lebar;
    }

    public function kelilingBidang()
    {
        return 2 * ($this->panjang + $this->lebar);
    }
}
