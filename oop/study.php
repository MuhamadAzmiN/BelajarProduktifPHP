<?php


class Laptop {
	public $name,
			$laptop;


	public function __construct($name, $laptop)
	{
		$this->name = $name;
		$this->laptop = $laptop;
	}

	public function setName() {
		return "{$this->name} <span style='font-weight: bold;'>{$this->laptop}</span>";
	}

}


$nama1 = new Laptop("Laptop 1 milik :", "Anto");
$nama2 = new Laptop("Laptop 2 milik :", "Andi");
$nama3 = new Laptop("Laptop 3 milik : ", "Dina");


echo $nama1->setName();
echo "<br>";
echo $nama2->setName();
echo "<br>";
echo $nama3->setName();


?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<h1 style="font-weight: bold;"></h1>
</body>
</html>