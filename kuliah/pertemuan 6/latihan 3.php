<?php
    $mahasiswa1 = ['Dwi Dzaky Wibowo', '243040011', 'ddzaky46@gmail.com', 'Teknik Informatika'];
    $mahasiswa2 = ['jeki', '243040010', 'jeki46@gmail.com', 'Teknik Informatika'];


    $mahasiswa = [
        ['Dwi Dzaky Wibowo', '243040011', 'ddzaky46@gmail.com', 'Teknik Informatika'], 
        ['jeki', '243040010', 'jeki46@gmail.com', 'Teknik Informatika']
    ];
    //echo $mahasiswa[1][4][2];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ARRAY BERSARANG</title>
</head>
<body>
    <h2>Daftar Mahasiswa</h2>
    <?php foreach($mahasiswa as $m) : ?>
    <ul>
        <li>Nama : <?= $m[0]; ?></li>
        <li>NIM : <?= $m[1]; ?></li>
        <li>Email : <?= $m[2]; ?></li>
        <li>Jurusan: <?= $m[3]; ?></li>
    </ul>
    <?php endforeach; ?>
</body>
</html>