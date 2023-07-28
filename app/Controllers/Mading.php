<?php

namespace App\Controllers;

use App\Models\M_Mading;


class Mading extends BaseController
{
    protected $m_Mading;
    public function __construct()
    {
        $this->m_Mading = new M_Mading();
    }

    public function index()
    {
        $mading = $this->m_Mading->findAll();
        $data = [
            'mading' => $mading,
        ];
        return view('admin/mading', $data);
    }

    public function tambah_mading()
    {
        $data = [
            'validation' => \Config\Services::validation()
        ];
        return view('admin/tambah_mading', $data);
    }

    public function save()
    {
        if (!$this->validate([
            'gambar' => [
                'rules' => 'uploaded[gambar]|max_size[gambar,1024]',
                'errors' => [
                    'uploaded' => 'Pilih gambar terlebih dahulu',
                    'max_size' => 'Ukuran gambar terlalu besar',
                ]
            ],
            'judul' => [
                'rules' => 'required|is_unique[tb_mading.judul]',
                'errors' => [
                    'required'  => '{field} mading harus di isi',
                    'is_unique' => '{field} mading sudah terdaftar'
                ]
            ],
            'isi' => [
                'rules' => 'required[tb_mading.isi]',
                'errors' => [
                    'required' => '{field} mading harus di isi',
                ]
            ],
        ])) {
            return redirect()->to('mading/tambah_mading')->withInput();
        }
        //ambil gambar
        $filegambar = $this->request->getFile('gambar');
        // pindahkan ke folder images
        $filegambar->move('images');
        //ambil nama file gambar
        $namagambar = $filegambar->getName();

        $this->m_Mading->save([
            'gambar' => $namagambar,
            'judul'  => $this->request->getVar('judul'),
            'isi'    => $this->request->getVar('isi'),
            'id_admin' => $this->request->getVar('id_admin'),
        ]);

        session()->setFlashdata('pesan', 'Data berhasil ditambahkan');

        return redirect()->to('/mading');
    }

    public function delete_mading($id_mading)
    {
        //cari gambar berdasarkan id
        $mading = $this->m_Mading->find($id_mading);

        //hapus gambar
        unlink('images/' . $mading['gambar']);

        $this->m_Mading->delete($id_mading);
        session()->setFlashdata('pesan', 'Data berhasil dihapus');
        return redirect()->to('/mading');
    }

    public function detail($id_mading)
    {
        $mading = $this->m_Mading->find($id_mading);
        $data = [
            'mading' => $mading
        ];
        return view('detail_mading', $data);
    }
}
