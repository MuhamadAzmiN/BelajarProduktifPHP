<?php



class Laptop {
	protected $pemilik = "anto";

	public function akses_pemilik()
	{
		return $this->pemilik;

	}
	protected function hidup_laptop()
	{
		return "hidupkan laptop";
	}
	public function paksa_hidup()
	{
		return $this->hidup_laptop();
	}

	public function getName()
	{
		return $this->pemilik;
	}

	public function getHidupLaptop()
	{
		return $this->hidup_laptop();
	}
}

$laptop = new Laptop();

echo $laptop->akses_pemilik();
echo "<br>";
echo $laptop->getName();
echo "<br>";
echo $laptop->paksa_hidup();
echo "<br>";
echo $laptop->getHidupLaptop();


