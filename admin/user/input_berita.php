<form action="aksi_simpan_berita.php" method="post" enctype="multipart/form-data">
    <div class="form-group has-warning">
        <label class="control-label" for="inputWarning1">Nama Kategori</label>
        <select name="id_kategori" class="form-control1" id="inputWarning1">
            <?php include("Koneksi.php");
            $query = mysqli_query($koneksi, " SELECT * FROM tbl_kategori");
            while ($data = mysqli_fetch_assoc($query)) {
                echo "<option value=\"$data[id_kategori]\">$data[judul_kategori]</option>";
            }
            ?>
        </select>
    </div>
    <div class="form-group has-warning">
        <label class="control-label" for="inputWarning1">Penulis</label>
        <select name="id_penulis" class="form-control1" id="inputWarning1">
            <?php include("Koneksi.php");
            $query = mysqli_query($koneksi, " SELECT * FROM tbl_penulis");
            while ($data = mysqli_fetch_assoc($query)) {
                echo "<option value=\"$data[id_penulis]\">$data[nama_penulis]</option>";
            }
            ?>
        </select>
    </div>
    <div class="form-group has-warning">
        <label class="control-label" for="inputWarning1">Judul Berita</label>
        <input type="text" name="judul_berita" class="form-control1" id="inputWarning1">
    </div>
    <div class="form-group has-warning">
        <label class="control-label" for="inputWarning1">Foto</label>
        <input type="file" name="foto" class="" id="inputWarning1">
    </div>
    <div class="form-group has-warning">
        <label class="control-label" for="inputWarning1">Isi Berita</label>
        <input type="text" name="isi" class="form-control1" id="inputWarning1">
    </div>
    <div class="form-group has-warning">
        <label class="control-label" for="inputWarning1">Tanggal</label>
        <input type="date" name="tgl" class="form-control1" id="inputWarning1">
    </div>
    <div class="row">
        <div class="col-sm-8 col-sm-offset-2">
            <button type="submit" name="simpan" class="btn-success btn">Simpan</button>
            <button type="reset" class="btn-warning btn">Cancel</button>
        </div>
    </div>
</form>