<?php

namespace App\Controllers;

use App\Models\PenggunaModel;
use App\Models\KaryawanModel;
use CodeIgniter\Controller;
use App\Models\TotalStokModel;
use App\Models\PemasokanModel;
use App\Models\PengeluaranModel;
use App\Models\BarangModel;
use App\Models\PelangganModel;


class AuthController extends Controller
{
    public function index()
    {
        $session = session();
        if ($session->get('logged_in')) {
            return $this->redirectUser();
        }
        return view('landingpage/login_admin');
    }

    public function login()
    {
        $session = session();
        $model = new PenggunaModel();

        $nama_pengguna = $this->request->getVar('username');
        $sandi_pengguna = md5($this->request->getVar('password'));

        $user = $model->where('nama_pengguna', $nama_pengguna)
            ->where('sandi_pengguna', $sandi_pengguna)
            ->first();

        if ($user) {
            $ses_data = [
                'id_pengguna' => $user['id_pengguna'],
                'nama_pengguna' => $user['nama_pengguna'],
                'peran' => $user['peran'],
                'logged_in' => TRUE
            ];
            $session->set($ses_data);
            return $this->redirectUser();
        } else {
            $session->setFlashdata('msg', 'Wrong Username or Password');
            return redirect()->to('/login_admin');
        }
    }

    private function redirectUser()
    {
        $session = session();
        if ($session->get('peran') == 1) {
            return redirect()->to('/dashboard_owner');
        } elseif ($session->get('peran') == 2) {
            return redirect()->to('/dashboard_admin');
        }
    }

    public function dashboard_admin()
    {
        $pemasokanModel = new PemasokanModel();
        $data['jumlahPemasokan'] = $pemasokanModel->countAllResults();

        $pengeluaranModel = new PengeluaranModel();
        $data['jumlahPengeluaran'] = $pengeluaranModel->countAllResults();

        $barangModel = new BarangModel();
        $data['jumlahBarang'] = $barangModel->countAllResults();

        $pelangganModel = new PelangganModel();
        $data['jumlahPelanggan'] = $pelangganModel->countAllResults();
    
        return view('admin/dashboard_admin', $data); // Mengirimkan data ke view
    }
    

    public function dashboard_owner()
    {
        $karyawanModel = new KaryawanModel();
        $penggunaModel = new PenggunaModel();
        $totalstokModel = new TotalStokModel();
    
        // Mendapatkan semua data karyawan
        $data['karyawans'] = $karyawanModel->findAll();
    
        // Menghitung jumlah karyawan per posisi
        $data['posisiCounts'] = $karyawanModel->select('posisi, COUNT(*) as count')
            ->groupBy('posisi')
            ->findAll();
    
        // Menghitung jumlah total pengguna
        $data['jumlahPengguna'] = $penggunaModel->countAllResults();
        $data['totalstokBarang'] = $totalstokModel->countAllResults();
        $data['totalKaryawan'] = $karyawanModel->countAllResults();
    
        return view('owner/dashboard_owner', $data);
    }
    

    public function logout()
    {
        session()->destroy();
        return redirect()->to('/login_admin');
    }
}
