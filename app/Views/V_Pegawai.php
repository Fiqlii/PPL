<?= $this->extend('v_Template'); ?>
<?= $this->section('content'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Pegawai</title>
</head>
<body>
<h1 align="center"> Display Data Pegawai</h1>
<table align="center" border="1">
    <th>NIP</th>
    <th>Nama</th>
    <th>Gender</th>
    <th>Telp</th>
    <th>Email</th>
    <th>Pendidikan</th>
    <!-- <th>Action</th> -->
    <?php
    foreach ($data as $pegawai){
    ?>
    <tr>
        <td height="25" width="150"><?php echo $pegawai['NIP'];?></td>
        <td height="25" width="150"><?php echo $pegawai['Nama'];?></td>
        <td height="25" width="150"><?php echo $pegawai['Gender'];?></td>
        <td height="25" width="150"><?php echo $pegawai['Telp'];?></td>
        <td height="25" width="150"><?php echo $pegawai['Email'];?></td>
        <td height="25" width="150"><?php echo $pegawai['Pendidikan'];?></td>
    </tr>
    <?php
    }
    ?>
</table>
<a href="create_pegawai">create</a>
</body>
</html>

<?= $this->endsection(); ?>