<?php
include("Koneksi.php");

//Menangkap data
$id_kategori = $_POST['id_kategori'];
$judul_kategori = $_POST['judul_kategori'];
//Input data
//mysqli_query($koneksi, "UPDATE tbl_kategori SET judul_kategori='$judul_kategori' WHERE id_kategori='$id_kategori'");
mysqli_query($koneksi, "UPDATE `tbl_kategori`   SET `judul_kategori`='$judul_kategori'
                                                WHERE `id_kategori`='$id_kategori'");
echo
    "<script>alert('Data Tersimpan');
        window.location='index.php?page=data_kategori';
    </script>";
