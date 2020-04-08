<?php
include("Koneksi.php");
if (isset($_POST['edit'])) {
    $nama_foto = $_FILES['foto']['name'];
    $lokasi_foto = $_FILES['foto']['tmp_name'];
    $tipe_foto = $_FILES['foto']['type'];

    if ($lokasi_foto == "") {
        $query = mysqli_query($koneksi, "UPDATE tbl_penulis set 
				nama_penulis = '$_POST[nama_penulis]',
                jenis = '$_POST[jenis]' WHERE id_penulis= '$_POST[id_penulis]'");
    } else {
        move_uploaded_file($lokasi_foto, "images/$nama_foto");
        $query = mysqli_query($koneksi, "UPDATE tbl_penulis set
				nama_penulis = '$_POST[nama_penulis]',
                jenis = '$_POST[jenis]',
                foto = '$nama_foto' WHERE id_penulis= '$_POST[id_penulis]'");
    }
    echo
        "<script>alert('Data Tersimpan');
        window.location='index.php?page=data_penulis';
        </script>";
}
