<?php

namespace App\Controllers\User;

use App\Controllers\BaseController;
use App\Services\RemarkService;

class AddController extends BaseController
{
    private $service;
    public function __construct()
    {
        $this->service = new RemarkService();
    }
    public function index()
    {
        $data = [];
        $data = $this->loadMasterLayout($data, 'Thêm đơn phúc khảo', 'user/add');
        
        return view('user/add', $data);
    }
    public function create()
    {
        $result = $this->service->addRemarkInfo($this->request);
        return redirect('user/dashboard');
    }
    
}