<!DOCTYPE html>
<html>
<head>
    <title>Data Pemasukan</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .kop-surat {
            display: flex;
            align-items: center;
            margin-bottom: 20px;
            border-bottom: 2px solid #000;
            padding-bottom: 10px;
        }
        .kop-surat img {
            width: 100px;
            margin-right: 20px;
        }
        .kop-surat div {
            text-align: center;
            flex: 1;
        }
        .kop-surat h1, .kop-surat h2, .kop-surat p {
            margin: 0;
        }
        .kop-surat h1 {
            font-size: 22px;
            font-weight: bold;
        }
        .kop-surat h2 {
            font-size: 18px;
            margin-top: 5px;
        }
        .kop-surat p {
            font-size: 14px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid #000;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
        @media print {
            @page {
                size: landscape;
                margin: 1cm;
            }
            .page-break {
                page-break-before: always;
            }
        }
    </style>
</head>
<body>
    <div class="kop-surat">
        <!-- <img src="<?= base_url('/images/logokopi.png'); ?>" alt="Kop Surat"> -->
        <div>
            <h1>PABRIK KOPI DM SUKABUMI</h1>
            <h2>Jl. Babakan Kp. Liung Utut Ds. Babakan Kec. Cisaat Kab. Sukabumi</h2>
            <h2>WA: 085759584338</h2>
        </div>
    </div>

    <h2>Data Pemasukan</h2>
    <table>
        <thead>
            <tr>
                <th>ID Pemasok</th>
                <th>Tanggal Masuk</th>
                <th>Kode Barang</th>
                <th>Nama Barang</th>
                <th>Jumlah Barang</th>
                <th>Satuan</th>
                <th>Harga Satuan</th>
                <th>Total Harga</th>
                <th>Nama Supplier</th>
                <th>Kategori Barang</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($pemasokan as $item): ?>
            <tr>
                <td><?= $item['id_pemasok'] ?></td>
                <td><?= $item['tgl_masuk'] ?></td>
                <td><?= $item['kode_barang'] ?></td>
                <td><?= $item['nama_barang'] ?></td>
                <td><?= $item['jumlah_barang'] ?></td>
                <td><?= $item['satuan'] ?></td>
                <td><?= $item['harga_satuan'] ?></td>
                <td><?= $item['total_harga'] ?></td>
                <td><?= $item['nama_supplier'] ?></td>
                <td><?= $item['kategori_barang'] ?></td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>
