<?php

namespace App\Models;

use CodeIgniter\Model;

class PemasokanModel extends Model
{
    protected $table = 'pemasokan_dm';
    protected $primaryKey = 'id_pemasok';

    protected $allowedFields = [
        'id_pemasok',
        'tgl_masuk',
        'kode_barang',
        'nama_barang',
        'jumlah_barang',
        'satuan', 
        'harga_satuan',
        'total_harga',
        'nama_supplier',
        'kategori_barang'
    ];

    public function updateTotalStok($kode_barang, $jumlah_barang, $kategori_barang)
    {
        $db = \Config\Database::connect();
        $totalStokModel = new \App\Models\TotalStokModel();
        
        $totalStok = $totalStokModel->where('kode_barang', $kode_barang)->first();
        
        if ($totalStok) {
            $totalStok['total_stok'] += $jumlah_barang;
            $totalStokModel->save($totalStok);
        } else {
            $totalStokModel->insert([
                'kode_barang' => $kode_barang,
                'nama_barang' => $this->where('kode_barang', $kode_barang)->first()['nama_barang'],
                'total_stok' => $jumlah_barang,
                'kategori_barang' => $kategori_barang
            ]);
        }
    }
}
