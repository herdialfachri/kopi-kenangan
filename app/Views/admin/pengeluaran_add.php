<!-- Implementasi untuk view admin -->
<?= $this->extend('template/admin_template') ?>

<?= $this->section('title') ?>

Tambah Pengeluaran

<?= $this->endSection() ?>

<?= $this->section('content') ?>

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Pengeluaran</h1>
</div>

<!-- Content Row -->
<div class="row">

    <div class="col-xl-12 col-lg-7">
        <div class="card shadow mb-4">
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">Formulir Tambah Pengeluaran</h6>
            </div>
            <div class="card-body">
                <form action="<?= site_url('pengeluaran/store'); ?>" method="post">
                    <div class="form-group">
                        <label for="tgl_keluar">Tanggal Keluar</label>
                        <input type="date" class="form-control" id="tgl_keluar" name="tgl_keluar" required>
                    </div>
                    <div class="form-group">
                        <label for="kode_barang">Kode Barang</label>
                        <select class="form-control" id="kode_barang" name="kode_barang" required onchange="updateNamaBarang()">
                            <?php foreach ($barangs as $barang) : ?>
                                <option value="<?= $barang['kode_barang']; ?>" data-nama="<?= $barang['nama_barang']; ?>"><?= $barang['kode_barang']; ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="nama_barang">Nama Barang</label>
                        <input type="text" class="form-control" id="nama_barang" name="nama_barang" required readonly>
                    </div>
                    <div class="form-group">
                        <label for="jumlah_barang">Jumlah Barang</label>
                        <input type="number" class="form-control" id="jumlah_barang" name="jumlah_barang" required>
                    </div>
                    <div class="form-group">
                        <label for="keterangan">Keterangan</label>
                        <textarea class="form-control" id="keterangan" name="keterangan" required></textarea>
                    </div>
                    <div class="form-group">
                        <label for="satuan">Satuan</label>
                        <select class="form-control" id="satuan" name="satuan" required>
                            <option value="Kg">Kg</option>
                            <option value="Pcs">Pcs</option>
                            <option value="Ton">Ton</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="kategori_barang">Kategori</label>
                        <select class="form-control" id="kategori_barang" name="kategori_barang" required>
                            <option value="Bahan Jadi">Bahan Jadi</option>
                            <option value="Bahan Baku">Bahan Baku</option>
                        </select>
                    </div>
                    <div class="d-flex justify-content-end">
                        <button type="submit" class="btn btn-primary mb-2">Tambah Data Pengeluaran</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script>
        function updateNamaBarang() {
            var kodeBarang = document.getElementById('kode_barang').value;
            var namaBarang = '';

            switch (kodeBarang) {
                case '100':
                    namaBarang = 'Biji Kopi';
                    break;
                case '200':
                    namaBarang = 'Gula Pasir';
                    break;
                case '300':
                    namaBarang = 'Creamer Bubuk';
                    break;
                case '400':
                    namaBarang = 'Kopi Sachet';
                    break;
                default:
                    var selectedOption = document.querySelector('#kode_barang option[value="' + kodeBarang + '"]');
                    if (selectedOption) {
                        namaBarang = selectedOption.getAttribute('data-nama');
                    }
                    break;
            }

            document.getElementById('nama_barang').value = namaBarang;
        }

        // Memanggil fungsi untuk set nilai awal
        document.addEventListener('DOMContentLoaded', function() {
            updateNamaBarang();
        });
    </script>

</div>

<?= $this->endSection() ?>