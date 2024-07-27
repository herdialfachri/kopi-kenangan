<?php

namespace App\Controllers;

use App\Models\PengeluaranModel;

class PengeluaranController extends BaseController
{
    public function index()
    {
        $model = new PengeluaranModel();
        
        $perPage = 8;
        $currentPage = $this->request->getVar('page') ? (int)$this->request->getVar('page') : 1;

        $data['pengeluaran'] = $model->orderBy('id_pengeluaran', 'DESC')->paginate($perPage);
        $data['pager'] = $model->pager;
        $data['currentPage'] = $currentPage;
        $data['perPage'] = $perPage;

        return view('pengeluaran_view', $data);
    }

    public function create()
    {
        return view('pengeluaran_add');
    }

    // Menyimpan data ke database
    public function save()
    {
        $model = new PengeluaranModel();

        // Validasi input
        $data = [
            'tgl_keluar' => $this->request->getPost('tgl_keluar'),
            'kode_barang' => $this->request->getPost('kode_barang'),
            'nama_barang' => $this->request->getPost('nama_barang'),
            'jumlah_barang' => $this->request->getPost('jumlah_barang'),
            'keterangan' => $this->request->getPost('keterangan'),
        ];

        // Simpan data
        if ($model->save($data)) {
            return redirect()->to('/pengeluaran_admin');
        } else {
            return redirect()->back()->withInput()->with('errors', $model->errors());
        }
    }
}
