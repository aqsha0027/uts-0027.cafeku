<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Pelanggan</title>
    <link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.min.css') ?>">
</head>
<body>

    <div class="container mt-4">
        <h1>Data Pelanggan</h1>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>Alamat</th>
                    <th>Telepon</th>
                    <th>Jenis Kelamin</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($pelanggan as $p): ?>
                    <tr>
                        <td><?= $p->id ?></td>
                        <td><?= $p->nama ?></td>
                        <td><?= $p->email ?></td>
                        <td><?= $p->alamat ?></td>
                        <td><?= $p->telepon ?></td>
                        <td><?= $p->jenis_kelamin ?></td>
                        <td>
                            <a href="<?= base_url('pelanggan/edit/' . $p->id) ?>" class="btn btn-warning btn-sm">Edit</a>
                            <a href="<?= base_url('pelanggan/delete/' . $p->id) ?>" class="btn btn-danger btn-sm">Hapus</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

    <script src="<?= base_url('assets/js/jquery.min.js') ?>"></script>
    <script src="<?= base_url('assets/js/bootstrap.bundle.min.js') ?>"></script>
</body>
</html>
