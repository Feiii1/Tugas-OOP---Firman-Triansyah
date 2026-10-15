<?php

// Class Parent
class Rental {
    // Property private (Enkapsulasi)
    private $hargaSewaPerHari;

    // Method public untuk mengisi data (setter)
    public function setHargaSewaPerhari($harga) {
        $this->hargaSewaPerHari = $harga;
    }

    // Method public untuk mengambil data (getter)
    public function getHargaSewaPerhari() {
        return $this->hargaSewaPerHari;
    }

    // Method hitung diskon
    public function hitungDiskon($lamaSewa) {
        return 0;
    }
}

// Class Child

// Class RentalMobil
class RentalMobil extends Rental {
    // Method Override
    public function hitungDiskon($lamaSewa) {
        $total = $this->getHargaSewaPerhari() * $lamaSewa;

        if ($lamaSewa > 3) {
            return $total * 0.10;
        }
        return 0;
    }
}

// RentalMotor
class RentalMotor extends Rental {
    // Method Override
    public function hitungDiskon($lamaSewa) {
        $total = $this->getHargaSewaPerhari() * $lamaSewa;

        if ($lamaSewa > 3) {
            return $total * 0.05;
        }
        return 0;
    }
}

// Mobil
$mobil = new RentalMobil();
$mobil->setHargaSewaPerHari(500000);

$lamaSewaMobil = 5;
$totalMobil = $mobil->getHargaSewaPerHari() * $lamaSewaMobil;
$diskonMobil = $mobil->hitungDiskon($lamaSewaMobil);
$bayarMobil = $totalMobil - $diskonMobil;

// Motor
$motor = new RentalMotor();
$motor->setHargaSewaPerHari(200000);

$lamaSewaMotor = 5;
$totalMotor = $motor->getHargaSewaPerHari() * $lamaSewaMotor;
$diskonMotor = $motor->hitungDiskon($lamaSewaMotor);
$bayarMotor = $totalMotor - $diskonMotor;

// Menampilkan hasil
echo "<h3>Rental Mobil</h3>";
echo "Harga sewa per hari: Rp" .
    number_format($mobil->getHargaSewaPerHari(), 0, ',', '.') . "<br>";
echo "Lama sewa: $lamaSewaMobil hari<br>";
echo "Total harga: Rp" .
    number_format($totalMobil, 0, ',', '.') . "<br>";
echo "Diskon: Rp" .
    number_format($diskonMobil, 0, ',', '.') . "<br>";
echo "Total bayar: Rp" .
    number_format($bayarMobil, 0, ',', '.') . "<br>";

// Output Rental Motor
echo "<h3>Rental Motor</h3>";
echo "Harga sewa per hari: Rp" .
    number_format($motor->getHargaSewaPerHari(), 0, ',', '.') . "<br>";
echo "Lama sewa: $lamaSewaMotor hari<br>";
echo "Total harga: Rp" .
    number_format($totalMotor, 0, ',', '.') . "<br>";
echo "Diskon: Rp" .
    number_format($diskonMotor, 0, ',', '.') . "<br>";
echo "Total bayar: Rp" .
    number_format($bayarMotor, 0, ',', '.') . "<br>";
?>