<?php
	class Sajadah
	{
		public $bahan;
		public $size;

		public function sajadah()
		{
			return "Untuk alas ketika sholat";
		}
	}

	$Sajadah = new Sajadah();

	$Sajadah->bahan = "Bulu Rasfur";
	$Sajadah->size = "L";
	
	echo $Sajadah->bahan;
	echo "<br/>";
	echo $Sajadah->size;
	echo "<br/>";
	echo $Sajadah->sajadah();
?>