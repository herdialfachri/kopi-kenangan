<!-- Implementasi untuk view admin -->
<?= $this->extend('template/admin_template') ?>

<?= $this->section('title') ?>

Tambah Supplier

<?= $this->endSection() ?>

<?= $this->section('content') ?>

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Supplier</h1>
    <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-danger shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Export PDF</a>
</div>

<!-- Content Row -->
<div class="row">

    <div class="col-xl-12 col-lg-7">
        <div class="card shadow mb-4">
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">Formulir Tambah Supplier</h6>
            </div>
            <div class="card-body">
                <form action="<?= site_url('supplier/store'); ?>" method="post">
                    <div class="form-group">
                        <label for="kode_supplier">Kode Supplier</label>
                        <input type="text" class="form-control" id="kode_supplier" name="kode_supplier" required>
                    </div>
                    <div class="form-group">
                        <label for="nama_supplier">Nama Supplier</label>
                        <input type="text" class="form-control" id="nama_supplier" name="nama_supplier" required>
                    </div>
                    <div class="form-group">
                        <label for="alamat_supplier">Alamat Supplier</label>
                        <textarea class="form-control" id="alamat_supplier" name="alamat_supplier" required></textarea>
                    </div>
                    <div class="form-group">
                        <label for="kontak_supplier">Kontak Supplier</label>
                        <input type="text" class="form-control" id="kontak_supplier" name="kontak_supplier" required>
                    </div>
                    <div class="d-flex justify-content-end">
                        <button type="submit" class="btn btn-primary mb-2">Tambahkan Supplier Baru</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection() ?>