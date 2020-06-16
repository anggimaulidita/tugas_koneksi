<?php
//koneksi ke database
$koneksi = mysqli_connect("localhost" ,"root" , "", "film");

//ambil data dari katalog_film query data mahasiswa
$result = mysqli_query($koneksi,"SELECT * FROM katalog_film");
var_dump($result);



// ambil data (fecth) dari object restore_include_path
// mysql_fect_row(); //
// mysql_fect_assoc();
// mysql_fect_array();
// mysql_fect_object();

/* while ($fi = mysqli_fetch_assoc($result)) {
        var_dump($fi);
    }
*/

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
        <?php while ($row = mysqli_fetch_assoc($result)) : ?>

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
        <?php endwhile; ?>
    </table>
</body>
</html>