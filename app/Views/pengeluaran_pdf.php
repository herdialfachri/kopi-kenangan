<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Laporan Pengeluaran</title>
    <style>
        body { font-family: Arial, sans-serif; }
        table { width: 100%; border-collapse: collapse; }
        th, td { border: 1px solid #000; padding: 8px; text-align: left; }
        th { background-color: #f2f2f2; }
    </style>
</head>
<body>
    <h2>Laporan Pengeluaran</h2>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Tanggal Keluar</th>
                <th>Kode Barang</th>
                <th>Nama Barang</th>
                <th>Jumlah Barang</th>
                <th>Keterangan</th>
                <th>Satuan</th>
                <th>Kategori Barang</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($pengeluaran as $row): ?>
            <tr>
                <td><?= $row['id_pengeluaran']; ?></td>
                <td><?= $row['tgl_keluar']; ?></td>
                <td><?= $row['kode_barang']; ?></td>
                <td><?= $row['nama_barang']; ?></td>
                <td><?= $row['jumlah_barang']; ?></td>
                <td><?= $row['keterangan']; ?></td>
                <td><?= $row['satuan']; ?></td>
                <td><?= $row['kategori_barang']; ?></td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>
