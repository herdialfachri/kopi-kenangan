<!-- Implementasi untuk view admin -->
<?= $this->extend('template/admin_template') ?>

<?= $this->section('title') ?>

Daftar Pengeluaran

<?= $this->endSection() ?>

<?= $this->section('content') ?>

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Pengeluaran</h1>
    <a href="<?= base_url('pengeluaran/exportPdf'); ?>" class="d-none d-sm-inline-block btn btn-sm btn-danger shadow-sm">
        <i class="fas fa-download fa-sm text-white-50"></i> Export PDF
    </a>
</div>

<!-- Content Row -->
<div class="row">

    <div class="col-xl-12 col-lg-7">
        <div class="card shadow mb-4">
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">Data Pengeluaran</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>ID Pengeluaran</th>
                                <th>Tanggal Keluar</th>
                                <th>Kode Barang</th>
                                <th>Nama Barang</th>
                                <th>Barang Keluar</th>
                                <th>Satuan</th>
                                <th>Keterangan</th>
                                <th>Kategori</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php if ($pengeluaran) : ?>
                                <?php foreach ($pengeluaran as $item) : ?>
                                    <tr>
                                        <td><?= $item['id_pengeluaran']; ?></td>
                                        <td><?= $item['tgl_keluar']; ?></td>
                                        <td><?= $item['kode_barang']; ?></td>
                                        <td><?= $item['nama_barang']; ?></td>
                                        <td><?= $item['jumlah_barang']; ?></td>
                                        <td><?= $item['satuan']; ?></td>
                                        <td><?= $item['keterangan']; ?></td>
                                        <td><?= $item['kategori_barang']; ?></td>
                                        <td>
                                            <a href="<?= base_url('pengeluaran/edit/' . $item['id_pengeluaran']); ?>" class="btn btn-warning btn-sm">
                                                <i class="fas fa-edit"></i>
                                            </a>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            <?php else : ?>
                                <tr>
                                    <td colspan="7" class="text-center">Data masih kosong!</td>
                                </tr>
                            <?php endif; ?>
                        </tbody>
                    </table>
                </div>
                <div class="d-flex justify-content-center">
                    <?= $pager->links() ?>
                </div>
            </div>
        </div>
    </div>


</div>

<?= $this->endSection() ?>