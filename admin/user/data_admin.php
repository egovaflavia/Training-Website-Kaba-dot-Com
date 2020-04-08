<div class="panel panel-warning" data-widget="{&quot;draggable&quot;: &quot;false&quot;}" data-widget-static="">
    <div class="panel-heading">
        <h2>Data Admin</h2>
        <?php
        include("Koneksi.php");
        $pilih = mysqli_query($koneksi, "SELECT * FROM `tbl_admin` WHERE 1");
        ?>
        <div class="panel-ctrls" data-actions-container="" data-action-collapse="{&quot;target&quot;: &quot;.panel-body&quot;}"><span class="button-icon has-bg"><i class="ti ti-angle-down"></i></span></div>
    </div>
    <div class="panel-body no-padding" style="display: block;">
        <a href="?page=input_admin" class="btn btn-warning fa fa-file-o fa fa-1x"> Tambah Admin</a> <br> <br>
        <table class="table table-striped table-bordered">
            <thead>
                <tr class="warning">
                    <th>No</th>
                    <th>Nama Admin</th>
                    <th>Username</th>
                    <th>Password</th>
                    <th>Level</th>
                    <th>Aksi</th>
                </tr>
                <tr></tr>
            </thead>
            <?php
            $no = 1;
            while ($data = mysqli_fetch_array($pilih)) {
                ?>
                <tbody>
                    <tr>
                        <td><?php echo $no++ ?></td>
                        <td><?php echo $data['nama_admin']; ?></td>
                        <td><?php echo $data['username']; ?></td>
                        <td><?php echo $data['password']; ?></td>
                        <td><?php echo $data['level']; ?></td>
                        <td>
                            <a class="bnt btn-warning fa fa-pencil fa-1x" href="index.php?page=edit_admin&id=<?php echo $data['id_admin'] ?>"> Edit</a>
                            <a class="bnt btn-warning fa fa-trash-o fa-1x" href="aksi_hapus_admin.php?id=<?php echo $data['id_admin'] ?>"> Hapus</a>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</div>