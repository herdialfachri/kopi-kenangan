<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Laporan Pemasokan</title>
    <style>
        body { font-family: Arial, sans-serif; }
        table { width: 100%; border-collapse: collapse; }
        th, td { border: 1px solid #000; padding: 8px; text-align: left; }
        th { background-color: #f2f2f2; }
    </style>
</head>
<body>
    <h2>Laporan Pemasokan</h2>
    <table>
        <thead>
            <tr>
                <th>ID Pemasok</th>
                <th>Tanggal Masuk</th>
                <th>Kode Barang</th>
                <th>Nama Barang</th>
                <th>Jumlah Barang</th>
                <th>Harga Satuan</th>
                <th>Satuan</th>
                <th>Total Harga</th>
                <th>Nama Supplier</th>
                <th>Kategori Barang</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($pemasokan as $row): ?>
            <tr>
                <td><?= $row['id_pemasok']; ?></td>
                <td><?= $row['tgl_masuk']; ?></td>
                <td><?= $row['kode_barang']; ?></td>
                <td><?= $row['nama_barang']; ?></td>
                <td><?= $row['jumlah_barang']; ?></td>
                <td><?= number_format($row['harga_satuan']); ?></td>
                <td><?= $row['satuan']; ?></td>
                <td><?= number_format($row['total_harga']); ?></td>
                <td><?= $row['nama_supplier']; ?></td>
                <td><?= $row['kategori_barang']; ?></td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>
