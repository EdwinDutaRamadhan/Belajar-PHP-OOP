<?php
require_once 'App/init.php';
// $produk1 = new Komik("Naruto", "masasi Kishimoto", "Shonen Jump", 30000, 100);
// $produk2 = new Game("Uncharted", "Neil Druckman", "Sony Computer", 250000, 50);

// $cetakProduk = new CetakInfoProduk();
// $cetakProduk->tambahProduk($produk1);
// $cetakProduk->tambahProduk($produk2);
// echo $cetakProduk->cetak();
use App\Service\User as UserService;
use App\Produk\User as UserProduk;
new UserService();
echo "<br>";
