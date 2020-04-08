<div class="banner-1">
</div>
<div class="news">
    <div class="container">
        <h3 class="wthree_head">News</h3>
        <p class="w3l_sub_para_agile">Kumpulan Berita</p>
        <div class="w3-agileits-news-grids">
            <?php include("Koneksi.php");
            $berita = mysqli_query($koneksi, "SELECT * FROM tbl_berita a    LEFT JOIN tbl_kategori b ON a.id_kategori=b.id_kategori
                                                                            LEFT JOIN tbl_penulis c ON a.id_penulis=c.id_penulis
                                                                            ORDER BY a.id_berita DESC LIMIT 6");
            while ($sql = mysqli_fetch_array($berita)) {
                $isi = substr($sql['isi_berita'], 0, 1);
                ?>
                <div class="col-md-6 news-left">
                    <div class="w3-agile-news-date">
                        <div class="agile-news-icon">
                            <i class="fa fa-calendar" aria-hidden="true"></i>
                            <p><?php echo $sql['tgl']; ?></p>
                        </div>
                        <div class="agileits-line"> </div>
                        <div class="agile-news-icon">
                            <a href="#"><i class="fa fa-pencil" aria-hidden="true"></i></a>
                            <p>2 comments</p>
                        </div>
                        <div class="agileits-line"> </div>
                        <div class="agile-news-icon">
                            <a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i></a>
                            <p>3482</p>
                        </div>
                    </div>
                    <div class="w3-agile-news-img">
                        <a href="?page=detail_berita&id=<?php echo $sql['id_berita'] ?>" data-toggle="modal"><img src="admin/images/<?php echo $sql['foto_berita']; ?>" alt="Gagal Load Gambar" width="400" height="300" /></a>
                        <h4><a href="?page=detail_berita&id=<?php echo $sql['id_berita'] ?>" data-toggle="modal"><?php echo $sql['judul_berita']; ?></a></h4>
                        <p><a href="?page=detail_berita&id=<?php echo $sql['id_berita'] ?>">Selengkapnya...</a></p>
                    </div>
                    <div class="clearfix"> </div>
                </div>
            <?php } ?>
            <div class="clearfix"> </div>
        </div>
    </div>
</div>
</div>