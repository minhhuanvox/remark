<?php

namespace App\Controllers\Admin;
use App\Controllers\BaseController;
class HomeController extends BaseController
{
    public function index()
    {

        $data = [];
        $data = $this->loadMasterLayout($data);

        return view('admin/pages/main', $data);
    }
}
