<?php
include("Koneksi.php");
$id = $_GET['id'];
mysqli_query($koneksi, " DELETE FROM tbl_penulis WHERE id_penulis='$id' ");
echo
    "<script>alert('Data Terhapus');
        window.location='index.php?page=data_penulis';
    </script>";
