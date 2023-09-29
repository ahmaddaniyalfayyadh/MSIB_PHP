<?php

class KonversiSuhu
{
    public $satuanSuhuAwal;
    public $besaranSuhu;
    public $satuanSuhuTujuan;

    public function __construct($satuanSuhuAwal, $besaranSuhu, $satuanSuhuTujuan)
    {
        $this->satuanSuhuAwal = $satuanSuhuAwal;
        $this->besaranSuhu = $besaranSuhu;
        $this->satuanSuhuTujuan = $satuanSuhuTujuan;
    }

    public function CelciusToFahrenheit()
    {
        return ($this->besaranSuhu * 9 / 5) + 32;
    }

    public function FahrenheitToCelcius()
    {
        return ($this->besaranSuhu - 32) * 5 / 9;
    }

    public function CelciusToRheamur()
    {
        return $this->besaranSuhu * 4 / 5;
    }

    public function RheamurToCelcius()
    {
        return $this->besaranSuhu * 5 / 4;
    }

    public function konversiSuhu()
    {
        if ($this->satuanSuhuAwal == 'Celsius' && $this->satuanSuhuTujuan == 'Fahrenheit') {
            return $this->CelciusToFahrenheit();
        } elseif ($this->satuanSuhuAwal == 'Fahrenheit' && $this->satuanSuhuTujuan == 'Celsius') {
            return $this->FahrenheitToCelcius();
        } elseif ($this->satuanSuhuAwal == 'Celsius' && $this->satuanSuhuTujuan == 'Rheamur') {
            return $this->CelciusToRheamur();
        } elseif ($this->satuanSuhuAwal == 'Rheamur' && $this->satuanSuhuTujuan == 'Celsius') {
            return $this->RheamurToCelcius();
        }
    }

    public function cetak()
    {
        $hasilKonversi = $this->konversiSuhu();
        echo "<tr><td>{$this->satuanSuhuAwal}</td><td>{$this->besaranSuhu}</td><td>{$this->satuanSuhuTujuan}</td><td>{$hasilKonversi}</td></tr>";
    }
}
$dataKonversiSuhu1 = new KonversiSuhu('Celsius', 30, 'Fahrenheit');
$dataKonversiSuhu2 = new KonversiSuhu('Fahrenheit', 100, 'Celsius');
$dataKonversiSuhu3 = new KonversiSuhu('Celsius', 25, 'Rheamur');
$dataKonversiSuhu4 = new KonversiSuhu('Rheamur', 20, 'Celsius');

echo "<table border='1'><tr><th>Satuan Awal</th><th>Besaran Suhu</th><th>Satuan Tujuan</th><th>Hasil Konversi</th></tr>";
$dataKonversiSuhu1->cetak();
$dataKonversiSuhu2->cetak();
$dataKonversiSuhu3->cetak();
$dataKonversiSuhu4->cetak();
echo "</table>";
