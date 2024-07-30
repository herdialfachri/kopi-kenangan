<?php

namespace App\Models;

use CodeIgniter\Model;

class AdminModel extends Model
{
    protected $table = 'pengguna_dm';
    protected $primaryKey = 'id_pengguna';
    protected $allowedFields = ['nama_pengguna', 'sandi_pengguna', 'peran'];

    protected $beforeInsert = ['hashPassword'];
    protected $beforeUpdate = ['hashPassword'];

    protected function hashPassword(array $data)
    {
        if (isset($data['data']['sandi_pengguna'])) {
            $data['data']['sandi_pengguna'] = md5($data['data']['sandi_pengguna']);
        }
        return $data;
    }
}
