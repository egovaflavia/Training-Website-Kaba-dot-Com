<?php
include("Koneksi.php");
if (isset($_POST['simpan'])) {
    $nama_foto = $_FILES['foto']['name'];
    $lokasi_foto = $_FILES['foto']['tmp_name'];
    $tipe_foto = $_FILES['foto']['type'];

    if ($lokasi_foto == "") {
        $query = mysqli_query($koneksi, "INSERT INTO tbl_berita SET 
				id_kategori = '$_POST[id_kategori]',
                id_penulis = '$_POST[id_penulis]',
                judul = '$_POST[judul]',
                isi_berita = '$_POST[isi_berita]',
                tgl = '$_POST[tgl]' ");
    } else {
        move_uploaded_file($lokasi_foto, "images/$nama_foto");
        $query = mysqli_query($koneksi, "INSERT INTO tbl_berita SET 
                    id_kategori = '$_POST[id_kategori]',
                    id_penulis = '$_POST[id_penulis]',
                    judul_berita = '$_POST[judul_berita]',
                    foto_berita = '$nama_foto',
                    isi_berita = '$_POST[isi]',
                    tgl = '$_POST[tgl]' ");
        //$query = mysqli_query($koneksi, "INSERT INTO `tbl_komentar`(`nama_komentar`, `email`, `nohp`, `komentar`) VALUES ('',$_POST[nama_komentar],$_POST[email],$_POST[nohp],$_POST[komentar])");
    }
    echo
        "<script>alert('Data Tersimpan');
        window.location='index.php?page=data_berita';
        </script>";
}
