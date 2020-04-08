<?php
include("Koneksi.php");
if (isset($_POST['simpan'])) {
    $nama_foto = $_FILES['foto']['name'];
    $lokasi_foto = $_FILES['foto']['tmp_name'];
    $tipe_foto = $_FILES['foto']['type'];

    if ($lokasi_foto == "") {
        $query = mysqli_query($koneksi, "INSERT INTO tbl_komentar set  nama = '$_POST[nama]',
                                                pekerjaan = '$_POST[pekerjaan]',
                                                komentar = '$_POST[komentar]'");
    } else {
        move_uploaded_file($lokasi_foto, "images/$nama_foto");
        $query = mysqli_query($koneksi, "INSERT INTO tbl_komentar set  nama = '$_POST[nama]',
                                                pekerjaan = '$_POST[pekerjaan]',
                                                komentar = '$_POST[komentar]',
                                                foto = '$nama_foto'");
    }
    echo
        "<script>alert('Data Tersimpan');
        window.location='index.php?page=data_komentar';
        </script>";
}
