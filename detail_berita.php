<div class="banner-1">
</div>
<!-- about -->
<div class="about">
    <div class="container">
        <div class="about-grids">
            <?php
            include("Koneksi.php");
            $pilih = mysqli_query($koneksi, "SELECT * FROM tbl_berita a LEFT JOIN tbl_kategori b ON a.id_kategori=b.id_kategori 
                                                                        LEFT JOIN tbl_penulis c ON a.id_penulis=c.id_penulis 
                                                                        WHERE a.id_berita='$_GET[id]'");
            while ($data = mysqli_fetch_array($pilih)) {
                ?>
                <div class="col-md-5 wthree-about-left">
                    <div class="wthree-about-left-info">
                        <img src="admin/images/<?php echo $data['foto_berita']; ?>" alt="Gagal Load Gambar" width="400" height="300" />
                    </div>
                </div>
                <div class="col-md-7 agileits-about-right">
                    <h5><?php echo $data['judul_berita']; ?></h5>
                    <a><?php echo $data['tgl']; ?> > <?php echo $data['nama_penulis']; ?></a>
                    <p><?php echo $data['isi_berita']; ?></p>
                </div>
                <div class="clearfix"> </div>
            <?php } ?>
        </div>
    </div>
</div>