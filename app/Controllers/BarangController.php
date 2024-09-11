<?php

namespace App\Controllers;

use App\Models\BarangModel;

class BarangController extends BaseController
{
    public function index()
    {
        $barangModel = new BarangModel();
        $currentPage = $this->request->getVar('page') ? $this->request->getVar('page') : 1;

        $data = [
            'barang' => $barangModel->paginate(8),
            'pager' => $barangModel->pager,
            'currentPage' => $currentPage
        ];

        return view('admin/barang_view', $data);
    }

    // public function view_barang()
    // {
    //     return view('owner_barang');
    // }

    public function create()
    {
        return view('admin/barang_add');
    }

    // public function total()
    // {
    //     return view('barang_total');
    // }

    public function store()
    {
        $model = new BarangModel();

        $data = [
            'kode_barang' => $this->request->getPost('kode_barang'),
            'nama_barang' => $this->request->getPost('nama_barang'),
            'kategori_barang' => $this->request->getPost('kategori_barang'),
            'harga_satuan' => $this->request->getPost('harga_satuan'),
            'satuan' => $this->request->getPost('satuan'),
            'stok_awal' => $this->request->getPost('stok_awal'),
            'stok_sekarang' => $this->request->getPost('stok_sekarang'),
        ];

        $model->save($data);
        return redirect()->to('/barang');
    }
}
