<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?? "PPL" ?></title>
</head>

<body>
    <table border="1" width= "100%" height = "720px">
        <tr allign = "center">
            <th>
                <h1>Ini Header</h1>
            </th>
        </tr>
        <tr>
            <td>
                <a href="/">Home</a>
                <a href="/info">Info</a>
                <a href="/mahasiswa">Mahasiswa</a>
                <a href="/logout">Logout</a>
                <a href="pegawai">Pegawai</a>
            </td>
        </tr>
        <tr>
            <td>
                <center>
                    <?= $this->renderSection('content') ?>
                </center>
            </td>
        </tr>
        <tr>
            <td>
                <center>
                    <h3>Footer</h3>
                </center>
            </td>
        </tr>
    </table>
</body>

</html>