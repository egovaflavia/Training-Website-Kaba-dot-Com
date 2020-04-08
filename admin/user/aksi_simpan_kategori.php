<?php
//Koneksi Databsae
include("Koneksi.php");

//Menangkap data
$judul_kategori = $_POST['judul_kategori'];
//Input data
mysqli_query($koneksi, "INSERT into tbl_kategori values('','$judul_kategori')");
echo
    "<script>alert('Data Tersimpan');
        window.location='index.php?page=data_kategori';
    </script>";
