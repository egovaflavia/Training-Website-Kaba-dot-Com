<div class="panel-heading">
    <h4 class="fa fa-pencil"> Cetak</h4>

    <div align="center">
        <div align="center"><br>
            <h3><img width="100px" height="100px" align="left" src="images/Avatar_3.png">CV. MEDIATAMA WEB INDONESIA <img align="right" width="100px" height="100px" src="images/Avatar_3.png"><br>
                Training Consultan and IT Consultan </h3>
            <h5>Jln Dr. Sutomo. 145 C, Marapalam, Kota Padang - Sumatera Barat</h5>
        </div>
        <hr>
    </div>
    <h3 class="col-md-12" align="center"><u>Laporan Data Penuliss Website</u></h3>
    <br>
    <br>

    <?php
    include("Koneksi.php");
    $pilih = mysqli_query($koneksi, "SELECT * FROM `tbl_penulis` WHERE 1");
    ?>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Jenis</th>
                <th>Foto</th>
            </tr>
        </thead>
        <?php
        $no = 1;
        while ($data = mysqli_fetch_array($pilih)) {
            ?>
            <tbody>
                <tr>
                    <th><?php echo $no++ ?></th>
                    <td><?php echo $data['nama_penulis'] ?></td>
                    <td><?php echo $data['jenis'] ?></td>
                    <td><img width="60" height="60" src="images/<?php echo $data['foto'] ?>"></td>
                </tr>
            <?php } ?>
    </table>
    <center>
        <table>
            <tr>
                <td>Padang, </td><br><br><br>
                <td><?php echo date('d-M-Y'); ?></td>
            </tr>
        </table>
        Direktur <br><br><br><br>
        <b><u>Ferry Ahmad Effendy S.Kom, M.Kom</u></b>
    </center>
    </tbody>
</div>