<?php



class Animal{
	public $nama;
	public $umur;
	public $jenisHidup;


	public function setName($name)
	{
		$this->nama = $name;
	}

	public function setJenisHidup($jenisHidup)
	{
		$this->jenisHidup = $jenisHidup;
	}

	public function getCetak()
	{
		echo "Nama Animal" . $this->nama;
		echo "<br>";
		echo "jenis hidup:" . $this->jenisHidup;
		echo "<br>";
	}


}

$jerapah = new Animal();
$jerapah->setName("jerapah");
$jerapah->setJenisHidup("darat");
$jerapah->getCetak();


$burung = new Animal();
$burung->setName("ikan hiu");
$burung->setJenisHidup("udara");
$burung->getCetak();	
