<h2>Edit User</h2>

<form action="<?php echo URL; ?>/kendaraan/update" method="post">
    <input type="hidden" name="id" value="<?php echo $data['row']['id']; ?>">
    <table>
        <tr>
            <td>NAMA</td>
            <td><input type="text" name="nama" value="<?php echo $data['row']['nama']; ?>" required></td>
        </tr>
        <tr>
            <td>nomor_polisi</td>
            <td><input type="text" name="nomor_polisi" value="<?php echo $data['row']['nomor_polisi']; ?>" required></td>
        </tr>
        <tr>
            <td>WARNA</td>
            <td><input type="text" name="warna" value="<?php echo $data['row']['warna']; ?>" required></td>
        </tr>
        <tr>
            <td>JUMLAH</td>
            <td><input type="number" name="jumlah" value="<?php echo $data['row']['jumlah']; ?>" required></td>
        </tr>
        
        <tr>
            <td></td>
            <td><input type="submit" name="btn_update" value="UPDATE"></td>
        </tr>
    </table>
</form>