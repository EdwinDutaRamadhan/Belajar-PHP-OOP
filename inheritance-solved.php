<?php

    class Produk{//komik dan game
        public  $judul, 
                $penulis,
                $penerbit,
                $harga,
                $halaman,
                $durasi;

        public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", 
            $harga = 0, $halaman = 0, $durasi = 0){
            $this->judul = $judul;
            $this->penulis = $penulis;
            $this->penerbit = $penerbit;
            $this->harga = $harga;
            $this->halaman = $halaman;
            $this->durasi = $durasi;
            
        }

        public function getLabel(){
            return "$this->penulis, $this->penerbit";
        }
        public function getInfoProduk(){
            $str = "{$this->tipe} : {$this->judul} | {$this->penulis}, {$this->penerbit} (RP. {$this->harga})";
            return $str;
        }
    }

    class Komik extends Produk{
        public function getInfoProduk(){
            $str = "Komik : {$this->judul} | {$this->penulis}, {$this->penerbit} (RP. {$this->harga})
             - {$this->halaman} Halaman";
             return $str;
        }
    }
    class Game extends Produk{
        public function getInfoProduk(){
            $str = "Game : {$this->judul} | {$this->penulis}, {$this->penerbit} (RP. {$this->harga})
             ~ {$this->durasi} Jam";
             return $str;
        }
    }
    
    class CetakInfoProduk{
        public function cetak(Produk $produk){
            $string = "{$produk->judul} | {$produk->getLabel()} (RP. $produk->harga)";
            return $string;
        }
    }
    $produk1 = new Komik("Naruto", "masasi Kishimoto", "Shonen Jump", 30000, 100, 0,"Komik");
    $produk2 = new Game("Uncharted", "Neil Druckman", "Sony Computer", 250000, 0, 50, "Game");
    
    echo $produk1->getInfoProduk();
    echo "<br>";
    echo $produk2->getInfoProduk();
    //Komik : masasi Kishimoto, Shonen Jump
    // Game : Neil Druckman, Sony Computer
    // Naruto | masasi Kishimoto, Shonen Jump (RP. 30000)

    // Komik : Naruto | Masashi Kishimoto, Shonen Jump (RP. 30000) - 100 Halaman.
    // Game : Uncharted | Neil Druckman,Sony Computer (RP. 250000) - 50 Jam.
    