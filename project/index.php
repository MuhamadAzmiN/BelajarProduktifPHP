<?php

class Rental {
	public $motor,
			$nama,
			$jamRental = 700000,
			$waktuRental = 2,
			$pajak = 10000;
	public function __construct($motor, $nama, $jamRental, $waktuRental, $pajak)
	{
		$this->motor = $motor;
		$this->nama = $nama;
		$this->jamRental = $jamRental;
		$this->waktuRental = $waktuRental;
		$this->pajak = $pajak;
	}

	public function setRental()
	{
		return ($this->jamRental * $this->waktuRental) + $this->pajak;
	}

	public function setDiskon()
	{
		return ($this->setRental() * 5) / 100;
	}

	public function harga()
	{
		return $this->setRental() - $this->setDiskon();
	}



	
}


$rental = new Rental("supra", "azmi", 70000, 2, 10000 );
echo $rental->setDiskon();
echo "<br>";
echo $rental->setRental();
echo "<br>";
echo $rental->harga();
