<?php

namespace App\Controllers;

class Auth extends BaseController
{
    public function index()
    {
        $M_Auth = new \App\Models\M_Auth();
        $login = $this->request->getPost('login');
        if ($login) {
            $username = $this->request->getPost('username');
            $password = $this->request->getPost('password');
            $dataAdmin = $M_Auth->where("username", $username)->first();

            if ($username == '' or $password == '') {
                $err = "Harap Masukkan Username dan Password terlebih dahulu";
            } elseif (!$dataAdmin) {
                $err = "Username yang anda masukkan salah !! Silahkan coba lagi";
            }

            if (empty($err)) {
                if ($dataAdmin['password'] != md5($password)) {
                    $err = "Password yang anda masukkan salah !!";
                }
            }


            if (empty($err)) {
                $dataSesi = [
                    'id_admin'  => $dataAdmin['id_admin'],
                    'username'  => $dataAdmin['username'],
                    'password'  => $dataAdmin['password'],
                ];

                session()->set($dataSesi);
                return redirect()->to('dashboard');
            }

            if ($err) {
                session()->setFlashdata('error', $err);
                return redirect()->to("login");
            }
        }
        return view('admin/login');
    }

    public function logout()
    {
        session()->destroy();
        return redirect('login', 'refresh');
    }
}
