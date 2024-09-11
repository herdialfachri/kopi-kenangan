<?= $this->extend('template/owner_template') ?>

<?= $this->section('title') ?>

Edit Karyawan

<?= $this->endSection() ?>

<?= $this->section('content') ?>

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Karyawan</h1>
</div>

<!-- Content Row -->

<div class="row">

    <!-- Edit Data Karyawan -->
    <div class="col-xl-12 col-lg-7">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Formulir Ubah Data</h6>
            </div>
            <div class="card-body">
                <form action="/karyawan/update/<?= $karyawan['id_karyawan']; ?>" method="post">
                    <div class="form-group">
                        <label for="nama">Nama:</label>
                        <input type="text" class="form-control" id="nama" name="nama" value="<?= esc($karyawan['nama']); ?>">
                    </div>
                    <div class="form-group">
                        <label for="jenis_kelamin">Jenis Kelamin:</label>
                        <select class="form-control" id="jenis_kelamin" name="jenis_kelamin">
                            <option value="L" <?= $karyawan['jenis_kelamin'] == 'L' ? 'selected' : ''; ?>>L</option>
                            <option value="P" <?= $karyawan['jenis_kelamin'] == 'P' ? 'selected' : ''; ?>>P</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="alamat">Alamat:</label>
                        <textarea class="form-control" id="alamat" name="alamat"><?= esc($karyawan['alamat']); ?></textarea>
                    </div>
                    <div class="form-group">
                        <label for="nomor_hp">Nomor HP:</label>
                        <input type="text" class="form-control" id="nomor_hp" name="nomor_hp" value="<?= esc($karyawan['nomor_hp']); ?>">
                    </div>
                    <div class="form-group">
                        <label for="posisi">Posisi:</label>
                        <input type="text" class="form-control" id="posisi" name="posisi" value="<?= esc($karyawan['posisi']); ?>">
                    </div>
                    <div class="form-group">
                        <label for="gaji">Gaji:</label>
                        <input type="number" class="form-control" id="gaji" name="gaji" value="<?= esc($karyawan['gaji']); ?>">
                    </div>
                    <div class="form-group">
                        <label for="status">Status:</label>
                        <select class="form-control" id="status" name="status">
                            <option value="Aktif" <?= $karyawan['status'] == 'Aktif' ? 'selected' : ''; ?>>Aktif</option>
                            <option value="Tidak Aktif" <?= $karyawan['status'] == 'Tidak Aktif' ? 'selected' : ''; ?>>Tidak Aktif</option>
                            <option value="Resign" <?= $karyawan['status'] == 'Resign' ? 'selected' : ''; ?>>Resign</option>
                        </select>
                    </div>
                    <div class="d-flex justify-content-end">
                        <a href="/daftar_karyawan" class="btn btn-primary mr-2">Kembali</a>
                        <button type="submit" class="btn btn-primary">Perbarui Data</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection() ?>