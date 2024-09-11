<?php

namespace App\Controllers;

use App\Models\PelangganModel;

class PelangganController extends BaseController
{
    public function index()
    {
        $pelangganModel = new PelangganModel();
        $currentPage = $this->request->getVar('page') ? $this->request->getVar('page') : 1;

        $data = [
            'pelanggan' => $pelangganModel->paginate(8),
            'pager' => $pelangganModel->pager,
            'currentPage' => $currentPage
        ];

        return view('admin/pelanggan_view', $data);
    }

    public function create()
    {
        return view('admin/pelanggan_tambah');
    }

    public function store()
    {
        $pelangganModel = new PelangganModel();

        $data = [
            'kode_pelanggan' => $this->request->getPost('kode_pelanggan'),
            'nama_pelanggan' => $this->request->getPost('nama_pelanggan'),
            'alamat_pelanggan' => $this->request->getPost('alamat_pelanggan'),
            'kontak_pelanggan' => $this->request->getPost('kontak_pelanggan')
        ];

        $pelangganModel->save($data);

        return redirect()->to('/pelanggan'); // Redirect ke halaman daftar pelanggan
    }
}
