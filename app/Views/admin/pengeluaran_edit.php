<!-- Implementasi untuk view admin -->
<?= $this->extend('template/admin_template') ?>

<?= $this->section('title') ?>

Edit Pengeluaran

<?= $this->endSection() ?>

<?= $this->section('content') ?>

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Pemasukan</h1>
</div>

<!-- Content Row -->
<div class="row">

    <div class="col-xl-12 col-lg-7">
        <div class="card shadow mb-4">
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">Formulir Edit Pengeluaran</h6>
            </div>
            <div class="card-body">
                <form action="<?= site_url('pengeluaran/update/' . $pengeluaran['id_pengeluaran']); ?>" method="post">
                    <input type="hidden" name="id_pengeluaran" value="<?= $pengeluaran['id_pengeluaran']; ?>">
                    <div class="form-group">
                        <label for="tgl_keluar">Tanggal Keluar</label>
                        <input type="date" class="form-control" id="tgl_keluar" name="tgl_keluar" value="<?= $pengeluaran['tgl_keluar']; ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="kode_barang">Kode Barang</label>
                        <select class="form-control" id="kode_barang" name="kode_barang" required onchange="updateNamaBarang()">
                            <?php foreach ($barangs as $barang) : ?>
                                <option value="<?= $barang['kode_barang']; ?>" <?= ($barang['kode_barang'] == $pengeluaran['kode_barang']) ? 'selected' : ''; ?> data-nama="<?= $barang['nama_barang']; ?>"><?= $barang['kode_barang']; ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="nama_barang">Nama Barang</label>
                        <input type="text" class="form-control" id="nama_barang" name="nama_barang" value="<?= $pengeluaran['nama_barang']; ?>" required readonly>
                    </div>
                    <div class="form-group">
                        <label for="jumlah_barang">Jumlah Barang</label>
                        <input type="number" class="form-control" id="jumlah_barang" name="jumlah_barang" value="<?= $pengeluaran['jumlah_barang']; ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="kategori_barang">Kategori</label>
                        <select class="form-control" id="kategori_barang" name="kategori_barang" required>
                            <option value="Bahan Jadi">Bahan Jadi</option>
                            <option value="Bahan Baku">Bahan Baku</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="satuan">Satuan</label>
                        <select class="form-control" id="satuan" name="satuan" required>
                            <option value="Kg" <?= ($pengeluaran['satuan'] == 'Kg') ? 'selected' : ''; ?>>Kg</option>
                            <option value="Pcs" <?= ($pengeluaran['satuan'] == 'Pcs') ? 'selected' : ''; ?>>Pcs</option>
                            <option value="Ton" <?= ($pengeluaran['satuan'] == 'Ton') ? 'selected' : ''; ?>>Ton</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="keterangan">Keterangan</label>
                        <input type="text" class="form-control" id="keterangan" name="keterangan" value="<?= $pengeluaran['keterangan']; ?>" required>
                    </div>
                    <div class="d-flex justify-content-end">
                        <button type="submit" class="btn btn-primary mb-2">Update Data Pengeluaran</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script>
        function updateNamaBarang() {
            var kodeBarang = document.getElementById('kode_barang');
            var namaBarang = document.getElementById('nama_barang');
            namaBarang.value = kodeBarang.options[kodeBarang.selectedIndex].getAttribute('data-nama');
        }
    </script>

</div>

<?= $this->endSection() ?>