<?php


class Komputer {
	private $jenis_prosecsor = "Intel core I7-479";


	public function tampilkanProsesor()
	{
		echo $this->jenis_prosecsor;
	}

	public function gettampilkanKedua()
	{
		echo $this->jenis_prosecsor;
	}


}

$komputer = new Komputer();
echo $komputer->tampilkanProsesor();
echo "<br>";
// $komputer2 = new Komputer();
echo $komputer->gettampilkanKedua();