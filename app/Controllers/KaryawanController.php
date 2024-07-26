<?php

namespace App\Controllers;

class KaryawanController extends BaseController
{
    public function view_karyawan()
    {
        return view('owner_list_karyawan');
    }

    public function add_karyawan()
    {
        return view('owner_add_karyawan');
    }
}
