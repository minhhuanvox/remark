<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Services\PurchaseService;
use Symfony\Component\Console\Input\Input;

class PurchaseController extends BaseController
{
    private $service;
    public function __construct()
    {
        $this->service = new PurchaseService();
    }
    public function list()
    {


        $data = [];

        $cssFiles = [
            'https://cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css',
            base_url() . '/assets/admin/css/datatable.css'
        ];
        $jsFiles = [
            'http://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js',
            base_url() . '/assets/admin/js/datatable.js',
            base_url() . '/assets/admin/js/event.js'
        ];

        $dataLayout['purchases'] = [];
        // $this->service->getAllUsers()
        $data = $this->loadMasterLayout($data, 'Danh sách gói dịch vụ', 'admin/pages/purchase/list', $dataLayout, $cssFiles, $jsFiles);

        return view('admin/main', $data);
    }
    // public function add()
    // {
    //     $data = [];
    //     $data = $this->loadMasterLayout($data, 'Thêm tài khoản', 'admin/pages/user/add');

    //     return view('admin/main', $data);
    // }
    // public function create()
    // {
    //     $result = $this->service->addUserInfo($this->request);
    //     return redirect()->back()->withInput()->with($result['messageCode'], $result['messages']);
    // }

    // public function edit($id)
    // {
    //     $user = $this->service->getUserByID($id);

    //     if(!$user)
    //     {
    //         return redirect('error/404');
    //     }
        
    //     $data = [];

    //     $jsFiles = [
    //         base_url() . '/assets/admin/js/event.js'

    //     ];

    //     $dataLayout['users'] = $user;

    //     $data = $this->loadMasterLayout([], 'Sửa tài khoản', 'admin/pages/user/edit', $dataLayout,[], $jsFiles);

    //     return view('admin/main', $data);
    // }

    // public function update()
    // {
    //     $result = $this->service->UpdateUserInfo($this->request);
    //     return redirect()->back()->withInput()->with($result['messageCode'], $result['messages']);
    // }

    // public function delete($id)
    // {
    //     $user = $this->service->getUserByID($id);

    //     if(!$user)
    //     {
    //         return redirect('error/404');
    //     }
    //     $result = $this->service->deleteUser($id);
    //     return redirect('admin/user/list')->with($result['messageCode'], $result['messages']);
    // }
}