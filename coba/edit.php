<?php
session_start();

if(isset($_GET["id"])){
    $id = $_GET["id"];
    
    // Mencari barang dengan ID yang sesuai
    $kontakterpilih = null;
    foreach($_SESSION["daftarBarang"] as $key => &$data ){
        if($key == $id){
            // Jika data barang ditemukan, simpan ke dalam variabel untuk digunakan dalam formulir
            $kontakterpilih = $data;
            break;
        }
    }

    if($kontakterpilih === null){
        header("Location: index.php");
        exit;
    }
}else {
    header("Location: index.php");
    exit;
}

if(isset($_POST["edit"])){
    foreach($_SESSION["daftarBarang"] as $key =>  &$data){
        if($key == $id){
            $data["namaBarang"] = $_POST["namaBarang"];
            $data["jumlahBarang"] = $_POST["jumlahBarang"];
            $data["hargaBarang"] = $_POST["total"];
            break;
        }
    }
    header('Location: index.php');
    exit();
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Barang</title>
</head>
<body>
    <form action="" method="post">
        <div class="mb-3">
            <label for="namaBarang" class="form-label">Nama Barang</label>
            <input type="text" value="<?= $kontakterpilih["namaBarang"];?>" class="form-control" id="namaBarang" name="namaBarang" placeholder="Nama Barang" required>
        </div>
        <div class="mb-3">
            <label for="jumlahBarang" class="form-label">Jumlah Barang</label>
            <select class="form-select" id="jumlahBarang" name="jumlahBarang" required>
                <?php for($i = 1; $i <= 10; $i++) : ?>
                    <option value="<?= $i; ?>" <?= $kontakterpilih["jumlahBarang"] == $i ? 'selected' : ''; ?>><?= $i; ?></option>
                <?php endfor; ?>
            </select>
        </div>
        <div class="mb-3">
            <label for="hargaBarang" class="form-label">Harga Barang</label>
            <select class="form-select" id="hargaBarang" name="hargaBarang" required>
                <option value="10000" <?= $kontakterpilih["hargaBarang"] == 10000 ? 'selected' : ''; ?>><?= number_format(10000, 0, ',', '.'); ?></option>
                <option value="20000" <?= $kontakterpilih["hargaBarang"] == 20000 ? 'selected' : ''; ?>><?= number_format(20000, 0, ',', '.'); ?></option>
                <option value="30000" <?= $kontakterpilih["hargaBarang"] == 30000 ? 'selected' : ''; ?>><?= number_format(30000, 0, ',', '.'); ?></option>
                <option value="50000" <?= $kontakterpilih["hargaBarang"] == 50000 ? 'selected' : ''; ?>><?= number_format(50000, 0, ',', '.'); ?></option>
                <option value="100000" <?= $kontakterpilih["hargaBarang"] == 100000 ? 'selected' : ''; ?>><?= number_format(100000, 0, ',', '.'); ?></option>
            </select>
        </div>
        <button name="edit" type="submit" class="btn btn-primary">Simpan Barang</button>
    </form>
</body>
</html>
