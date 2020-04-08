<form action="aksi_simpan_admin.php" method="post" enctype="multipart/form-data">
    <div class="form-group has-warning">
        <label class="control-label" for="inputWarning1">Nama Admin</label>
        <input type="text" name="nama_admin" class="form-control1" id="inputWarning1">
    </div>
    <div class="form-group has-warning">
        <label class="control-label" for="inputWarning1">Username</label>
        <input type="text" name="username" class="form-control1" id="inputWarning1">
    </div>
    <div class="form-group has-warning">
        <label class="control-label" for="inputWarning1">Password</label>
        <input type="text" name="pass" class="form-control1" id="inputWarning1">
    </div>
    <div class="form-group has-warning">
        <label class="control-label" for="inputWarning1">Level</label>
        <input type="text" name="level" class="form-control1" id="inputWarning1">
    </div>
    <div class="row">
        <div class="col-sm-8 col-sm-offset-2">
            <button type="submit" name="simpan" class="btn-success btn">Simpan</button>
            <button type="reset" class="btn-warning btn">Cancel</button>
        </div>
    </div>
</form>