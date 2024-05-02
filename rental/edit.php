<?php
// Mulai session
session_start();

// Periksa apakah ada ID yang diberikan di URL
if(isset($_GET['id'])) {
    $id = $_GET['id'];
    // Cari kontak dengan ID yang sesuai dalam session
    $kontak_terpilih = null;
    foreach ($_SESSION['kontak'] as $data) {
        if ($data['id'] == $id) {
            $kontak_terpilih = $data;
            break;
        }
    }
    // Jika kontak tidak ditemukan, kembalikan ke halaman utama
    if($kontak_terpilih == null) {
        header('Location: index.php');
        exit();
    }
} else {
    // Jika tidak ada ID yang diberikan, kembalikan ke halaman utama
    header('Location: index.php');
    exit();
}

// Proses edit
if(isset($_POST['edit'])) {
    // Perbarui data kontak dalam session
    foreach ($_SESSION['kontak'] as &$data) {
        if ($data['id'] == $id) {
            $data['nama'] = $_POST['nama'];
            $data['email'] = $_POST['email'];
            break;
        }
    }
    // Redirect kembali ke halaman utama setelah edit
    header('Location: index.php');
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Kontak</title>
</head>
<body>
    <h2>Edit Kontak</h2>
    <form method="post" action="">
        Nama: <input type="text" name="nama" value="<?= $kontak_terpilih['nama'] ?>"><br>
        Email: <input type="text" name="email" value="<?= $kontak_terpilih['email'] ?>"><br>
        <input type="submit" name="edit" value="Simpan">
    </form>
</body>
</html>
