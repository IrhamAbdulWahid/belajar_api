<?php
echo json_encode([
    "message" => "Selamat datang di API Siswa",
    "endpoints" => [
        "GET siswa/read.php" => "Ambil semua data siswa",
        "POST siswa/create.php" => "Tambah siswa",
        "PUT siswa/update.php" => "Update siswa",
        "DELETE siswa/delete.php" => "Hapus siswa"
    ]
]);
?>
