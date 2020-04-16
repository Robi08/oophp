<?php 
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