<?php
$mahasiswa = [
  [
    'nama' => 'Dwi Dzaky',
    'nim' => '243040011',
    'email' => 'dzaky@gmail.com',
    'jurusan' => 'Teknik Informatika'
  ],
  [
    'nama' => 'Reiza',
    'nim' => '034030123',
    'email' => 'reiza@gmail.com',
    'jurusan' => 'Teknik Informatika',
  ]
];
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>GET</title>
</head>

<body>
  <h2>Daftar Mahasiswa</h2>
  <ul>
    <?php foreach ($mahasiswa as $m) : ?>
      <li>
        <a href="latihan 4.php?nama=<?= $m['nama']; ?>&nim=<?= $m['nim']; ?>&email=<?= $m['email']; ?>&jurusan=<?= $m['jurusan']; ?>">
          <?= $m['nama']; ?>
        </a>
      </li>
    <?php endforeach; ?>
  </ul>
</body>

</html>