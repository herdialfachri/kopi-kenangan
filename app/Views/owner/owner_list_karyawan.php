<?= $this->extend('template/owner_template') ?>

<?= $this->section('title') ?>

Daftar Karyawan

<?= $this->endSection() ?>

<?= $this->section('content') ?>

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Karyawan</h1>
    <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-danger shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Export PDF</a>
</div>

<!-- Content Row -->

<div class="row">

    <!-- Tabel Data Karyawan -->
    <div class="col-xl-12 col-lg-7">
        <div class="card shadow mb-4">
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">Tabel Daftar Karyawan</h6>
                <div class="dropdown no-arrow"></div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>ID Karyawan</th>
                                <th>Nama</th>
                                <th>Jenis Kelamin</th>
                                <th>Alamat</th>
                                <th>Nomor HP</th>
                                <th>Posisi</th>
                                <th>Gaji</th>
                                <th>Status</th>
                                <th>Opsi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php if (!empty($karyawans) && is_array($karyawans)) : ?>
                                <?php foreach ($karyawans as $karyawan) : ?>
                                    <tr>
                                        <td><?= esc($karyawan['id_karyawan']); ?></td>
                                        <td><?= esc($karyawan['nama']); ?></td>
                                        <td><?= esc($karyawan['jenis_kelamin']); ?></td>
                                        <td><?= esc($karyawan['alamat']); ?></td>
                                        <td><?= esc($karyawan['nomor_hp']); ?></td>
                                        <td><?= esc($karyawan['posisi']); ?></td>
                                        <td><?= esc($karyawan['gaji']); ?></td>
                                        <td><?= esc($karyawan['status']); ?></td>
                                        <td>
                                            <a href="<?= site_url('karyawan/edit/' . $karyawan['id_karyawan']); ?>" class="btn btn-warning btn-sm mb-2">
                                                <i class="fas fa-edit"></i>
                                            </a>
                                            <a href="<?= site_url('karyawan/delete/' . $karyawan['id_karyawan']); ?>" class="btn btn-danger btn-sm mb-2" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?');">
                                                <i class="fas fa-trash-alt"></i>
                                            </a>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            <?php else : ?>
                                <tr>
                                    <td colspan="9">Tidak ada data karyawan ditemukan.</td>
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