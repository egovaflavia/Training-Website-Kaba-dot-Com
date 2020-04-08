<form action="aksi_simpan_komentar.php" method="POST" enctype="multipart/form-data">
    <div class="form-group has-warning">
        <label class="control-label" for="inputWarning1">Nama</label>
        <input type="text" name="nama" class="form-control1" id="inputWarning1">
    </div>
    <div class="form-group has-warning">
        <label class="control-label" for="inputWarning1">Pekerjaan</label>
        <input type="text" name="pekerjaan" class="form-control1" id="inputWarning1">
    </div>
    <div class="form-group has-warning">
        <label class="control-label" for="inputWarning1">Komentar</label>
        <input type="text" name="komentar" class="form-control1" id="inputWarning1">
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