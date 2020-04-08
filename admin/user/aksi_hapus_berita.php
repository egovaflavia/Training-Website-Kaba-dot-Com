<?php
include("Koneksi.php");
$id = $_GET['id'];
mysqli_query($koneksi, " DELETE FROM tbl_berita WHERE id_berita='$id' ");
echo
    "<script>alert('Data Terhapus');
        window.location='index.php?page=data_berita';
    </script>";
