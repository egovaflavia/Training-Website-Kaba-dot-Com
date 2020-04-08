<form action="aksi_simpan_penulis.php" method="post" enctype="multipart/form-data">
    <div class="form-group has-warning">
        <label class="control-label" for="inputWarning1">Nama</label>
        <input type="text" name="nama_penulis" class="form-control1" id="inputWarning1">
    </div>
    <div class="form-group has-warning">
        <label class="control-label" for="inputWarning1">Jenis</label>
        <select name="jenis" class="form-control1" id="inputWarning1">
            <option value="Paper">Paper</option>
            <option value="News">News</option>
        </select>
    </div>
    <div class="form-group has-warning">
        <label class="control-label" for="inputWarning1">Foto</label>
        <input type="file" name="foto" class="" id="inputWarning1">
    </div>
    <div class="row">
        <div class="col-sm-8 col-sm-offset-2">
            <button type="submit" name="simpan" class="btn-success btn">Simpan</button>
            <button type="reset" class="btn-warning btn">Cancel</button>
        </div>
    </div>
</form>