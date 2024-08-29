<?php

namespace App\Controllers;

use App\Models\KaryawanModel;

class KaryawanController extends BaseController
{
    public function index()
    {
        $karyawanModel = new KaryawanModel();
        $data['karyawans'] = $karyawanModel->findAll();
        return view('owner_list_karyawan', $data);
    }

    public function edit($id)
    {
        $karyawanModel = new KaryawanModel();
        $data['karyawan'] = $karyawanModel->find($id);

        return view('owner_edit_karyawan', $data);
    }

    public function update($id)
    {
        $karyawanModel = new KaryawanModel();

        $data = [
            'nama' => $this->request->getPost('nama'),
            'jenis_kelamin' => $this->request->getPost('jenis_kelamin'),
            'alamat' => $this->request->getPost('alamat'),
            'nomor_hp' => $this->request->getPost('nomor_hp'),
            'posisi' => $this->request->getPost('posisi'),
            'gaji' => $this->request->getPost('gaji'),
            'status' => $this->request->getPost('status')
        ];

        $karyawanModel->update($id, $data);

        return redirect()->to('/daftar_karyawan');
    }

    public function delete($id)
    {
        $karyawanModel = new KaryawanModel();
        $karyawanModel->delete($id);

        return redirect()->to('/daftar_karyawan');
    }

    public function create()
    {
        return view('owner_add_karyawan');
    }

    public function store()
    {
        $karyawanModel = new KaryawanModel();

        $data = [
            'nama' => $this->request->getPost('nama'),
            'jenis_kelamin' => $this->request->getPost('jenis_kelamin'),
            'alamat' => $this->request->getPost('alamat'),
            'nomor_hp' => $this->request->getPost('nomor_hp'),
            'posisi' => $this->request->getPost('posisi'),
            'gaji' => $this->request->getPost('gaji'),
            'status' => $this->request->getPost('status')
        ];

        $karyawanModel->save($data);

        return redirect()->to('/daftar_karyawan');
    }
}
