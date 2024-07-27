<?php

namespace App\Models;

use CodeIgniter\Model;

class KaryawanModel extends Model
{
    protected $table = 'karyawan_dm';
    protected $primaryKey = 'id_karyawan';
    protected $allowedFields = ['id_karyawan', 'nama', 'jenis_kelamin', 'alamat', 'nomor_hp', 'posisi', 'gaji', 'status'];
}
