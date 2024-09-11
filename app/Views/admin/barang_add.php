<!-- Implementasi untuk view admin -->
<?= $this->extend('template/admin_template') ?>

<?= $this->section('title') ?>

Tambah Barang

<?= $this->endSection() ?>

<?= $this->section('content') ?>

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Barang</h1>
</div>

<!-- Content Row -->
<div class="row">

    <div class="col-xl-12 col-lg-7">
        <div class="card shadow mb-4">
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">Formulir Tambah Barang</h6>
            </div>
            <div class="card-body">
                <form action="<?= base_url('barang/store') ?>" method="post">
                    <div class="form-group">
                        <label for="kode_barang">Kode Barang</label>
                        <input type="number" class="form-control" id="kode_barang" name="kode_barang" required>
                    </div>
                    <div class="form-group">
                        <label for="nama_barang">Nama Barang</label>
                        <input type="text" class="form-control" id="nama_barang" name="nama_barang" required>
                    </div>
                    <div class="form-group">
                        <label for="kategori_barang">Kategori</label>
                        <select class="form-control" id="kategori_barang" name="kategori_barang" required>
                            <option value="Bahan Jadi">Bahan Jadi</option>
                            <option value="Bahan Baku">Bahan Baku</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="harga_satuan">Harga Satuan</label>
                        <input type="number" class="form-control" id="harga_satuan" name="harga_satuan" required>
                    </div>
                    <div class="form-group">
                        <label for="satuan">Satuan</label>
                        <select class="form-control" id="satuan" name="satuan" required>
                            <option value="Kg">Kg</option>
                            <option value="Pcs">Pcs</option>
                            <option value="Ton">Ton</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </form>
            </div>
        </div>
    </div>

</div>

<?= $this->endSection() ?>