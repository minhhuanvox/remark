<?php

namespace App\Controllers\Admin;
use App\Controllers\BaseController;
class UserController extends BaseController
{
    public function list()
    {

        $data = [];
        $cssFiles = [
            'https://cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css',
            base_url(). '/assets/admin/css/datatable.css'
        ];
        $jsFiles = [
            'http://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js',
            base_url(). '/assets/admin/js/datatable.js'

        ];
        $data = $this->loadMasterLayout($data, 'Danh sách tài khoản', 'admin/pages/user/list', $cssFiles, $jsFiles);
        
        return view('admin/main', $data);
    }
}
