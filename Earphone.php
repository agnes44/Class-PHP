<?php
	class Earphone
	{
		public $pemilik;
		public $merek;
		public $warna;

		public function earphone()
		{
			 return "Untuk reproduksi suara ";
		}
	
	}

	$Earphone_me = new Earphone();

	$Earphone_me->pemilik = "Agnes";
	$Earphone_me->merek = "Samsung";
	$Earphone_me->warna = "Biru";

	echo $Earphone_me->pemilik;
	echo "<br/>";
	echo $Earphone_me->merek;
	echo "<br/>";
	echo $Earphone_me->warna;
	echo "<br/>";
	echo $Earphone_me->earphone();	

?>
