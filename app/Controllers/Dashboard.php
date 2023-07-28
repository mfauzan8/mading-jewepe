<?php

namespace App\Controllers;

use App\Models\M_Mading;
use App\Models\M_Komentar;


class Dashboard extends BaseController
{
    public function index()
    {
        $m_Mading = new M_Mading();
        $m_Komentar = new M_Komentar();

        $data = [
            'mading' => $m_Mading->countMading(),
            'komentar' => $m_Komentar->countKomentar(),
        ];

        return view('admin/dashboard', $data);
    }
}
