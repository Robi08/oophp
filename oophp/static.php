<?php 
// static digunakan untuk mengambil properti atau method yang tidak diintansiasi

class ContohStatic {
	public static $angka = 1;

	public static function halo(){
		// self digunakan pengganti $this. untuk memanggil properti atau method yang bersangkutan tanpa diintansiasi
		return "Halo " . Self::$angka . " Kali";
	}
}

echo ContohStatic::$angka;
echo "<br>";
echo ContohStatic::halo();