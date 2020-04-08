<script>
    window.print();
</script>

<?php
include("Koneksi.php");
include("tglindo.php");
$month = $_GET['month'];
$year = $_GET['year'];

if ($month == '01') {
    $bln = "Januari";
} elseif ($month == '02') {
    $bln = "Februari";
} elseif ($month == '03') {
    $bln = "Maret";
} elseif ($month == '04') {
    $bln = "April";
} elseif ($month == '05') {
    $bln = "Mei";
} elseif ($month == '06') {
    $bln = "Juni";
} elseif ($month == '07') {
    $bln = "Juli";
} elseif ($month == '08') {
    $bln = "Agustus";
} elseif ($month == '09') {
    $bln = "September";
} elseif ($month == '10') {
    $bln = "Oktober";
} elseif ($month == '11') {
    $bln = "November";
} elseif ($month == '12') {
    $bln = "Desember";
}
$sql = mysqli_query($koneksi, "SELECT * FROM tbl_berita a left join tbl_kategori b on a.id_kategori=b.id_kategori left join tbl_penulis c on a.id_penulis=c.id_penulis WHERE DATE_FORMAT(tgl,'%m')='$month' and DATE_FORMAT(tgl,'%Y')='$year'");
$no = 1;

?>

<div class="panel-heading">
    <h4> <a class="fa fa-pencil"> Cetak</a></h4>

    <div align="center">
        <div align="center"><br>
            <h3><img width="100px" height="100px" align="left" src="images/Avatar_3.png">CV. MEDIATAMA WEB INDONESIA <img align="right" width="100px" height="100px" src="images/Avatar_3.png"><br>
                Training Consultan and IT Consultan </h3>
            <h5>Jln Dr. Sutomo. 145 C, Marapalam, Kota Padang - Sumatera Barat</h5>
        </div>
        <hr>
    </div>
    <h3 class="col-md-12" align="center"><u>Laporan Data Komentar Website</u></h3>
    <br>
    <br>

    <table class="table table-collapse">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Penulis</th>
                <th>Kategori</th>
                <th>Judul Berita</th>
                <th>Isi Berita</th>
                <th>Tanggal</th>
            </tr>
        </thead>
        <?php
        while ($data = mysqli_fetch_array($sql)) {
            ?>
            <tbody>
                <tr>
                    <td><?php echo $no++ ?></td>
                    <td><?php echo $data['nama_penulis'] ?></td>
                    <td><?php echo $data['judul_kategori'] ?></td>
                    <td><?php echo $data['judul_berita'] ?></td>
                    <td><?php echo $data['isi_berita'] ?></td>
                    <td><?php echo TanggalIndo($data['tgl']) ?></td>
                </tr>
            </tbody>
        <?php } ?>

    </table>

    <table align="right" border="0" style="width:20%">
        <tr>
            <td>Padang, <?php echo date('d-M-Y'); ?></td>
        </tr>
        <tr>
            <td align="center">
                <b> Direktur </b><br><br><br><br>
                <b><u>Ferry Ahmad Effendy S.Kom, M.Kom</u></b>
            </td>
        </tr>
    </table>
</div>