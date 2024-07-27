<?php

namespace App\Models;

use CodeIgniter\Model;

class PemasokanModel extends Model
{
    protected $table = 'pemasokan_dm';
    protected $primaryKey = 'id_pemasok';
    protected $allowedFields = [
        'id_pemasok', 'tgl_masuk', 'kode_barang', 'nama_barang', 
        'jumlah_barang', 'harga_satuan', 'satuan', 'total_harga', 'nama_supplier'
    ];
}
