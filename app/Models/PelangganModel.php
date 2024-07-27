<?php

namespace App\Models;

use CodeIgniter\Model;

class PelangganModel extends Model
{
    protected $table = 'pelanggan_dm';
    protected $primaryKey = 'id_pelanggan';
    protected $allowedFields = ['kode_pelanggan', 'nama_pelanggan', 'alamat_pelanggan', 'kontak_pelanggan'];

    public function getPelanggan($limit, $offset)
    {
        return $this->findAll($limit, $offset);
    }
}
