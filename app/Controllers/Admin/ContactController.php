<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Services\ContactService;
use Symfony\Component\Console\Input\Input;

class ContactController extends BaseController
{
    private $service;
    public function __construct()
    {
        $this->service = new ContactService();
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

        $dataLayout['contacts'] = $this->service->getDataPaginationContact();
        $dataLayout['pager'] = $this->service->getPagerContact();
        // dd($dataLayout['pager']);
        $data = $this->loadMasterLayout($data, 'Danh sách liên hệ', 'admin/pages/contact/list', $dataLayout, $cssFiles, $jsFiles);

        return view('admin/main', $data);
    }
}