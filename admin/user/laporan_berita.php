<div class="panel-heading">
    <form action="cetak_bulanan_berita.php" target="_BLANK" method="GET">
        <table border="1" class="table table-stripped table-bordered table-hover table-condensed">
            <tr>
                <td colspan="2">
                    <h3>Laporan Bulanan Berita</h3>
                </td>
            </tr>
            <tr>
                <td>Masukan Bulan</td>
                <td><select name="month" class="form-control1">
                        <option value="00">--Bulan--</option>
                        <option value="01">Januari</option>
                        <option value="02">Februari</option>
                        <option value="03">Maret</option>
                        <option value="04">April</option>
                        <option value="05">Mei</option>
                        <option value="06">Juni</option>
                        <option value="07">Juli</option>
                        <option value="08">Agustus</option>
                        <option value="09">September</option>
                        <option value="10">Oktober</option>
                        <option value="11">November</option>
                        <option value="12">Desember</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Masukan Tahun</td>
                <td><select name="year" class="form-control1">
                        <option value="0">--Tahun--</option>
                        <option value="2016">2016</option>
                        <option value="2017">2017</option>
                        <option value="2018">2018</option>
                        <option value="2019">2019</option>
                        <option value="2020">2020</option>
                        <option value="2021">2021</option>
                        <option value="2022">2022</option>
                        <option value="2023">2023</option>
                        <option value="2024">2024</option>
                        <option value="2025">2025</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td colspan="2" align="center"><input type="submit" name="submit" value="lanjut" class="btn btn-success"></td>
            </tr>
        </table>

    </form>
    <form action="cetak_tahunan_berita.php" target="_BLANK" method="GET">
        <table border="1" class="table table-stripped table-bordered table-hover table-condensed">
            <tr>
                <td colspan="2">
                    <h3>Laporan Tahunan Berita</h3>
                </td>
            <tr>
                <td>Masukan Tahun</td>
                <td><select name="year" class="form-control1">
                        <option value="0">--Tahun--</option>
                        <option value="2016">2016</option>
                        <option value="2017">2017</option>
                        <option value="2018">2018</option>
                        <option value="2019">2019</option>
                        <option value="2020">2020</option>
                        <option value="2021">2021</option>
                        <option value="2022">2022</option>
                        <option value="2023">2023</option>
                        <option value="2024">2024</option>
                        <option value="2025">2025</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td colspan="2" align="center"><input type="submit" name="submit" value="lanjut" class="btn btn-success"></td>
            </tr>
        </table>

    </form>
</div>