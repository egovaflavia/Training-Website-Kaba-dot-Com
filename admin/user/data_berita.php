<div class="panel panel-warning" data-widget="{&quot;draggable&quot;: &quot;false&quot;}" data-widget-static="">
    <div class="panel-heading">
        <h2>Data Berita</h2>
        <?php
        include("Koneksi.php");
        $pilih = mysqli_query($koneksi, "SELECT * FROM tbl_berita a LEFT JOIN tbl_kategori b ON a.id_kategori=b.id_kategori 
                                                                    LEFT JOIN tbl_penulis c ON a.id_penulis=c.id_penulis");
        ?>
        <div class="panel-ctrls" data-actions-container="" data-action-collapse="{&quot;target&quot;: &quot;.panel-body&quot;}"><span class="button-icon has-bg"><i class="ti ti-angle-down"></i></span></div>
    </div>
    <div class="panel-body no-padding" style="display: block;">
        <a href="?page=input_berita" class="btn btn-warning fa fa-file-o fa fa-1x"> Tambah Berita</a> <br> <br>
        <table class="table table-striped table-bordered">
            <thead>
                <tr class="warning">
                    <th>No</th>
                    <th>Kategori</th>
                    <th>Nama Penulis</th>
                    <th>Judul</th>
                    <th>Foto</th>
                    <th>Isi Berita</th>
                    <th>Tanggal</th>
                    <th>Aksi</th>
                </tr>
                <tr></tr>
            </thead>
            <?php
            $no = 1;
            while ($data = mysqli_fetch_array($pilih)) {
                ?>
                <tbody>
                    <tr>
                        <td><?php echo $no++ ?></td>
                        <td><?php echo $data['judul_kategori']; ?></td>
                        <td><?php echo $data['nama_penulis']; ?></td>
                        <td><?php echo $data['judul_berita']; ?></td>
                        <td><img width="50px" height="50px" src="images/<?php echo $data['foto_berita']; ?>"></td>
                        <td><?php echo $data['isi_berita']; ?></td>
                        <td><?php echo $data['tgl']; ?></td>

                        <td>
                            <a class="bnt btn-warning fa fa-pencil fa-1x" href="index.php?page=edit_berita&id=<?php echo $data['id_admin'] ?>"></a>
                            <a class="bnt btn-warning fa fa-trash-o fa-1x" href="aksi_hapus_berita.php?id=<?php echo $data['id_admin'] ?>"></a>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</div>