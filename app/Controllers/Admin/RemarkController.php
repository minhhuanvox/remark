<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Services\RemarkService;
use App\Models\RemarkModel;
use Symfony\Component\Console\Input\Input;

class RemarkController extends BaseController
{
    private $service;
    public function __construct()
    {
        $this->service = new RemarkService();
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

        $dataLayout['remarks'] = $this->service->getAllRemarks();

        $data = $this->loadMasterLayout($data, 'Danh sách đơn phúc khảo', 'admin/pages/remark/list', $dataLayout, $cssFiles, $jsFiles);

        return view('admin/main', $data);
    }
    public function add()
    {
        $data = [];
        $data = $this->loadMasterLayout($data, 'Thêm đơn phúc khảo', 'admin/pages/remark/add');
        // dd($data);
        return view('admin/main', $data);
    }
    public function create()
    {
        $result = $this->service->addRemarkInfo($this->request);
        // dd($result);
        return redirect('admin/remark/add')->with($result['messageCode'], $result['messages']);
    }
    

    public function edit($id)
    {
        $remark = $this->service->getRemarkByID($id);

        if(!$remark)
        {
            return redirect('error/404');
        }
        
        $data = [];

        $jsFiles = [
            base_url() . '/assets/admin/js/event.js'

        ];

        $dataLayout['remarks'] = $remark;

        $data = $this->loadMasterLayout([], 'Sửa đơn phúc khảo', 'admin/pages/remark/edit', $dataLayout,[], $jsFiles);

        return view('admin/main', $data);
    }

    public function detail($id)
    {
        $remark = $this->service->getRemarkByID($id);

        if(!$remark)
        {
            return redirect('error/404');
        }
        
        $data = [];

        $jsFiles = [
            base_url() . '/assets/admin/js/event.js'

        ];

        $dataLayout['remarks'] = $remark;

        $data = $this->loadMasterLayout([], 'Chi tiết đơn phúc khảo', 'admin/pages/remark/detail', $dataLayout,[], $jsFiles);

        return view('admin/main', $data);
    }
    public function update()
    {
        $result = $this->service->UpdateRemarkInfo($this->request);
        return redirect('admin/remark/list')->with($result['messageCode'], $result['messages']);
    }

    public function delete($id)
    {
        $remark = $this->service->getRemarkByID($id);

        if(!$remark)
        {
            return redirect('error/404');
        }
        $result = $this->service->deleteRemark($id);
        return redirect('admin/remark/list')->with($result['messageCode'], $result['messages']);
    }
    
}