<?php

namespace App\Models;

use CodeIgniter\Model;

class TotalStokModel extends Model
{
    protected $table = 'total_stok_barang';
    protected $primaryKey = 'kode_barang';
    protected $allowedFields = ['kode_barang', 'nama_barang', 'total_stok', 'kategori_barang'];

    public function getTotalStok()
    {
        return $this->findAll();
    }
}
