<?php
namespace App\Controllers;

use App\Models\KasModels;

class Iuran extends BaseController
{
    public function index()
    {
        $title = 'Daftar Transaksi';
        $model = new KasModels();
        $iuran = $model->findAll();
        return view('iuran/iuran_public', compact('iuran', 'title'));
    }

    public function iuran_index()
    {
        $title = 'Daftar Kas Warga';
        $model = new KasModels();
        $iuran = $model->findAll();
        return view('iuran/iuran_index', compact('iuran', 'title'));
    }

    public function iuran_add()
    {
        // validasi data.
        $validation = \Config\Services::validation();
        $validation->setRules(['keterangan' => 'required']);
        $isDataValid = $validation->withRequest($this->request)->run();
    
        if ($isDataValid)
        {
            $iuran = new KasModels();
            $iuran->insert([
                'keterangan' => $this->request->getPost('keterangan'),
                'tanggal' => $this->request->getPost('tanggal'),
                'bulan' => $this->request->getPost('bulan'),
                'tahun' => $this->request->getPost('tahun'),
                'jumlah' => $this->request->getPost('jumlah'),
                'warga_id' => $this->request->getPost('warga_id')
            ]);
            return redirect('admin/iuran');
        }
        $title = "Tambah Transaksi";
        return view('iuran/iuran_add', compact('title'));
    }

    public function iuran_edit($id)
    {
        $iuran = new KasModels();
        // validasi data.
        $validation = \Config\Services::validation();
        $validation->setRules(['keterangan' => 'required']);
        $isDataValid = $validation->withRequest($this->request)->run();
        
        if ($isDataValid)
        {
            $iuran->update($id, [
                'keterangan' => $this->request->getPost('keterangan'),
                'tanggal' => $this->request->getPost('tanggal'),
                'bulan' => $this->request->getPost('bulan'),
                'tahun' => $this->request->getPost('tahun'),
                'jumlah' => $this->request->getPost('jumlah'),
                'warga' => $this->request->getPost('id_warga')
            ]);
            return redirect('admin/iuran');
        }
        
        // ambil data lama
        $data = $iuran->where('id', $id)->first();
        $title = "Edit Data Transaksi Iuran";
        return view('iuran/iuran_edit', compact('title', 'data'));
    }
}