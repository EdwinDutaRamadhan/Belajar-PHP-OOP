<?php
class Komik extends Produk{
    public $halaman;

    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $halaman = 0){

        parent::__construct($judul, $penulis, $penerbit, $harga);
        $this->halaman = $halaman;
        
    }
    
    public function getInfoProduk(){
        $str = "Komik : ".$this->getInfo()." - {$this->halaman} Halaman";
         return $str;
    }
}