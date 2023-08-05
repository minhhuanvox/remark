<?php

namespace App\Services;

use CodeIgniter\Commands\Utilities\Publish;

use App\Common\ResultUtils;
use Exception;
use App\Models\PurchaseModel;
use App\Models\UserModel;
use App\Models\User;

class LoginService extends BaseService
{
    private $purchase;
    private $users;
    function __construct()
    {
        parent::__construct(); // run UserService and BaseService
        $this->users = new UserModel();
        // $this->purchase->protect(false);
    }
    public function hasLoginInfo($reqData)
    {
        $validate = $this->validateLogin($reqData);

        if ($validate->getErrors()) {
            return [
                'status' => ResultUtils::STATUS_CODE_ERR,
                'messageCode' => ResultUtils::MESSAGE_CODE_ERR,
                'messages' => $validate->getErrors()
            ];
        }

        $params = $reqData->getPost();
        $user = $this->users->where('email', $params['email'])->first();

        if (!$user)
        {
            return [
                'status' => ResultUtils::STATUS_CODE_ERR,
                'messageCode' => ResultUtils::MESSAGE_CODE_ERR,
                'messages' => [
                    'notExist'=>'Tài khoản không hợp lệ'
                ]
            ];
        }
        if(!password_verify($params['password'], $user['password']))
        {
            return [
                'status' => ResultUtils::STATUS_CODE_ERR,
                'messageCode' => ResultUtils::MESSAGE_CODE_ERR,
                'messages' => [
                    'wrongPass'=>'Mật khẩu không đúng'
                ]
            ];
        }
        $session = session();

        unset($user['password']);
        $session->set('user_login', $user);

        return [
            'status' => ResultUtils::STATUS_CODE_OK,
            'messageCode' => ResultUtils::MESSAGE_CODE_OK,
            'messages' => null
        ];
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
    public function logoutUser()
    {
        $session = session();
        $session->destroy();//xoa toan bo session
    }
}