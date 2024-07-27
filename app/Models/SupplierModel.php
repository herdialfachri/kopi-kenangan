<?php

namespace App\Models;

use CodeIgniter\Model;

class SupplierModel extends Model
{
    protected $table = 'supplier_dm';
    protected $primaryKey = 'id_supplier';
    protected $allowedFields = ['kode_supplier', 'nama_supplier', 'alamat_supplier', 'kontak_supplier'];

    // Optional: Pagination limit
    protected $perPage = 8;
}
