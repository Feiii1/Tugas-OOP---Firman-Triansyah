<?php
class Siswa
{
    // Property private, tidak bisa diubah langsung dari  luar class
    private $nama;
    private $nilaiPBO;

    // Method public untuk mengisi data (setter)
    public function setData($namaBaru, $nilaiBaru){
    $this->nama = $namaBaru;
// VAlidasi: NIlai tidak boleh lebih dari 100
        if ($nilaiBaru <= 100) {
            $this->nilaiPBO = $nilaiBaru;
        } else {
            $this->nilaiPBO = 100;
        }
    }
// Method public untuk mengambil data (getter)

    public function getInfo()
    {

        return "Siswa: " . $this->nama . ", Nilai PBO: " . $this->nilaiPBO;
    }
}

$siswa1 = new Siswa();
// $siswa1-> nilaiPBO = 150; // INI AKAN ERROR karena private! 
$siswa1->setData("Niga", 95);
echo $siswa1->getInfo();
?>