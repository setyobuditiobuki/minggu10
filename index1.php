<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
     <title>Buku Tamu Setyo</title>

</head>
<body>
    <h1>Buku Tamu KU</h1>    
    <form action="proses.php" method="post">   
    <label for="nama">Nama</label>
    <input id="nama" name="nama" type="text" required maxlength="80">
    <label for="email">Email</label>
    <input id="email" name="email" type="email" required maxlength="120">
    <label for="pesan">Pesan maksimal 500 karakter</label>
    <textarea id="pesan" name="pesan" rows="5" required maxlength="500"></textarea>
    <label for="Kirim">Kirim</label>
    <input type="submit" name="submit" value="Kirim">
</body>
</html> 