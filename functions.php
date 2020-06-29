<?php
//koneksi ke database
$koneksi = mysqli_connect("localhost" ,"root" , "", "film");

function query ($query)
{
    global $koneksi;
    $result = mysqli_query ($koneksi,$query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)){
        $rows[] = $row;
    }
    return $rows;
}

function tambah($data){
    global $koneksi;
    $judul=htmlspecialchars($data["judul"]);
    $genre=htmlspecialchars($data["genre"]);
    $sutradara=htmlspecialchars($data["sutradara"]);
    $durasi=htmlspecialchars($data["durasi"]);
    $gambar=htmlspecialchars($data["gambar"]);

    $query =" INSERT  INTO katalog_film
                VALUES
                ('','$judul','$genre','$sutradara','$gambar')
         "; 

    mysqli_query($koneksi,$query);
    return mysqli_affected_rows($koneksi);
}

function delete($id){
    global $koneksi;
    mysqli_query($koneksi,"DELETE FROM katalog_film WHERE id =$id");
    return mysqli_affected_rows($koneksi);
}

function ubah($data){
    global $koneksi;
    $id=$data["id"];
    $judul=htmlspecialchars($data["judul"]);
    $genre=htmlspecialchars($data["genre"]);
    $sutradara=htmlspecialchars($data["sutradara"]);
    $durasi=htmlspecialchars($data["durasi"]);
    $gambar=htmlspecialchars($data["gambar"]);

    $query =" UPDATE katalog_film
                set
               judul='$judul',
               genre='$genre',
               sutradara='$sutradara',
               durasi='$durasi'
               gambar='$gambar'

            WHERE id=$id
         "; 

    mysqli_query($koneksi,$query);
    return mysqli_affected_rows($koneksi);
}
?>