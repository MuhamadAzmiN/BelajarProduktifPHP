<?php
session_start();
class Kasir {
    public $namaBarang,
            $jumlahBarang,
            $hargaBarang;

    public function __construct($namaBarang, $jumlahBarang, $hargaBarang)
    {
        $this->namaBarang = $namaBarang;
        $this->jumlahBarang = $jumlahBarang;
        $this->hargaBarang = $hargaBarang;
    }

    public function perjumlahanBarang()
    {
        $jumlah = $this->jumlahBarang;
        $hargaBar = $this->hargaBarang;
    
        // Hitung total harga barang
        $total = $jumlah * $hargaBar;
    
        // Format total harga barang dengan titik sebagai pemisah ribuan
        $totalFormatted = number_format($total, 0, ',', '.');
    
        return $totalFormatted;
    }
}

// Mulai sesi

$i = isset($_SESSION["i"]) ? $_SESSION["i"] : 0;

if(isset($_POST["btn"])){

    $namaBarang = $_POST["namaBarang"];
    $jumlahBarang = $_POST["jumlahBarang"];
    $hargaBarang = $_POST["hargaBarang"];

    $barang = new Kasir($namaBarang, $jumlahBarang, $hargaBarang);
    $output = "Rp" . $barang->perjumlahanBarang();

	
    $id = count($_SESSION["daftarBarang"]) + 1;

    $_SESSION["daftarBarang"][]  = [
        "id" => $id,
        "namaBarang" => $namaBarang,
        "jumlahBarang" => $jumlahBarang,
        "total" => $output
    ];

    // $_SESSION["i"] = $i + 1;

    if(!isset($_POST["btn"])) {
        echo "error";
    }

    // Redirect agar tidak ada resubmission saat refresh
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Custom CSS for additional styling */
        .form-container {
            max-width: 500px;
            margin: auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            margin-top: 50px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="form-container">
            <h2 class="mb-4">Tambah Barang</h2>
            <form action="" method="post">
                <div class="mb-3">
                    <label for="namaBarang" class="form-label">Nama Barang</label>
                    <input type="text" class="form-control" id="namaBarang" name="namaBarang" placeholder="Nama Barang" required>
                </div>
                <div class="mb-3">
                    <label for="jumlahBarang" class="form-label">Jumlah Barang</label>
                    <select class="form-select" id="jumlahBarang" name="jumlahBarang" required>
                        <?php for($i = 1; $i <= 10; $i++) : ?>
                            <option value="<?= $i; ?>"><?= $i; ?></option>
                        <?php endfor; ?>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="hargaBarang" class="form-label">Harga Barang</label>
                    <select class="form-select" id="hargaBarang" name="hargaBarang" required>
                        <option value="10000"><?= number_format(10000, 0, ',', '.'); ?></option>
                        <option value="20000"><?= number_format(20000, 0, ',', '.'); ?></option>
                        <option value="30000"><?= number_format(30000, 0, ',', '.'); ?></option>
                        <option value="50000"><?= number_format(50000, 0, ',', '.'); ?></option>
                        <option value="100000"><?= number_format(100000, 0, ',', '.'); ?></option>
                    </select>
                </div>
                <button name="btn" type="submit" class="btn btn-primary">Tambah Barang</button>
            </form>
            <!-- Menampilkan output dari sesi -->
            <div class="mt-4">
      
            <?php
            $_SESSION["jumlahTotal"] = 0;
            if(isset($_SESSION["daftarBarang"])) :?>
                <?php 
                ?>
                <?php foreach($_SESSION["daftarBarang"] as $key => $barang) :?>
                    <div> 
                        <h3>Nama Barang : <?= $barang["namaBarang"];?></h3>
                        <p>Jumlah Barang<?= $barang["jumlahBarang"];?></p>
                        <p>Harga Barang <?php $total = str_replace(["Rp", ",", "."], "", $barang["total"]); echo $barang["total"];?></p>
                        <h1><?php $_SESSION["jumlahTotal"] += $total;?></h1>
                    </div>
                    
                    <a href="/KasirProject/hapus.php?id=<?= $key; ?>">

                        <button type="button" class="btn btn-danger">Hapus</button>
                    </a>
					<a href="edit.php?id=<?= $key; ?>">

					<button type="button" class="btn btn-primary">edit</button>
					</a>
                    

               <?php endforeach ;?>
               <?php $i++ ;?>
               <h1><?= number_format($_SESSION["jumlahTotal"],0, '.', '.')?></h1>
               <a href="bayar.php">
                    <button type="button" class="btn btn-primary">Bayar Semua</button>
               </a>
               
                
            <?php endif ;?>
        
        </div>
        
    </div>
<a href="hapusAll.php">hapus semua</a>
    <?php
// session_destroy();
    ?>
    <!-- Bootstrap JS (Optional) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
