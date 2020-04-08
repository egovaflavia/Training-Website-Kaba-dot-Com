<div class="team">
    <div class="container">
        <div class="agileits_heading_section">
            <h3 class="wthree_head">Jurnalis Kami</h3>
            <p class="w3l_sub_para_agile">Para Penulis Kaba.com</p>
        </div>

        <div class="team-row-agileinfo">
            <?php include("Koneksi.php");
            $penulis = mysqli_query($koneksi, "SELECT * FROM tbl_penulis ORDER BY id_penulis DESC");
            while ($sql = mysqli_fetch_array($penulis)) {
                ?>
                <div class="col-md-3 col-xs-6 team-grids">
                    <div class="thumbnail team-agileits">
                        <img height="200px" width="300px" src="admin/images/<?php echo $sql['foto']; ?>" />
                        <div class="w3agile-caption ">
                            <h4><?php echo $sql['nama_penulis'] ?></h4>
                            <p><?php echo $sql['jenis'] ?></p>
                            <div class="social-icon social-w3lsicon">
                                <a href="#" class="social-button twit"><i class="fa fa-twitter"></i></a>
                                <a href="#" class="social-button fb"><i class="fa fa-facebook"></i></a>
                                <a href="#" class="social-button in"><i class="fa fa-linkedin"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>
            <div class="clearfix"> </div>

        </div>
    </div>
</div>