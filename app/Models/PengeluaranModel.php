<?php

namespace App\Models;

use CodeIgniter\Model;

class PengeluaranModel extends Model
{
    protected $table = 'pengeluaran_dm';
    protected $allowedFields = ['id_pengeluaran', 'tgl_keluar', 'kode_barang', 'nama_barang', 'jumlah_barang', 'keterangan', 'satuan', 'kategori_barang'];

    public function updateTotalStok($kode_barang, $jumlah_barang, $kategori_barang)
    {
        $db = \Config\Database::connect();
        $totalStokModel = new \App\Models\TotalStokModel();
        
        $totalStok = $totalStokModel->where('kode_barang', $kode_barang)->first();
        
        if ($totalStok) {
            $totalStok['total_stok'] -= $jumlah_barang;
            $totalStokModel->save($totalStok);
        } else {
            $totalStokModel->insert([
                'kategori_barang' => $kategori_barang
            ]);
        }
    }
}
