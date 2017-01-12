<?php
	class Flashdisk
	{
		public $merek;
		public $kapasitas;
		public $bentuk;
		public $warna;

		public function flashdisk()
		{
			return "Untuk meyimpan data atau file ";
		}
	}

	$Flashdisk = new Flashdisk();

	$Flashdisk->merek = "Sandisk";
	$Flashdisk->kapasitas = "8gb";
	$Flashdisk->bentuk = "Gelang";
	$Flashdisk->warna = "Merah";

	echo $Flashdisk->merek;
	echo "<br/>";
	echo $Flashdisk->kapasitas;
	echo "<br/>";
	echo $Flashdisk->bentuk;
	echo "<br/>";
	echo $Flashdisk->warna;
	echo "<br/>";
	echo $Flashdisk->flashdisk();
?>
