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

	public function getInfoProduct(){
		$str = "{$this->getLabel()} | {$this->penerbit} (Rp. {$this->harga})";
		return $str;
	}
}

class Komik extends Product{
	public $jmlHalaman;

	public function getInfoProduct(){
		$str = "Komik : " . parent::getInfoProduct() . " - {$this->jmlHalaman} Halaman";
		return $str;
	}

	public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $jmlHalaman = 0){

		parent::__construct($judul, $penulis, $penerbit, $harga);

		$this->jmlHalaman = $jmlHalaman;
	}
}

class Game extends Product{
	public function getInfoProduct(){
		$str = "Game : " . parent::getInfoProduct() . " ~ {$this->waktuMain} Jam";
		return $str;
	}

	public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $waktuMain = 0){

		parent::__construct($judul, $penulis, $penerbit, $harga);

		$this->waktuMain = $waktuMain;
	}
}

class CetakInfoProduct{
	public function cetak(Product $product){
		$str = "{$product->getLabel()} | {$product->penerbit} (Rp. {$product->harga})";
		return $str; 
	}
}

$product1 = new Komik("Naruto", "Masashi Kisimoto", "Shounen Jump", 30000, 100);
$product2 = new Game("Uncharted", "Neil Druckman", "Sony", 250000, 50);

echo $product1->getInfoProduct();
echo "<br>";
echo $product2->getInfoProduct();