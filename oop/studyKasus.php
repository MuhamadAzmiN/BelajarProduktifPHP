<?php 


class Laptop {
	public $nama = "andi";

	public function __construct()
	{
		echo "ini berasal muncul di construct laptop";
	}

	public function __destruct()
	{	
		echo "<br>";
		echo "ini muncul di destruct laptop";
		echo "<br>";
	}

	public function getName()
	{
		return "hidupkan laptop lenovo punya $this->nama";
	}
}
$laptop = new Laptop();
echo "<br>";
echo $laptop->getName();

?>
