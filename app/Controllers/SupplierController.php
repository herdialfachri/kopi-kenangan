<?php

namespace App\Controllers;

use App\Models\SupplierModel;

class SupplierController extends BaseController
{
    public function index()
    {
        $model = new SupplierModel();
        
        $data = [
            'suppliers' => $model->paginate(8),
            'pager' => $model->pager
        ];

        return view('supplier_view', $data);
    }

    public function create()
    {
        return view('supplier_add');
    }

    public function store()
    {
        $model = new SupplierModel();

        $data = [
            'kode_supplier' => $this->request->getPost('kode_supplier'),
            'nama_supplier' => $this->request->getPost('nama_supplier'),
            'alamat_supplier' => $this->request->getPost('alamat_supplier'),
            'kontak_supplier' => $this->request->getPost('kontak_supplier')
        ];

        $model->save($data);

        return redirect()->to('/suppliers');
    }
}
