
<!-- 
Dalam pemrograman berorientasi objek, destruktor adalah metode khusus yang dipanggil secara otomatis ketika sebuah objek dihapus dari memori. Destruktor biasanya digunakan untuk melakukan tindakan terakhir atau membersihkan sumber daya sebelum objek dihapus sepenuhnya. -->


<!-- 
  
Misalnya, dalam sebuah kelas yang mengelola koneksi database, Anda dapat menggunakan fungsi destruktor untuk menutup koneksi saat objek tersebut tidak lagi diperlukan. Dengan cara ini, Anda dapat memastikan bahwa sumber daya koneksi dilepaskan secara otomatis setiap kali objek dihapus, bahkan jika Anda lupa untuk menutupnya secara eksplisit. -->



<!-- Destruktor dalam PHP biasanya didefinisikan dengan nama khusus __destruct. Method ini akan dipanggil secara otomatis saat objek tidak lagi digunakan atau dihapus dari memori, sehingga memungkinkan Anda untuk menetapkan tindakan pembersihan yang diperlukan, seperti melepaskan sumber daya eksternal atau melakukan operasi penutupan. -->


<?php



class Buah {
    // Properties
    private $name,          
            $color;
  
    // Methods
    function __construct($name, $color) {
      $this->name = $name;
      $this->color = $color; 
    }
    function __destruct() {
      echo "<br>";
      echo "The fruit is {$this->name} and the color is {$this->color}." . "<br>"; 
    }
  }
  
  $apple = new Buah("Apel", "Merah");
  // unset($apple);
  echo "Skript telah selesai";

// Memanggil method tampilkan_nama untuk menampilkan nama yang telah diatur


class Mobil {
  public  $name ,
          $color;
        
  
  public function setMobil() {
    return "{$this->name} {$this->color}"; 
  }

  public function setName($name) 
  {
    return $this->name = $name;
  }
        
  }
class Motor extends Mobil {
  public function __construct($name, $color)
  {
    $this->name = $name;
    $this->color = $color;
  }

  public function setMotor()
  {
    return "{$this->name} {$this->color}";
  }
}

$mobil = new Mobil("avanza", "merah");
echo "<br>";
echo $mobil->setMobil();


echo $mobil1->setName("Angkot");


$motor = new Motor("supra", "hitam");
echo $motor->setMotor();




?>
