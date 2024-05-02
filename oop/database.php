

<!-- 
Dalam pemrograman berorientasi objek, destruktor adalah metode khusus yang dipanggil secara otomatis ketika sebuah objek dihapus dari memori. Destruktor biasanya digunakan untuk melakukan tindakan terakhir atau membersihkan sumber daya sebelum objek dihapus sepenuhnya. -->


<?php


// Ketika suatu objek dihapus, baik secara eksplisit dengan menggunakan fungsi unset() atau ketika tidak ada referensi lagi yang menunjuk ke objek tersebut, PHP akan memanggil metode destruktor secara otomatis sebelum objek dihapus dari memori. Ini memberikan kesempatan untuk membersihkan sumber daya atau melakukan tindakan terakhir yang diperlukan sebelum objek benar-benar dihapus.


class Database {
    private $host = 'localhost';
    private $username = 'root';
    private $password = '';
    private $database = 'tugas';
    private $connection;

    public function __construct() {
		$this->connection = new mysqli($this->host, $this->username, $this->password, $this->database);

        if ($this->connection->connect_error) {
            die("Koneksi database gagal: " . $this->connection->connect_error);
        }else {
			echo "Koneksi database berhasil<br/>";
		}
       
    }

    public function query($sql) {
        return $this->connection->query($sql);
    }

    public function __destruct() {
        $this->connection->close();
        echo "Koneksi database ditutup<br/>";
    }
}


// Contoh penggunaan
$database = new Database();

// unset($database);

// Melakukan query ke database
$result = $database->query("SELECT * FROM tugas");

// unset($result);




?>

<!-- Dalam metode __destruct(), koneksi database ditutup menggunakan $this->connection->close(), dan pesan "Koneksi database ditutup" dicetak untuk memberikan umpan balik bahwa koneksi telah ditutup dengan sukses sebelum objek dihapus dari memori. -->

<!-- Fungsi destruktor dalam PHP digunakan untuk membersihkan atau menutup sumber daya sebelum objek dihapus dari memori. Ini bisa sangat berguna dalam konteks koneksi database, karena Anda ingin memastikan bahwa koneksi ditutup setelah selesai digunakan untuk mencegah kebocoran sumber daya atau penggunaan yang tidak efisien.
 -->

<!-- Ini adalah perilaku yang diharapkan karena unset() menghapus referensi ke objek tetapi tidak langsung menghapus objek dari memori. Objek akan tetap ada di memori sampai tidak ada referensi lagi yang menunjuk kepadanya, saat itulah __destruct() dipanggil, dan hanya setelah itu PHP menganggap skrip selesai. -->





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Pengguna</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }
        th, td {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>

    <h2>Kelompok 3</h2>

    <table style="width: 60%;">
        <tr>
            <th>Username</th>
            <th>Rayon</th>
        </tr>
        <?php foreach($result as $item) :?>
        <tr>
            <td><?= $item["username"];?></td>
            <td><?= $item["rayon"] ;?></td>
        </tr>
        <?php endforeach ;?>
    </table>

</body>
</html>
