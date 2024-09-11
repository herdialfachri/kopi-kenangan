<?= $this->extend('template/owner_template') ?>

<?= $this->section('title') ?>

Daftar Pengguna

<?= $this->endSection() ?>

<?= $this->section('content') ?>

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Pengguna</h1>
    <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-danger shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Export PDF</a>
</div>

<!-- Content Row -->

<div class="row">

    <!-- Tabel Data Karyawan -->
    <div class="col-xl-12 col-lg-7">
        <div class="card shadow mb-4">
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">Tabel Daftar Pengguna Aplikasi</h6>
                <div class="dropdown no-arrow"></div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>ID Admin</th>
                                <th>Nama Pengguna</th>
                                <th>Peran</th>
                                <th>Opsi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php if (!empty($admins) && is_array($admins)) : ?>
                                <?php foreach ($admins as $admin) : ?>
                                    <tr>
                                        <td><?= esc($admin['id_pengguna']); ?></td>
                                        <td><?= esc($admin['nama_pengguna']); ?></td>
                                        <td><?= esc($admin['peran']); ?></td>
                                        <td>
                                            <a href="<?= site_url('admin/edit/' . $admin['id_pengguna']); ?>" class="btn btn-warning btn-sm mb-2">
                                                <i class="fas fa-edit"></i>
                                            </a>
                                            <a href="<?= site_url('admin/delete/' . $admin['id_pengguna']); ?>" class="btn btn-danger btn-sm mb-2" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?');">
                                                <i class="fas fa-trash-alt"></i>
                                            </a>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            <?php else : ?>
                                <tr>
                                    <td colspan="3">Tidak ada data admin ditemukan.</td>
                                </tr>
                            <?php endif; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

</div>

<?= $this->endSection() ?>