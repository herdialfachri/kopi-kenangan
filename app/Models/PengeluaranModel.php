<?php

namespace App\Models;

use CodeIgniter\Model;

class PengeluaranModel extends Model
{
    protected $table = 'pengeluaran_dm';
    protected $primaryKey = 'id_pengeluaran';
    protected $allowedFields = ['tgl_keluar', 'kode_barang', 'nama_barang', 'jumlah_barang', 'keterangan', 'satuan'];
}
 