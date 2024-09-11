<?= $this->extend('template/owner_template') ?>

<?= $this->section('title') ?>

Tambah Pengguna

<?= $this->endSection() ?>

<?= $this->section('content') ?>

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Pengguna</h1>
</div>

<!-- Content Row -->

<div class="row">

    <!-- Formulir Tambah Admin -->
    <div class="col-xl-12 col-lg-7">
        <div class="card shadow mb-4">
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">Formulir Tambah Pengguna Baru</h6>
            </div>
            <div class="card-body">
                <form action="<?= site_url('admin/store'); ?>" method="post">
                    <div class="form-group">
                        <label for="nama_pengguna">Nama Pengguna</label>
                        <input type="text" class="form-control" id="nama_pengguna" name="nama_pengguna" required>
                    </div>
                    <div class="form-group">
                        <label for="sandi_pengguna">Sandi Pengguna</label>
                        <input type="password" class="form-control" id="sandi_pengguna" name="sandi_pengguna" required>
                    </div>
                    <div class="form-group">
                        <label for="peran">Peran</label>
                        <select class="form-control" id="peran" name="peran">
                            <option value="1">Owner</option>
                            <option value="2">Admin</option>
                        </select>
                    </div>
                    <div class="d-flex justify-content-end">
                        <button type="submit" class="btn btn-primary mb-2">Tambah Pengguna</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

</div>

<?= $this->endSection() ?>