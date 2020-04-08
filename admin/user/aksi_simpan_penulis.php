<?php
include("Koneksi.php");
if (isset($_POST['simpan'])) {
    $nama_foto = $_FILES['foto']['name'];
    $lokasi_foto = $_FILES['foto']['tmp_name'];
    $tipe_foto = $_FILES['foto']['type'];

    if ($lokasi_foto == "") {
        $query = "INSERT INTO tbl_penulis set 
				nama_penulis = '$_POST[nama_penulis]',
				jenis = '$_POST[jenis]'";
    } else {
        move_uploaded_file($lokasi_foto, "images/$nama_foto");
        $query = "INSERT INTO tbl_penulis set
				nama_penulis = '$_POST[nama_penulis]',
                jenis = '$_POST[jenis]',
                foto = '$nama_foto'";
        $proses = mysqli_query($koneksi, $query) or die(mysqli_error());
    }
    echo
        "<script>alert('Data Tersimpan');
        window.location='index.php?page=data_penulis';
        </script>";
}
