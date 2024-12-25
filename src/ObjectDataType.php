<?php
namespace Mnurfaadil\Canonical;

// sample class
class Anggota {
    public $jurusan;
    public string $kampus;

    public function __construct($jurusan = "TI", $kampus = "Unindra") {
        $this->jurusan = $jurusan;
        $this->kampus = $kampus;
    }
}

class ObjectDataType {

    // skalar
    protected int $nomor = 1;
    protected float $desimal = 0.98;
    protected string $teks = "tipe data string";
    protected bool $tanda = true; // boolean
    
    // komposit, campuran
    // array numerik, diakses pake no index
    protected array $daftarAnggota = ["A", "B", "C"];
    // array assosiatif, diakses pake no index atau "kata kunci"
    protected array $ciriAnggotaA = ["jurusan" => "TI", "kampus" => "Unindra"];
    // protected object $ciriAnggotaB = new Anggota("TI", "Unindra");
    protected object $ciriAnggotaB;

    public function __construct() {
        $this->ciriAnggotaB = new Anggota("TI", "Unindra");
    }

    public function cetakSemua()
    {
        var_dump($this->nomor);
        var_dump($this->desimal);
        var_dump($this->teks);
        var_dump($this->tanda);
        var_dump($this->daftarAnggota);
        var_dump($this->ciriAnggotaA);
        var_dump($this->ciriAnggotaB);
    }

}