<div class="banner-silder">
	<div id="JiSlider" class="jislider">
		<ul>
			<li>
				<div class="w3layouts-banner-top">
					<div class="container">
						<div class="agileits-banner-info">
							<h3>Sed blandit massa vel </h3>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.Sed blandit massa vel mauris sollicitudin dignissim.</p>
						</div>
					</div>
				</div>
			</li>
			<li>
				<div class="w3layouts-banner-top w3layouts-banner-top1">
					<div class="container">
						<div class="agileits-banner-info">
							<h3>Ipsum dolor sit amet</h3>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.Sed blandit massa vel mauris sollicitudin dignissim.</p>
						</div>
					</div>
				</div>
			</li>
			<li>
				<div class="w3layouts-banner-top w3layouts-banner-top2">
					<div class="container">
						<div class="agileits-banner-info">
							<h3>Consectetur adipiscing elit</h3>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.Sed blandit massa vel mauris sollicitudin dignissim.</p>
						</div>
					</div>
				</div>
			</li>
			<li>
				<div class="w3layouts-banner-top w3layouts-banner-top3">
					<div class="container">
						<div class="agileits-banner-info">
							<h3>Blandit massa vel mauris</h3>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.Sed blandit massa vel mauris sollicitudin dignissim.</p>
						</div>
					</div>
				</div>
			</li>
		</ul>
	</div>
</div>

<!-- Tooltip -->
<div class="tooltip-content">

	<div class="modal fade features-modal" id="myModal" tabindex="-1" role="dialog" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					<h4 class="modal-title">Boat house</h4>
				</div>
				<div class="modal-body">
					<img src="images/g4.jpg" class="img-responsive" alt="Boat house">
					<h5>Fishing Season Now Open</h5>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent varius lectus vitae porttitor fringilla. Donec turpis orci, elementum a nunc quis, maximus varius ipsum. Sed bibendum ex in dignissim bibendum.</p>
				</div>
			</div>
		</div>
	</div>

</div>
<!-- //Tooltip -->
<!-- news -->
<div class="news">
	<div class="container">
		<h3 class="wthree_head">News</h3>
		<p class="w3l_sub_para_agile">List Berita Terupdate</p>

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

<!-- testimonials -->
<div class="testimonials">
	<div class="container">
		<h3 class="wthree_head">Komentar</h3>
		<p class="w3l_sub_para_agile">Apa komentar mereka ? </p>
		<ul id="flexiselDemo1">

			<?php include("Koneksi.php");
			$komentar = mysqli_query($koneksi, "SELECT * FROM tbl_komentar ORDER BY id_komentar");
			while ($sql = mysqli_fetch_array($komentar)) {
				?>
				<li>
					<div class="wthree_testimonials_grid_main">
						<div class="col-md-6 col-xs-6 wthree_testimonials_grid">
							<p><img src="images/left-quote.png" alt=" "> <?php echo $sql['komentar'] ?> <img src="images/right-quote.png" alt=" "></p>
						</div>
						<div class="col-md-6 col-xs-6 wthree_testimonials_grid_pos">
							<div class="col-md-5 col-xs-5 grid-test-w3l">
								<img src="admin/images/<?php echo $sql['foto'] ?>" alt=" " class="img-responsive" />
							</div>
							<div class="col-md-7 col-xs-7 wthree_testimonials_grid1">
								<h5><?php echo $sql['nama'] ?></h5>
								<p><?php echo $sql['pekerjaan'] ?></p>
							</div>
							<div class="clearfix"> </div>
						</div>
						<div class="clearfix"> </div>
					</div>
				</li>
			<?php } ?>
		</ul>
	</div>
</div>