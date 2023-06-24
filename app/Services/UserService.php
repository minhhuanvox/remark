<?php

namespace App\Services;
use CodeIgniter\Commands\Utilities\Publish;
use App\Models\UserModel;
class UserService extends BaseService
{
    private $users;
    function __construct()
    {
        parent::__construct();// run UserService and BaseService
        $this->users = new UserModel;
    }
    

    // get all data user
    public function getAllUsers()
    {
        return $this->users->findAll();
    }

    //Add new user info
    public function addUserInfo($requestData)
    {
        $validate = $this->validateAddUser($requestData);

        if ($validate->getError())
        {
            dd($validate->getError());
        }
        dd("Hết lỗi");
    }
    private function validateAddUser($requestData)
    {
        $rule = [
            'email'=>'valid_email|is_unique[users.email]',
            'name'=>'max_length[100]',
            'password'=>'max_length[30]|min_length[6]',
            'password_confirm'=>'matches[password]'
        ];
        $messages = [
            'email' => [
                'valid_email'=> 'Tài khoản {field} {value} không đúng định dạng!',
                'id_unique'=> 'Email đã được đăng ký vui lòng kiểm tra lại'
            ],
            'name' => [
                'max_length'=> 'Tên quá dài. Vui lòng nhập {param} ký tự'
            ],
            'password' => [
                'max_length'=> 'Mật khẩu quá dài. Vui lòng nhập {param} ký tự',
                'min_length'=> 'Mật khẩu quá ngắn. Vui lòng nhập ít nhất {param} ký tự'
            ],
            'password_confirm' => [
                'matches'=> 'Mật khẩu không trùng khớp'
            ],
        ];
        $this->validation->setRules($rule, $messages);
        $this->validation->withRequest($requestData)->run();
        return $this->validation;
    }
}
