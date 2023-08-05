<?php

namespace App\Controllers\User;

use App\Controllers\BaseController;
use App\Services\RemarkService;
use App\Models\RemarkModel;
use Symfony\Component\Console\Input\Input;

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
        // dd($data);
        // return view('user/add');
        return view('user/add', $data);
        // return redirect('user/add');
    }
    public function create()
    {
        $result = $this->service->addRemarkInfo($this->request);
        // dd($result);
        return redirect('user/dashboard');
        // return redirect('user/dashboard')->with($result['messageCode'], $result['messages']);
    }
    
}