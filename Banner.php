<?php
	class Banner
	{
		public $bahan;
		public $bentuk;
		public $ukuran;

		public function banner()
		{
			return "Untuk meamasang iklan, slogan atau pesan";
		}
	}

	$Banner = new Banner();

	$Banner->bahan = "Canvas";
	$Banner->bentuk = "Persegi Panjang";
	$Banner->ukuran = "1.5 m";

	echo $Banner->bahan;
	echo "<br/>";
	echo $Banner->bentuk;
	echo "<br/>";
	echo $Banner->ukuran;
	echo "<br/>";
	echo $Banner->Banner();
?>