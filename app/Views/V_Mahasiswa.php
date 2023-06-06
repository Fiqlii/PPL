<?= $this->extend('v_Template'); ?>
<?= $this->section('content'); ?>
<!doctype html>
<html lang="en">

<head>
    <title>PKB.net</title>

    <style>
        body {
            padding-top: 5rem;
        }
    </style>
</head>

<body>
    <main role="main" class="container-fluid">
        <center>
        <h1>CRUD Mahasiswa</h1>
        <a href="<?= base_url('/mahasiswa/create')?>">Tambah Data Mahasiswwa</a>
        </center>
        <hr>
        <form  action="<?php echo base_url('/mahasiswa')?>" action="GET">
          <div class="mb-3">
            <label for="cari">Search</label>
            <input type="text"  name="cari">
            <button type="submit"  value="Cari">Submit</button>
          </div>
        </form>
        <table class="table" border="1">
                <tr>
                <th>NIM</th>
                <th>Nama</th>
                <th>Umur</th>
                <th>Aksi</th>
                </tr>

                <?php
                foreach ($data as $mahasiswa) {
                ?>
                    <tr>
                        <td><?php echo $mahasiswa->Nim; ?></td>
                        <td><?php echo $mahasiswa->Nama; ?></td>
                        <td><?php echo $mahasiswa->Umur; ?></td>
                        <td>
                            <a class = "update" href ="<?= base_url('/edit/mahasiswa').'/'. $mahasiswa->Nim?> ">Edit</a>
                            <a href="<?= base_url("/mahasiswa/Detail/$mahasiswa->Nim") ?>" class="btn btn-primary">Detail</a>
                        </td>
                    </tr>
                <?php
                }
                ?>
        </table>

    </main><!-- /.container -->
</body>

</html>
<?= $this->endsection(); ?>