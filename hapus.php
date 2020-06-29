<?php 
require 'function.php';
$id = $_GET["id"];

if (delete($id)>0) {
    echo "
    <script>
        alert('berhasil hapus');
        document.location.href='index.php';
    </script>
    ";
} else {
    echo "
    <script>
        alert('gagal hapus');
        document.location.href='index.php';
    </script>
    ";
}

?>