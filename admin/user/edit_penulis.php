<?php
include("Koneksi.php");
$id = $_GET['id'];
$pilih = mysqli_query($koneksi, "SELECT * FROM tbl_penulis WHERE id_penulis=$id");
?>

<form action="aksi_edit_penulis.php" method="post" enctype="multipart/form-data">
    <?php while ($data = mysqli_fetch_array($pilih)) { ?>
        <div class="form-group has-warning">
            <label class="control-label" for="inputWarning1">Nama</label>
            <input type="hidden" name="id_penulis" value="<?php echo $data['id_penulis'] ?>">
            <input type="text" name="nama_penulis" value="<?php echo $data['nama_penulis'] ?>" class="form-control1" id="inputWarning1">
        </div>
        <div class="form-group has-warning">
            <label class="control-label" for="inputWarning1">Jenis</label>
            <select name=" jenis" class="form-control1" id="inputWarning1" value="<?php echo $data['jenis'] ?>">
                <option value="Paper">Paper</option>
                <option value="News">News</option>
            </select>
        </div>
        <div class="form-group has-warning">
            <label class="control-label" for="inputWarning1">Foto</label>
            <img src="images/<?php echo $data['foto'] ?>" width="150px" height="150px" alt="Gagal Load Gambar">
            <input type="file" name="foto" class="" id="inputWarning1">
        </div>
        <div class="row">
            <div class="col-sm-8 col-sm-offset-2">
                <button type="submit" name="edit" class="btn-success btn">Edit</button>
                <button type="reset" class="btn-warning btn">Cancel</button>
            </div>
        </div>
    <?php } ?>
</form>