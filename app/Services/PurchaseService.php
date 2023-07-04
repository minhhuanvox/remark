<?php

namespace App\Services;

use CodeIgniter\Commands\Utilities\Publish;

use App\Common\ResultUtils;
use Exception;
use App\Models\PurchaseModel;
class PurchaseService extends BaseService
{
    private $purchase;
    // private $users;
    function __construct()
    {
        parent::__construct(); // run UserService and BaseService
        $this->purchase = new PurchaseModel();
        $this->purchase->protect(false);
    }

    public function getAllPurchases()
    {
        return $this->purchase->findAll();
    }
    //Add new purchase info
    public function addPurchaseInfo($requestData)
    {
        $validate = $this->validatePurchase($requestData);

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
            $this->purchase->save($dataSave);
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


    public function getPurchaseByID($idPurchase)
    {
        return $this->purchase->where('id', $idPurchase)->first();
    }
    
    private function validatePurchase($requestData)
    {
        $rule = [
            'name' => 'max_length[100]',
            'price' => 'max_length[100]',
            'email_address' => 'max_length[100]',
            'storage' => 'max_length[100]',
            'databases' => 'max_length[100]',
            'domains' => 'max_length[100]',
            'support' => 'max_length[100]',
        ];
        $messages = [
            'name' => [
                'max_length' => 'Tên người dùng quá dài. Vui lòng nhập {param} ký tự'
            ],
            '[price]' => [
                'max_length' => 'Giá bán quá dài. Vui lòng nhập {param} ký tự'
            ],
            'email_address' => [
                'max_length' => 'Địa chỉ email quá dài. Vui lòng nhập {param} ký tự'
            ],
            'store' => [
                'max_length' => 'Dung lượng quá dài. Vui lòng nhập {param} ký tự'
            ],
            'databases' => [
                'max_length' => 'Số lượng database quá dài. Vui lòng nhập {param} ký tự'
            ],
            'domains' => [
                'max_length' => 'Số lượng domains quá dài. Vui lòng nhập {param} ký tự'
            ],
            'supoprt' => [
                'max_length' => 'Nội dung hỗ trợ quá dài. Vui lòng nhập {param} ký tự'
            ],
        ];
        $this->validation->setRules($rule, $messages);
        $this->validation->withRequest($requestData)->run();
        return $this->validation;
    }

    //update for database in table purchase
    public function UpdatePurchaseInfo($requestData)
    {
        
        $validate = $this->validatePurchase($requestData);

        if ($validate->getErrors())
        {
            // dd($validate->getErrors());
            return [
                'status' => ResultUtils::STATUS_CODE_ERR,
                'messageCode' => ResultUtils::MESSAGE_CODE_ERR,
                'messages'=> $validate->getErrors()
            ];
        }

        $dataSave = $requestData->getPost();   
        
        try{
            $this->purchase->save($dataSave);
            return [
                'status' => ResultUtils::STATUS_CODE_OK,
                'messageCode' => ResultUtils::MESSAGE_CODE_OK,
                'messages'=> ['success'=>'Cập nhật dữ liệu thành công']
            ];
        }
        catch(Exception $e){
            return [
                'status' => ResultUtils::STATUS_CODE_ERR,
                'messageCode' => ResultUtils::MESSAGE_CODE_ERR,
                'messages'=>['success'=>$e->getMessage()]
            ];
        }
    }
    public function deletePurchase($id)
    {
        try{
            $this->purchase->delete($id);
            return [
                'status' => ResultUtils::STATUS_CODE_OK,
                'messageCode' => ResultUtils::MESSAGE_CODE_OK,
                'messages'=> ['success'=>'Cập nhật dữ liệu thành công']
            ];
        }
        catch(Exception $e){
            return [
                'status' => ResultUtils::STATUS_CODE_ERR,
                'messageCode' => ResultUtils::MESSAGE_CODE_ERR,
                'messages'=>['success'=>$e->getMessage()]
            ];
        }
    }
}