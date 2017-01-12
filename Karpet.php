<?php
	class Karpet 
	{
		public $bahan;
		public $ukuran;
		public $warna;

		public function karpet()
		{
			return "Alas serbaguna";
		}
	}

	$Karpet = new Karpet();

	$Karpet->bahan = "Wol";
	$Karpet->ukuran = "170 x 230 cm";
	$Karpet->warna = "Coklat";

	echo $Karpet->bahan;
	echo "<br/>";
	echo $Karpet->ukuran;
	echo "<br/>";
	echo $Karpet->warna;
	echo "<br/>";
	echo $Karpet->karpet();
?>