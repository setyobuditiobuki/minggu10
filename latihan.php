<?php
   $jumlah=1;
   $status="aktif";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Latihan PHP</h1>
    <p>Jumlah Pesan :<?= $jumlah ?></p>
    <?php if ($status==="aktif"):?>
             <p>Form siap</p>
         <?php else:?>
             <p>Form ditutup</p>  
    <?php endif;?>
    </body>
</html>