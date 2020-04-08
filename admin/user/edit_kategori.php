<?php
include("Koneksi.php");
$id = $_GET['id'];
$pilih = mysqli_query($koneksi, "SELECT * FROM tbl_kategori WHERE id_kategori=$id");
?>

<form action="aksi_edit_kategori.php" method="post" enctype="multipart/form-data">
    <?php while ($data = mysqli_fetch_array($pilih)) { ?>
        <div class="form-group has-warning">
            <label class="control-label" for="inputWarning1">Nama</label>
            <input type="hidden" name="id_kategori" value="<?php echo $data['id_kategori'] ?>">
            <input type="text" name="judul_kategori" value="<?php echo $data['judul_kategori'] ?>" class="form-control1" id="inputWarning1">
        </div>
        <div class="row">
            <div class="col-sm-8 col-sm-offset-2">
                <button type="submit" name="edit" class="btn-success btn">Edit</button>
                <button type="reset" class="btn-warning btn">Cancel</button>
            </div>
        </div>
    <?php } ?>
</form>