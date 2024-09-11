<?php

namespace App\Controllers;

use App\Models\AdminModel;

class AdminController extends BaseController
{
    protected $adminModel;

    public function __construct()
    {
        $this->adminModel = new AdminModel();
    }

    public function index()
    {
        $data['admins'] = $this->adminModel->findAll();
        return view('owner/owner_list_admin', $data);
    }

    public function create()
    {
        return view('owner/owner_add_admin');
    }

    public function store()
    {
        $data = [
            'nama_pengguna' => $this->request->getPost('nama_pengguna'),
            'sandi_pengguna' => $this->request->getPost('sandi_pengguna'),
            'peran' => $this->request->getPost('peran')
        ];
        $this->adminModel->save($data);
        return redirect()->to('/admin/list');
    }

    public function edit($id)
    {
        $data['admin'] = $this->adminModel->find($id);
        return view('owner/owner_edit_admin', $data);
    }

    public function update($id)
    {
        $data = [
            'id_pengguna' => $id,
            'nama_pengguna' => $this->request->getPost('nama_pengguna'),
            'sandi_pengguna' => $this->request->getPost('sandi_pengguna'),
            'peran' => $this->request->getPost('peran')
        ];
        $this->adminModel->save($data);
        return redirect()->to('/admin/list');
    }

    public function delete($id)
    {
        $this->adminModel->delete($id);
        return redirect()->to('/admin/list');
    }
}
