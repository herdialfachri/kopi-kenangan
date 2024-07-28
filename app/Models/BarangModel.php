<?php

namespace App\Models;

use CodeIgniter\Model;

class BarangModel extends Model
{
    protected $table = 'barang_dm';
    protected $primaryKey = 'id_barang';
    protected $allowedFields = ['id_barang', 'kode_barang', 'nama_barang', 'kategori_barang', 'harga_satuan', 'satuan'];

    public function getAllBarang()
    {
        return $this->findAll(); 
    }
}
 