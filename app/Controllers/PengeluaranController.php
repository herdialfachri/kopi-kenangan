<?php

namespace App\Controllers;

use App\Models\PengeluaranModel;
use App\Models\BarangModel;

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

        return view('admin/pengeluaran_view', $data);
    }

    public function create()
    {
        $barangModel = new BarangModel();
        $data['barangs'] = $barangModel->getAllBarang();

        return view('admin/pengeluaran_add', $data);
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
            'satuan' => $this->request->getPost('satuan'),
        ];

        // Simpan data
        if ($model->save($data)) {
            return redirect()->to('/pengeluaran_admin');
        } else {
            return redirect()->back()->withInput()->with('errors', $model->errors());
        }
    }

    public function edit($id)
    {
        $model = new PengeluaranModel();
        $barangModel = new BarangModel();

        $data['pengeluaran'] = $model->find($id);
        $data['barangs'] = $barangModel->getAllBarang();

        return view('admin/pengeluaran_edit', $data);
    }

    public function update($id)
    {
        $model = new PengeluaranModel();

        $oldData = $model->find($id);
        $jumlahBarangOld = $oldData['jumlah_barang'];

        $data = [
            'tgl_keluar' => $this->request->getPost('tgl_keluar'),
            'kode_barang' => $this->request->getPost('kode_barang'),
            'nama_barang' => $this->request->getPost('nama_barang'),
            'jumlah_barang' => $this->request->getPost('jumlah_barang'),
            'keterangan' => $this->request->getPost('keterangan'),
            'satuan' => $this->request->getPost('satuan'),
            'kategori_barang' => $this->request->getPost('kategori_barang')
        ];

        if ($model->update($id, $data)) {
            $model->updateTotalStok($data['kode_barang'], $data['jumlah_barang'], $data['kategori_barang'], $jumlahBarangOld, $data['nama_barang']);
            return redirect()->to('/pengeluaran_admin');
        } else {
            return redirect()->back()->withInput()->with('errors', $model->errors());
        }
    }
}
