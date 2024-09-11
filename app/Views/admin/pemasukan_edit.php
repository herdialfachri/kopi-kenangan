<!-- Implementasi untuk view admin -->
<?= $this->extend('template/admin_template') ?>

<?= $this->section('title') ?>

Edit Pemasukan

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
                <h6 class="m-0 font-weight-bold text-primary">Formulir Edit Pemasokan</h6>
            </div>
            <div class="card-body">
                <form action="<?= site_url('pemasokan/update/' . $pemasokan['id_pemasok']); ?>" method="post">
                    <div class="form-group">
                        <label for="tgl_masuk">Tanggal Masuk</label>
                        <input type="date" class="form-control" id="tgl_masuk" name="tgl_masuk" value="<?= $pemasokan['tgl_masuk']; ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="kode_barang">Kode Barang</label>
                        <select class="form-control" id="kode_barang" name="kode_barang" required onchange="updateNamaBarang()">
                            <?php foreach ($barangs as $barang) : ?>
                                <option value="<?= $barang['kode_barang']; ?>" data-nama="<?= $barang['nama_barang']; ?>" <?= $barang['kode_barang'] == $pemasokan['kode_barang'] ? 'selected' : ''; ?>><?= $barang['kode_barang']; ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="nama_barang">Nama Barang</label>
                        <input type="text" class="form-control" id="nama_barang" name="nama_barang" value="<?= $pemasokan['nama_barang']; ?>" required readonly>
                    </div>
                    <div class="form-group">
                        <label for="jumlah_barang">Jumlah Barang</label>
                        <input type="number" class="form-control" id="jumlah_barang" name="jumlah_barang" value="<?= $pemasokan['jumlah_barang']; ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="satuan">Satuan</label>
                        <select class="form-control" id="satuan" name="satuan" required>
                            <option value="Kg" <?= $pemasokan['satuan'] == 'Kg' ? 'selected' : ''; ?>>Kg</option>
                            <option value="Pcs" <?= $pemasokan['satuan'] == 'Pcs' ? 'selected' : ''; ?>>Pcs</option>
                            <option value="Ton" <?= $pemasokan['satuan'] == 'Ton' ? 'selected' : ''; ?>>Ton</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="harga_satuan">Harga Satuan</label>
                        <input type="number" class="form-control" id="harga_satuan" name="harga_satuan" value="<?= $pemasokan['harga_satuan']; ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="kategori_barang">Kategori</label>
                        <select class="form-control" id="kategori_barang" name="kategori_barang" required>
                            <option value="Bahan Jadi" <?= $pemasokan['kategori_barang'] == 'Bahan Jadi' ? 'selected' : ''; ?>>Bahan Jadi</option>
                            <option value="Bahan Baku" <?= $pemasokan['kategori_barang'] == 'Bahan Baku' ? 'selected' : ''; ?>>Bahan Baku</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="nama_supplier">Nama Supplier</label>
                        <input type="text" class="form-control" id="nama_supplier" name="nama_supplier" value="<?= $pemasokan['nama_supplier']; ?>" required>
                    </div>
                    <div class="d-flex justify-content-end">
                        <button type="submit" class="btn btn-primary mb-2">Perbarui Data</button>
                        <a href="<?= site_url('/pemasokan'); ?>" class="btn btn-primary mb-2 ml-2">Kembali</a>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script>
        function updateNamaBarang() {
            var select = document.getElementById('kode_barang');
            var namaBarang = select.options[select.selectedIndex].getAttribute('data-nama');
            document.getElementById('nama_barang').value = namaBarang;
        }
    </script>

</div>

<?= $this->endSection() ?>