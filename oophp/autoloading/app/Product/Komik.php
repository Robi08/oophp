<?php 
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