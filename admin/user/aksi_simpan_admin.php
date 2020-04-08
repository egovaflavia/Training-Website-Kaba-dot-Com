<?php
include("Koneksi.php");
if (isset($_POST['simpan'])) {
    $nama_admin = $_POST['nama_admin'];
    $username = $_POST['username'];
    $pass = $_POST['pass'];
    $level = $_POST['level'];

    $query = mysqli_query($koneksi, "INSERT INTO tbl_admin SET 
				nama_admin = '$_POST[nama_admin]',
                username = '$_POST[username]',
                password = '$_POST[pass]',
                level = '$_POST[level]'");
}
echo
    "<script>alert('Data Tersimpan');
        window.location='index.php?page=data_admin';
        </script>";
