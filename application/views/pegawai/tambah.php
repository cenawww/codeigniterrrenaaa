<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Pegawai</title>
</head>

<body>

    <h2>Tambah Pegawai</h2>

    <form action="<?= base_url('index.php/pegawai/simpan') ?>" method="post">
        <label for="nama">Nama:</label>
        <input type="text" name="nama" required><br>

        <label for="jabatan">Jabatan:</label>
        <input type="text" name="jabatan" required><br>

        <label for="gaji">Gaji:</label>
        <input type="text" name="gaji" required><br>

        <button type="submit">Simpan</button>
    </form>

</body>

</html>