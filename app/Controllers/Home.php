<?php

namespace App\Controllers;

use App\Models\M_Mading;

class Home extends BaseController
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
            'mading' => $mading
        ];
        return view('landing-page', $data);
    }
}
