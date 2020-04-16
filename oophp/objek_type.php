<?php 

class Product {
	public $judul,
		   $penulis,
		   $penerbit,
		   $harga;

	public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0){
		$this->judul = $judul;
		$this->penulis = $penulis;
		$this->penerbit = $penerbit;
		$this->harga = $harga;
	}

	public function getLabel(){
		return "$this->judul,  $this->penulis";
	}
}

class CetakInfoProduct{
	public function cetak(Product $product){
		$str = "{$product->getLabel()} | {$product->penerbit} (Rp. {$product->harga})";
		return $str; 
	}
}

$product1 = new Product("Naruto", "Masashi Kisimoto", "Shounen Jump", 30000);
$product2 = new Product("Uncharted", "Neil Druckman", "Sony", 250000);

echo "Komik : " . $product1->getLabel();
echo "<br>";
echo "Game : " . $product2->getLabel();
echo "<br>";

$infoProduct = new CetakInfoProduct;
echo $infoProduct->cetak($product1);