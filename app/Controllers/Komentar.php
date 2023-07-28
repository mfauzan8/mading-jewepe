<?php

namespace App\Controllers;

use App\Models\M_Komentar;


class Komentar extends BaseController
{
    protected $m_Komentar;
    public function __construct()
    {
        $this->m_Komentar = new M_Komentar();
    }

    public function index()
    {
        $komentar = $this->m_Komentar->findAll();
        $data = [
            'komentar' => $komentar,
        ];
        return view('admin/komentar', $data);
    }

    public function delete_komentar($id_komentar)
    {
        $this->m_Komentar->delete($id_komentar);
        session()->setFlashdata('pesan', 'Data berhasil dihapus');
        return redirect()->to('/komentar');
    }

    public function save_komentar()
    {
        if (!$this->validate([
            'nama' => [
                'rules' => 'required',
                'errors' => [
                    'required'  => '{field} harus di isi',
                ]
            ],
            'email' => [
                'rules' => 'required',
                'errors' => [
                    'required'  => '{field} harus di isi',
                ]
            ],
            'komentar' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} harus di isi',
                ]
            ],
        ])) {
            return redirect()->to('mading/tambah_mading')->withInput();
        }

        $this->m_Komentar->save([
            'nama' => $this->request->getVar('nama'),
            'email'  => $this->request->getVar('email'),
            'komentar'    => $this->request->getVar('komentar'),
            'id_mading' => $this->request->getVar('id_mading'),
        ]);

        session()->setFlashdata('pesan', 'Data berhasil ditambahkan');

        return redirect()->to('#mading');
    }
}
