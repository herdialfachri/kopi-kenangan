<?php

namespace App\Controllers;

use App\Models\PemasokanModel;
use App\Models\PengeluaranModel;
use App\Models\TotalStokModel;

class StokController extends BaseController
{
    protected $pemasokanModel;
    protected $pengeluaranModel;
    protected $totalStokModel;

    public function __construct()
    {
        $this->pemasokanModel = new PemasokanModel();
        $this->pengeluaranModel = new PengeluaranModel();
        $this->totalStokModel = new TotalStokModel();
    }

    public function addPemasokan()
    {
        // Logic untuk menambahkan pemasokan
        $data = [
            'id_pemasok' => $this->request->getPost('id_pemasok'),
            'tgl_masuk' => $this->request->getPost('tgl_masuk'),
            'kode_barang' => $this->request->getPost('kode_barang'),
            'nama_barang' => $this->request->getPost('nama_barang'),
            'jumlah_barang' => $this->request->getPost('jumlah_barang'),
            'harga_satuan' => $this->request->getPost('harga_satuan'),
            'total_harga' => $this->request->getPost('harga_satuan') * $this->request->getPost('jumlah_barang'),
            'satuan' => $this->request->getPost('satuan'),
            'nama_supplier' => $this->request->getPost('nama_supplier'),
            'kategori_barang' => $this->request->getPost('kategori_barang')
        ];

        $this->pemasokanModel->save($data);
        $this->pemasokanModel->updateTotalStok($data['kode_barang'], $data['jumlah_barang'], $data['kategori_barang']);

        return redirect()->to('/pemasokan'); // Redirect ke halaman yang sesuai
    }

    public function addPengeluaran()
    {
        // Logic untuk menambahkan pengeluaran
        $data = [
            'id_pengeluaran' => $this->request->getPost('id_pengeluaran'),
            'tgl_keluar' => $this->request->getPost('tgl_keluar'),
            'kode_barang' => $this->request->getPost('kode_barang'),
            'nama_barang' => $this->request->getPost('nama_barang'),
            'jumlah_barang' => $this->request->getPost('jumlah_barang'),
            'keterangan' => $this->request->getPost('keterangan'),
            'satuan' => $this->request->getPost('satuan'),
            'kategori_barang' => $this->request->getPost('kategori_barang')
        ];
    
        $this->pengeluaranModel->save($data);
        // Tambahkan jumlahBarangOld jika diperlukan
        $jumlahBarangOld = 0; // Atur ini sesuai dengan kebutuhan Anda
        $this->pengeluaranModel->updateTotalStok($data['kode_barang'], $data['jumlah_barang'], $data['kategori_barang'], $jumlahBarangOld, $data['nama_barang']);
    
        return redirect()->to('/pengeluaran_admin'); // Redirect ke halaman yang sesuai
    }

    public function index()
    {
        $data['total_stok'] = $this->totalStokModel->getTotalStok();
        return view('admin/barang_total', $data);
    }

    public function index_owner()
    {
        $data['total_stok'] = $this->totalStokModel->getTotalStok();
        return view('owner/owner_barang', $data);
    }
}
