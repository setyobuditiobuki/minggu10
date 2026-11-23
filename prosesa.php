<?php
    if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    http_response_code(405);
    exit("Gunakan form untuk mengirim data.");
    }
    $nama = $_POST["nama"] ?? "";
    if (!is_string($nama)) {
    http_response_code(400);
    exit("Nama harus berupa teks.");
    }
    $nama = trim($nama);

    $email = $_POST["email"] ?? "";
    if (!is_string($email)) {
    http_response_code(400);
    exit("Email harus berupa teks.");
    }
    $email = trim($email);

    $pesan= $_POST["pesan"] ?? "";
    if (!is_string($pesan)) {
    http_response_code(400);
    exit("pesan harus berupa teks.");
    }
    $pesan = trim($pesan);

?>
<!doctype html>
<html lang="id">
<head><meta charset="UTF-8"><title>Respons</title></head>
<body>

<!-- ENT_QUOTES: mengubah tanda kutip satu (') dan tanda kutip dua (") menjadi bentuk HTML yang aman. -->
<!--  |: operator bitwise OR yang digunakan untuk menggabungkan beberapa opsi. -->
<!--   ENT_SUBSTITUTE: mengganti karakter yang tidak valid dalam pengodean karakter dengan karakter pengganti (replacement character), bukan menghapusnya. -->
   <!-- "UTF-8": menentukan standar pengodean karakter yang digunakan.  -->

    <p>Nama: <?= htmlspecialchars($nama,ENT_QUOTES | ENT_SUBSTITUTE, "UTF-8") ?></p>
     <p>Email: <?= htmlspecialchars($email,ENT_QUOTES | ENT_SUBSTITUTE, "UTF-8") ?></p>
     <p>Pesan: <?= htmlspecialchars($pesan,ENT_QUOTES | ENT_SUBSTITUTE, "UTF-8") ?></p>
     

    <a href="index.php">Kembali ke form</a>
</body>
</html>
