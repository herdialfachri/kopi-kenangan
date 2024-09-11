<!-- Implementasi untuk view admin -->
<?= $this->extend('template/admin_template') ?>

<?= $this->section('title') ?>

Daftar Barang

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
                <h6 class="m-0 font-weight-bold text-primary">Data Barang</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Kode Barang</th>
                                <th>Nama Barang</th>
                                <th>Kategori Barang</th>
                                <th>Harga Satuan</th>
                                <th>Satuan</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php if ($barang) : ?>
                                <?php foreach ($barang as $item) : ?>
                                    <tr>
                                        <td><?= $item['kode_barang']; ?></td>
                                        <td><?= $item['nama_barang']; ?></td>
                                        <td><?= $item['kategori_barang']; ?></td>
                                        <td><?= $item['harga_satuan']; ?></td>
                                        <td><?= $item['satuan']; ?></td>
                                    </tr>
                                <?php endforeach; ?>
                            <?php else : ?>
                                <tr>
                                    <td colspan="6" class="text-center">No data available</td>
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