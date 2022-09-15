<?php

    class Produk{//komik dan game
        public  $judul = "judul", 
                $penulis = "penulis",
                $penerbit = "penerbit",
                $harga = 0;

        public function __construct(){
            echo "Hello World!";
        }

        public function getLabel(){
            return "$this->penulis, $this->penerbit";
        }
    
    }
    $produk3 = new Produk();
    $produk3->judul = "Naruto";
    $produk3->penulis = "Masashi Kishimoto";
    $produk3->penerbit = "Shonen Jump";
    $produk3->harga = 30000;

    $produk4 = new Produk();
    $produk4->judul = "Mobile Legend";
    $produk4->penulis = "lokiti";
    $produk4->penerbit = "Moonton";
    $produk4->harga = 40000;

    echo "Komik : ".$produk3->getLabel();
    echo "<br>";
    echo "Game : ".$produk4->getLabel();
