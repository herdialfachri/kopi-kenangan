<?php

namespace App\Models;

use CodeIgniter\Model;

class BarangModel extends Model
{
    protected $table = 'barang_dm';
    protected $primaryKey = 'id_barang';
    protected $allowedFields = ['kode_barang', 'nama_barang', 'kategori_barang', 'harga_satuan', 'satuan', 'stok_awal', 'stok_sekarang'];
}
