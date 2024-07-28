<?php

namespace App\Controllers;

use App\Models\PemasokanModel;
use App\Models\BarangModel;

class PemasokanController extends BaseController
{
    public function index()
    {
        $model = new PemasokanModel();

        $perPage = 8;
        $currentPage = $this->request->getVar('page') ? (int)$this->request->getVar('page') : 1;

        $data['pemasokan'] = $model->orderBy('id_pemasok', 'DESC')->paginate($perPage);
        $data['pager'] = $model->pager;
        $data['currentPage'] = $currentPage;
        $data['perPage'] = $perPage;

        return view('pemasukan_view', $data);
    }

    public function create()
    {
        $barangModel = new BarangModel();
        $data['barangs'] = $barangModel->getAllBarang();
        
        return view('pemasukan_add', $data);
    }

    public function store()
    {
        $model = new PemasokanModel();

        $data = [
            'id_pemasok' => $this->request->getPost('id_pemasok'),
            'tgl_masuk' => $this->request->getPost('tgl_masuk'),
            'kode_barang' => $this->request->getPost('kode_barang'),
            'nama_barang' => $this->request->getPost('nama_barang'),
            'jumlah_barang' => $this->request->getPost('jumlah_barang'),
            'satuan' => $this->request->getPost('satuan'),
            'harga_satuan' => $this->request->getPost('harga_satuan'),
            'total_harga' => $this->request->getPost('harga_satuan') * $this->request->getPost('jumlah_barang'),
            'nama_supplier' => $this->request->getPost('nama_supplier')
        ];

        $model->insert($data);

        return redirect()->to('/pemasokan');
    }
}
