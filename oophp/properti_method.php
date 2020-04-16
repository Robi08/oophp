<?php 

class Product {
	public $judul = "judul",
		   $penulis = "penulis",
		   $penerbit = "penerbit",
		   $harga = 0;

	public function getLabel(){
		return "$this->judul,  $this->penulis";
	}
}

$product1 = new Product();
$product1->judul = "Naruto";
$product1->penulis = "Masashi Kisimoto";
$product1->penerbit = "Shounen Jump";
$product1->harga = 30000;

$product2 = new Product();
$product2->judul = "Uncharted";
$product2->penulis = "Neil Druckman";
$product2->penerbit = "Sony";
$product2->harga = 250000;

echo "Komik : " . $product1->getLabel();
echo "<br>";
echo "Game : " . $product2->getLabel();