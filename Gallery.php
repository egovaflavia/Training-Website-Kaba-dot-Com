<div class="banner-1">
</div>
<div class="gallery">
    <div class-="container">
        <div class="agileits_heading_section">
            <h3 class="wthree_head">Gallery</h3>
            <p class="w3l_sub_para_agile">Kumpulan Foto Jurnalis Kami</p>
        </div>
        <div class="inner_w3l_agile_grids-1">
            <?php include("Koneksi.php");
            $berita = mysqli_query($koneksi, "SELECT * FROM tbl_berita ORDER BY id_berita");
            while ($sql = mysqli_fetch_array($berita)) {
                ?>
                <div class=" col-md-3 gallery-grid gallery1">
                    <a href="admin/images/<?php echo $sql['foto_berita'] ?>" class="swipebox">
                        <img height="200px" src="admin/images/<?php echo $sql['foto_berita'] ?>" alt="Gagal Load Gambar">
                        <div class="textbox">
                            <h4>Kaba.com</h4>
                        </div>
                    </a>
                </div>
            <?php } ?>
            <div class="clearfix"> </div>
        </div>
    </div>
</div>
</div>
<!--//gallery-->