<?php



class Kendaraan {
	public $name,
		   $color;


	public function __construct($name = "P", $color = "p")
	{
		$this->name = $name;
		$this->color = $color;
	}

	public function setMobil()
	{
		return "{$this->name} {$this->color}";
	}

	public function setMotor()
	{
		return "{$this->name} {$this->color}";	
	}

}


$mobil = new Kendaraan("Avanza", "Hitam Pekat");
echo $mobil->setMobil();

echo "<br>";

$motor = new Kendaraan("Supra", "Hitam Pekat");
echo $motor->setMotor();