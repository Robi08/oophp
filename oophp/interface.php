<?php 

interface InfoProduct{
	public function getInfoProduct();
}

abstract class Product {
	protected $judul,
		   $penulis,
		   $penerbit,
		   $harga,
		   $diskon = 0;

	public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0){
		$this->judul = $judul;
		$this->penulis = $penulis;
		$this->penerbit = $penerbit;
		$this->harga = $harga;
	}

	public function setJudul($judul){
		// mengecek apakah string
		if(!is_string($judul)){
			throw new Exception("Judul Harus String");
		}

		$this->judul = $judul;
	}

	public function getJudul(){
		return $this->judul;
	}

	public function setPenulis($penulis){
		$this->penulis = $penulis;
	}

	public function getPenulis(){
		return $this->penulis;
	}

	public function setPenerbit($penerbit){
		$this->penerbit = $penerbit;
	}

	public function getPenerbit(){
		return $this->penerbit;
	}

	public function setHarga($harga){
		$this->harga = $harga;
	}

	public function getHarga(){
		return $this->harga - ($this->harga * $this->diskon / 100);
	}

	public function setDiskon($diskon){
		$this->diskon = $diskon;
	}

	public function getDiskon(){
		return $this->diskon;
	}

	public function getLabel(){
		return "$this->judul,  $this->penulis";
	}

	abstract public function getInfo();
}

class Komik extends Product implements InfoProduct{
	public $jmlHalaman;

	public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $jmlHalaman = 0){

		parent::__construct($judul, $penulis, $penerbit, $harga);

		$this->jmlHalaman = $jmlHalaman;
	}

	public function getInfo(){
		$str = "{$this->getLabel()} | {$this->penerbit} (Rp. {$this->harga})";
		return $str;
	}

	public function getInfoProduct(){
		$str = "Komik : " . $this->getInfo() . " - {$this->jmlHalaman} Halaman";
		return $str;
	}

}

class Game extends Product implements InfoProduct{
	public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $waktuMain = 0){

		parent::__construct($judul, $penulis, $penerbit, $harga);

		$this->waktuMain = $waktuMain;
	}

	public function getInfo(){
		$str = "{$this->getLabel()} | {$this->penerbit} (Rp. {$this->harga})";
		return $str;
	}

	public function getInfoProduct(){
		$str = "Game : " . $this->getInfo() . " ~ {$this->waktuMain} Jam";
		return $str;
	}
}

class CetakInfoProduct{
	public $daftarProduct = [];

	public function tambahProduct(Product $product){
		$this->daftarProduct[] = $product;
	}

	public function cetak(){
		$str = "DAFTAR PRODUCT : <br>";
		foreach ($this->daftarProduct as $p) {
			$str .= "- {$p->getInfoProduct()} <br>";
		}
		return $str; 
	}
}

$product1 = new Komik("Naruto", "Masashi Kisimoto", "Shounen Jump", 30000, 100);
$product2 = new Game("Uncharted", "Neil Druckman", "Sony", 250000, 50);

$cetakProduct = new CetakInfoProduct;
$cetakProduct->tambahProduct($product1);
$cetakProduct->tambahProduct($product2);
echo $cetakProduct->cetak();