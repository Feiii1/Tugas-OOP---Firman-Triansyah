<?php

// Class Induk (Parent)
class Kendaraan 
{
    public $merk;
    public function __construct($merk)
    {
        $this->merk = $merk;
    }
    public function berjalan()
    {
        return $this->merk . " sedang melaju...";
    }
}
// Class anak (Child) mewarisi class kendaraan
class Mobil extends Kendaraan
{
    public $jumlahPintu = 4;
    public function bukaPintu()
{
    return "Membuka " . $this->jumlahPintu . " pintu mobil" . $this->merk;
    }
}

$mobilESEMKA = new Mobil("Lamporgini");
echo $mobilESEMKA->berjalan();// Menggunakan method warisan dari Parent
echo "<br>";
echo $mobilESEMKA->bukaPintu();// Menggunakan method milik child sendiri
