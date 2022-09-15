<?php

    class Produk{//komik dan game
        public  $judul = "judul", 
                $penulis = "penulis",
                $penerbit = "penerbit",
                $harga = 0;

        public function __construct($judul, $penulis, $penerbit, $harga){
            $this->judul = $judul;
            $this->penulis = $penulis;
            $this->penerbit = $penerbit;
            $this->harga = $harga;
            
        }

        public function getLabel(){
            return "$this->penulis, $this->penerbit";
        }
    
    }

    class CetakInfoProduk{
        public function cetak(Produk $produk){
            $string = "{$produk->judul} | {$produk->getLabel()} (RP. $produk->harga)";
            return $string;
        }
    }
    $produk1 = new Produk("Naruto", "masasi Kishimoto", "Shonen Jump", 30000);
    $produk2 = new Produk("Uncharted", "Neil Druckman", "Sony Computer", 250000);
    echo "Komik : ".$produk1->getLabel();
    echo "<br>";
    echo "Game : ".$produk2->getLabel();
    echo "<br>";

    $infoProduk1 = new CetakInfoProduk();
    echo $infoProduk1->cetak($produk1);