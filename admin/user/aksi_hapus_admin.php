<?php
include("Koneksi.php");
$id = $_GET['id'];
mysqli_query($koneksi, " DELETE FROM tbl_admin WHERE id_admin='$id' ");
echo
    "<script>alert('Data Terhapus');
        window.location='index.php?page=data_admin';
    </script>";
