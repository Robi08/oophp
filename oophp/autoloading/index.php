<?php 
require 'App/init.php';

$product1 = new Komik("Naruto", "Masashi Kisimoto", "Shounen Jump", 30000, 100);
$product2 = new Game("Uncharted", "Neil Druckman", "Sony", 250000, 50);

$cetakProduct = new CetakInfoProduct;
$cetakProduct->tambahProduct($product1);
$cetakProduct->tambahProduct($product2);
echo $cetakProduct->cetak();