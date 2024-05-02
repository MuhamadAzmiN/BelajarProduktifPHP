<?php
// Mulai session
session_start();

// Inisialisasi data kontak jika belum ada dalam session
if (!isset($_SESSION['kontak'])) {
    $_SESSION['kontak'] = array(
        array("id" => 1, "nama" => "John Doe", "email" => "john@example.com"),
        array("id" => 2, "nama" => "Jane Smith", "email" => "jane@example.com")
    );
}

// Fungsi untuk menampilkan daftar kontak
function tampilkanDaftarKontak() {
    foreach ($_SESSION['kontak'] as $data) {
        echo "<li>{$data['nama']} - {$data['email']} <a href='edit.php?id={$data['id']}'>Edit</a></li>";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Daftar Kontak</title>
</head>
<body>
    <h2>Daftar Kontak</h2>
    <ul>
        <?php tampilkanDaftarKontak(); ?>
    </ul>
</body>
</html>
