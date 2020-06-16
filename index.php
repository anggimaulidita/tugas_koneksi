<?php
require 'functions.php';
$film = query("SELECT * FROM katalog_film")

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Admin</title>
</head>
<body>
    <h1>Katalog Film</h1>

    <table border="1" cellpadding="10" cellspasing="0">
        <tr>
            <th>No.</th>
            <th>Aksi</th>
            <th>Gambar</th>
            <th>Judul</th>
            <th>Genre</th>
            <th>Sutradara</th>
            <th>Durasi</th>
        </tr>
        <?php $i = 1;?>
        <?php foreach ($film as $row) : ?>

        <tr>
            <td><?= $i ?></td>
            <td>
                <a href="">ubah</a> |
                <a href="">hapus</a>
            </td>
            <td>
                <img src="img/<?= $row['gambar']?>" width="80">
            </td>
            <td><?= $row['judul']?></td>
            <td><?= $row['genre']?></td>
            <td><?= $row['sutradara']?></td>
            <td><?= $row['durasi']?></td>
        </tr>
        <?php $i++ ?>
        <?php endforeach; ?>
    </table>
</body>
</html>