<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pegawai</title>
</head>
<body>
    <form action="<?= base_url('store_pegawai') ?>" method="post">
        <label for="NIP">NIP:</label><br>
        <input type="text" id="NIP" name="NIP">
        <br>
        <br>
        <label for="Nama">Nama:</label><br>
        <input type="text" id="Name" name="Nama">
        <br>
        <br>
        <label for="Gender">Gender :</label>
        <br>
        <input type="radio" id="Gender" name="Gender" value="Laki - Laki">
        <label for="Gender">Laki-Laki:</label>
        <input type="radio" id="Gender" name="Gender" value="Perempuan">
        <label for="Perempuan">Perempuan:</label>
        <br>
        <br>
        <label for="Telp">Telp:</label>
        <br>
        <input type="text" id="Telp" name="Telp">
        <br>
        <br>
        <label for="Email">Email:</label>
        <br>
        <input type="text" id="Email" name="Email">
        <br>
        <br>
        <label for="Pendidikan">Pendidikan:</label>
        <select name="Pendidikan" id="Pendidikan">
            <option value="SD">SD</option>
            <option value="SMP">SMP</option>
            <option value="SMA">SMA</option>
        </select>
        <br><br>
        <input type="submit" value="Simpan">
    </form>
    <a href="pegawai" class="btn btn-danger btn-sm btn-delete">Kembali</a>

</body>
</html>