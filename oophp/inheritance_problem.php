<?php 

class Product {
	public $judul,
		   $penulis,
		   $penerbit,
		   $harga,
		   $jmlHalaman,
		   $waktuMain,
		   $type;

	public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $jmlHalaman = 0, $waktuMain = 0, $type){
		$this->judul = $judul;
		$this->penulis = $penulis;
		$this->penerbit = $penerbit;
		$this->harga = $harga;
		$this->jmlHalaman = $jmlHalaman;
		$this->waktuMain = $waktuMain;
		$this->type = $type;
	}

	public function getLabel(){
		return "$this->judul,  $this->penulis";
	}

	public function getInfoProduct(){
		$str = "{$this->type} : {$this->getLabel()} | {$this->penerbit} (Rp. {$this->harga})";
		if($this->type == "Komik"){
			$str .= " - {$this->jmlHalaman} Halaman";
		}else if($this->type == "Game"){
			$str .= " ~ {$this->waktuMain} Jam";
		}
		return $str;
	}
}

class CetakInfoProduct{
	public function cetak(Product $product){
		$str = "{$product->getLabel()} | {$product->penerbit} (Rp. {$product->harga})";
		return $str; 
	}
}

$product1 = new Product("Naruto", "Masashi Kisimoto", "Shounen Jump", 30000, 100, 0, "Komik");
$product2 = new Product("Uncharted", "Neil Druckman", "Sony", 250000, 0, 50, "Game");

echo $product1->getInfoProduct();
echo "<br>";
echo $product2->getInfoProduct();