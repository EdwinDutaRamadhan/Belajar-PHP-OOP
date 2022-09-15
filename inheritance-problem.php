<?php

    class Produk{//komik dan game
        public  $judul, 
                $penulis,
                $penerbit,
                $harga,
                $halaman,
                $durasi,
                $tipe;

        public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", 
            $harga = 0, $halaman = 0, $durasi = 0, $tipe = "tipe"){
            $this->judul = $judul;
            $this->penulis = $penulis;
            $this->penerbit = $penerbit;
            $this->harga = $harga;
            $this->halaman = $halaman;
            $this->durasi = $durasi;
            $this->tipe = $tipe;
            
        }

        public function getLabel(){
            return "$this->penulis, $this->penerbit";
        }
        public function getInfolengkap(){
                // Komik : Naruto | Masashi Kishimoto, Shonen Jump (RP. 30000) - 100 Halaman.
            $str = "{$this->tipe} : {$this->judul} | {$this->penulis}, {$this->penerbit} (RP. {$this->harga})";
            if($this->tipe == "Komik"){
                $str .= " - {$this->halaman} Halaman";
            }else{
                $str .= " - {$this->durasi} Jam";
            }
            return $str;
        }
    }

    class CetakInfoProduk{
        public function cetak(Produk $produk){
            $string = "{$produk->judul} | {$produk->getLabel()} (RP. $produk->harga)";
            return $string;
        }
    }
    $produk1 = new Produk("Naruto", "masasi Kishimoto", "Shonen Jump", 30000, 100, 0,"Komik");
    $produk2 = new Produk("Uncharted", "Neil Druckman", "Sony Computer", 250000, 0, 50, "Game");
    
    echo $produk1->getInfolengkap();
    echo "<br>";
    echo $produk2->getInfolengkap();
    //Komik : masasi Kishimoto, Shonen Jump
    // Game : Neil Druckman, Sony Computer
    // Naruto | masasi Kishimoto, Shonen Jump (RP. 30000)

    // Komik : Naruto | Masashi Kishimoto, Shonen Jump (RP. 30000) - 100 Halaman.
    // Game : Uncharted | Neil Druckman,Sony Computer (RP. 250000) - 50 Jam.
    