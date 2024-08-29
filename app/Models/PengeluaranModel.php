<?php

namespace App\Models;

use CodeIgniter\Model;

class PengeluaranModel extends Model
{
    protected $table = 'pengeluaran_dm';
    protected $primaryKey = 'id_pengeluaran'; // Tambahkan ini
    protected $allowedFields = ['id_pengeluaran', 'tgl_keluar', 'kode_barang', 'nama_barang', 'jumlah_barang', 'keterangan', 'satuan', 'kategori_barang'];

    public function updateTotalStok($kode_barang, $jumlah_barang, $kategori_barang, $jumlahBarangOld, $nama_barang)
    {

        $totalStokModel = new \App\Models\TotalStokModel();
        
        $totalStok = $totalStokModel->where('kode_barang', $kode_barang)->first();
        
        if ($totalStok) {
            $totalStok['total_stok'] += ($jumlahBarangOld - $jumlah_barang);
            $totalStokModel->save($totalStok);
        } else {
            $totalStokModel->insert([
                'kode_barang' => $kode_barang,
                'nama_barang' => $nama_barang,
                'total_stok' => -$jumlah_barang,
                'kategori_barang' => $kategori_barang
            ]);
        }
    }
}
