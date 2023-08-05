<?php

namespace App\Services;

use CodeIgniter\Commands\Utilities\Publish;

use App\Common\ResultUtils;
use Exception;
use App\Models\RemarkModel;

class RemarkService extends BaseService
{
    private $remark;

    function __construct()
    {
        parent::__construct(); // run UserService and BaseService
        $this->remark = new RemarkModel();
        $this->remark->protect(false);
    }

    public function getAllRemarks()
    {
        return $this->remark->findAll();
    }
    //Add new remark info
    public function addRemarkInfo($requestData)
    {
        $validate = $this->validateRemark($requestData);
        //dd($validate);
        if ($validate->getErrors()) {
            // dd($validate->getErrors());
            return [
                'status' => ResultUtils::STATUS_CODE_ERR,
                'messageCode' => ResultUtils::MESSAGE_CODE_ERR,
                'messages' => $validate->getErrors()
            ];
        }

        $dataSave = $requestData->getPost();
        //dd($dataSave);
        try {
            $this->remark->save($dataSave);
            return [
                'status' => ResultUtils::STATUS_CODE_OK,
                'messageCode' => ResultUtils::MESSAGE_CODE_OK,
                'messages' => ['success' => 'Thêm dữ liệu thành công']
            ];
        } catch (Exception $e) {
            return [
                'status' => ResultUtils::STATUS_CODE_ERR,
                'messageCode' => ResultUtils::MESSAGE_CODE_ERR,
                'messages' => ['success' => $e->getMessage()]
            ];
        }
    }


    public function getRemarkByID($idremark)
    {
        return $this->remark->where('id', $idremark)->first();
    }

    private function validateRemark($requestData)
    {
        //$score = 'score';
        //$scorevalue = (Float)$score;
        //dd($requestData->"score");
        //$score = floatval($this->$requestData->getPost('score'));
        $rule = [
            'student-id' => 'max_length[10]',
            'name' => 'max_length[100]',
            'class' => 'max_length[7]',
            //'date_of_birth' => 'valid_date[Y-m-d]',
            'email' => 'valid_email',
            'phone_number' => 'max_length[100]',
            'module_id' => 'max_length[6]',
            'module_name' => 'max_length[100]',
            //'score' => 'greater_than_equal_to[0]|less_than_equal_to[10]',//chua xong
            //'exam_date' => 'valid_date[Y-m-d]',
            'exam_room' => 'max_length[6]',
        ];

        $messages = [
            'student-id' => [
                'max_length' => 'Mã số sinh viên quá dài. Vui lòng nhập {param} ký tự'
            ],
            'name' => [
                'max_length' => 'Tên sinh viên quá dài. Vui lòng nhập {param} ký tự'
            ],
            'email' => [
                'max_length' => 'Địa chỉ email quá dài. Vui lòng nhập {param} ký tự'
            ],
            'class' => [
                'max_length' => 'Lớp quá dài. Vui lòng nhập {param} ký tự'
            ],
            'date_of_birth' => [
                'valid_date' => 'Ngày thi không hợp lệ. Vui lòng nhập ngày hợp lệ.',
            ],
            'phone_number' => [
                'max_length' => 'Số điện thoại quá dài. Vui lòng nhập {param} ký tự'
            ],
            'module_id' => [
                'max_length' => 'Mã môn học quá dài. Vui lòng nhập {param} ký tự'
            ],
            'module_name' => [
                'max_length' => 'Tên môn học quá dài. Vui lòng nhập {param} ký tự'
            ],
            'exam_date' => [
                'valid_date' => 'Ngày thi không hợp lệ. Vui lòng nhập ngày hợp lệ.',
            ],
            'score' => [
                'greater_than_equal_to[0]' => 'Vui lòng nhập điểm lớn hơn bằng 0.',
                'less_than_equal_to[10]' => 'Vui lòng nhập điểm nhỏ hơn bằng 10.',
            ],
        ];
        $this->validation->setRules($rule, $messages);
        $this->validation->withRequest($requestData)->run();
        return $this->validation;
    }

    //update for database in table remark
    public function UpdateRemarkInfo($requestData)
    {

        $validate = $this->validateRemark($requestData);

        if ($validate->getErrors()) {
            // dd($validate->getErrors());
            return [
                'status' => ResultUtils::STATUS_CODE_ERR,
                'messageCode' => ResultUtils::MESSAGE_CODE_ERR,
                'messages' => $validate->getErrors()
            ];
        }

        $dataSave = $requestData->getPost();

        try {
            $this->remark->save($dataSave);
            return [
                'status' => ResultUtils::STATUS_CODE_OK,
                'messageCode' => ResultUtils::MESSAGE_CODE_OK,
                'messages' => ['success' => 'Cập nhật dữ liệu thành công']
            ];
        } catch (Exception $e) {
            return [
                'status' => ResultUtils::STATUS_CODE_ERR,
                'messageCode' => ResultUtils::MESSAGE_CODE_ERR,
                'messages' => ['success' => $e->getMessage()]
            ];
        }
    }
    public function deleteRemark($id)
    {
        try {
            $this->remark->delete($id);
            return [
                'status' => ResultUtils::STATUS_CODE_OK,
                'messageCode' => ResultUtils::MESSAGE_CODE_OK,
                'messages' => ['success' => 'Cập nhật dữ liệu thành công']
            ];
        } catch (Exception $e) {
            return [
                'status' => ResultUtils::STATUS_CODE_ERR,
                'messageCode' => ResultUtils::MESSAGE_CODE_ERR,
                'messages' => ['success' => $e->getMessage()]
            ];
        }
    }
    
}