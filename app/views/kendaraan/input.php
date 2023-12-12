<h2>Input Kendaraan</h2>

<form action="<?php echo URL; ?>/kendaraan/save" method="post">
    <table>
        <tr>
            <td>NAMA</td>
            <td><input type="text" name="nama" required></td>
        </tr>
        <tr>
            <td>nomor_polisi</td>
            <td><input type="text" name="nomor_polisi" required></td>
        </tr>
        <tr>
            <td>WARNA</td>
            <td><input type="text" name="warna" required></td>
        </tr>
        <tr>
            <td>JUMLAH</td>
            <td><input type="number" name="jumlah" required></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="btn_save" value="SAVE"></td>
        </tr>
    </table>
</form>