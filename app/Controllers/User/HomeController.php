<?php

namespace App\Controllers\User;
use App\Controllers\BaseController;
class HomeController extends BaseController
{
    public function index()
    {

        $data = [];
        $data = $this->loadMasterLayout($data, 'Trang chủ', 'index');
        
        return view('index', $data);
    }
}