<?php
require 'function.php';

$id=$_GET["id"];
// var_dump ($id);

$hwn =query(" SELECT * FROM katalog_film WHERE id=$id ")[0];
// var_dump ($fi);


    if(isset($_POST["submit"])){
    //     $judul=$_POST["judul"];
    //     $genre=$_POST["genre"];
    //     $sutradara=$_POST["sutradara"];
    //     $gambar=$_POST["gambar"];

    //     $query =" INSERT  INTO data_hewan
    //             VALUES
    //             ('','$judul','$genre','$sutradara','$gambar')
    //      "; 

    // mysqli_query($koneksi,$query);

    if (ubah($_POST) > 0) {
        echo "
        <script>
            alert('berhasil');
            document.location.href='index.php';
        </script>
        ";
    } else {
        echo "
        <script>
             alert('gagal');
            document.location.href='index.php';
         </script>";
        // echo mysqli_error($koneksi);
    }
    }
?>    
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman UBAH</title>
</head>
<body>
    <h1>UBAH Katalog Film</h1>
    <table>
    <form action="" method="POST">
    <input type="hidden" name="id" id="id"  value="<?= $fi["id"]; ?>">
        <ul>
       
            <li>
                <label for="judul">judul :</label> 
                <input type="text" name="judul" id="judul"  value="<?= $fi["judul"]; ?>">
            </li>
            <li>
                <label for="genre">genre :</label> 
                <input type="text" name="genre" id="genre"  value="<?= $fi["genre"]; ?>">
            </li>
            <li>
                <label for="sutradara">sutradara :</label>
                 <input type="text" name="sutradara" id="sutradara"  value="<?= $fi["sutradara"]; ?>">
            </li>
            <li>
                <label for="gambar">Gambar :</label>
                 <input type="text" name="gambar" id="gambar"  value="<?= $fi["gambar"]; ?>">
            </li>
            <br>
            <br>
            <li>
               <button type="submit" name="submit" > UBAH</button>
            </li>
        </ul>
    
    </form>
    </table>
    <!-- kembali <a href="index.php ">KEMBALI</a> -->
</body>
</html>