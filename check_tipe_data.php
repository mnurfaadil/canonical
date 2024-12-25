<?php

require_once 'vendor/autoload.php';

use \Mnurfaadil\Canonical\ObjectDataType;

$class = new ObjectDataType();
$class->cetakSemua();


int $nomor = 1;
float $desimal = 0.98;
string $teks = "tipe data string";
bool $tanda = true; // boolean

// komposit, campuran
// array numerik, diakses pake no index
array $daftarAnggota = ["A", "B", "C"];
// array assosiatif, diakses pake no index atau "kata kunci"
array $ciriAnggotaA = ["jurusan" => "TI", "kampus" => "Unindra"];

// sample class
class Anggota {
    public $jurusan;
    public string $kampus;

    public function __construct($jurusan = "TI", $kampus = "Unindra") {
        $this->jurusan = $jurusan;
        $this->kampus = $kampus;
    }
}

object $anggota = new Anggota();

var_dump($nomor);
var_dump($desimal);
var_dump($teks);
var_dump($tanda);
var_dump($daftarAnggota);
var_dump($ciriAnggotaA);
var_dump($anggota);