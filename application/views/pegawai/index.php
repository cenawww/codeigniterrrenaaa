<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Pegawai</title>
</head>

<body>

    <h2>Data Pegawai</h2>

    <a href="<?= base_url('index.php/pegawai/tambah') ?>"><button>Tambah Pegawai</button></a>

    <table border="1">
        <tr>
            <th>ID</th>
            <th>Nama</th>
            <th>Jabatan</th>
            <th>Gaji</th>
        </tr>
        <?php foreach ($pegawai as $row) : ?>
            <tr>
                <td><?= $row->id ?></td>
                <td><?= $row->nama ?></td>
                <td><?= $row->jabatan ?></td>
                <td><?= $row->gaji ?></td>
            </tr>
        <?php endforeach; ?>
    </table>

</body>

</html>