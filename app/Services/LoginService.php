<?php

namespace App\Services;

use CodeIgniter\Commands\Utilities\Publish;

use App\Common\ResultUtils;
use Exception;
use App\Models\PurchaseModel;

class LoginService extends BaseService
{
    private $purchase;
    // private $users;
    function __construct()
    {
        parent::__construct(); // run UserService and BaseService
        $this->purchase = new PurchaseModel();
        $this->purchase->protect(false);
    }
    public function hasLoginInfo($requestData)
    {
        $validate = $this->validateLogin($requestData);

        if ($validate->getErrors()) {
            return [
                'status' => ResultUtils::STATUS_CODE_ERR,
                'messageCode' => ResultUtils::MESSAGE_CODE_ERR,
                'messages' => $validate->getErrors()
            ];
        }

        
    }

    public function validateLogin($reqData)
    {
        $rule = [
            'email'      =>'valid_email',
            'password'  =>'max_length[30]|min_length[6]',
        ];
        $messages = [
            'email' => [
                'valid_email'=> 'Tài khoản {filed} {value} không đúng định dạng.'
            ],
            'password' => [
                'max_length'=> 'Mật khẩu quá dài. Vui lòng nhập {param} ký tự',
                'min_length'=> 'Mật khẩu quá ngắn. Không được ít hơn {param} ký tự',
            ],
        ];
        $this->validation->setRules($rule, $messages);
        $this->validation->withRequest($reqData)->run();
        return $this->validation;
    }
}