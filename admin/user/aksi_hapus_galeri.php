<?php
include("Koneksi.php");
$id = $_GET['id'];
mysqli_query($koneksi, " DELETE FROM tbl_galeri WHERE id_galeri='$id' ");
echo
    "<script>alert('Data Terhapus');
        window.location='index.php?page=data_galeri';
    </script>";
