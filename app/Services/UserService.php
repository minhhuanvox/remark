<?php

namespace App\Services;
use CodeIgniter\Commands\Utilities\Publish;
use App\Models\UserModel;
use App\Common\ResulltUtils;
use Exception;

class UserService extends BaseService
{
    private $users;
    function __construct()
    {
        parent::__construct();// run UserService and BaseService
        $this->users = new UserModel;
        $this->users->protect(false);
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

        if ($validate->getErrors())
        {
            // dd($validate->getErrors());
            return [
                'status' => ResulltUtils::STATUS_CODE_ERR,
                'messageCode' => ResulltUtils::MESSAGE_CODE_ERR,
                'messages'=> $validate->getErrors()
            ];
        }

        $dataSave = $requestData->getPost();
        unset($dataSave['password_confirm']);
        $dataSave['password'] = password_hash($dataSave['password'], PASSWORD_BCRYPT);
        try{
            $this->users->save($dataSave);
            return [
                'status' => ResulltUtils::STATUS_CODE_OK,
                'messageCode' => ResulltUtils::MESSAGE_CODE_OK,
                'messages'=> ['success'=>'Thêm dữ liệu thành công']
            ];
        }
        catch(Exception $e){
            return [
                'status' => ResulltUtils::STATUS_CODE_ERR,
                'messageCode' => ResulltUtils::MESSAGE_CODE_ERR,
                'messages'=>['success'=>$e->getMessage()]
            ];
        }

        
        
    }
    //update info user -> db
    public function UpdateUserInfo($requestData)
    {
        
        $validate = $this->validateEditUser($requestData);

        if ($validate->getErrors())
        {
            // dd($validate->getErrors());
            return [
                'status' => ResulltUtils::STATUS_CODE_ERR,
                'messageCode' => ResulltUtils::MESSAGE_CODE_ERR,
                'messages'=> $validate->getErrors()
            ];
        }

        $dataSave = $requestData->getPost();

        if(!empty($dataSave['change_password']))
        {
            unset($dataSave['change_password']);
            unset($dataSave['password_confirm']);
            $dataSave['password'] = password_hash($dataSave['password'], PASSWORD_BCRYPT);
        }
        else{
            unset($dataSave['password']);
            unset($dataSave['password_confirm']);
        }
        
        $this->users->save($dataSave);
        return [
            'status' => ResulltUtils::STATUS_CODE_OK,
            'messageCode' => ResulltUtils::MESSAGE_CODE_OK,
            'messages'=> ['success'=>'Cập nhật dữ liệu thành công']
        ];
    }
    //get user by ID primary key
    public function getUserByID($idUser)
    {
        return $this->users->where('id', $idUser)->first();
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
                'is_unique'=> 'Email đã được đăng ký vui lòng kiểm tra lại'
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

    private function validateEditUser($requestData)
    {
        $rule = [
            'email'=>'valid_email|is_unique[users.email, id,'.$requestData->getPost()['id'].']',
            'name'=>'max_length[100]',
            
        ];
        $messages = [
            'email' => [
                'valid_email'=> 'Tài khoản {field} {value} không đúng định dạng!',
                'is_unique'=> 'Email đã được đăng ký vui lòng kiểm tra lại'
            ],
            'name' => [
                'max_length'=> 'Tên quá dài. Vui lòng nhập {param} ký tự'
            ],
            
        ];

        
        if(!empty($requestData->getPost()['change_password']))
        {
            
            $rule ['password'] = 'max_length[30]|min_length[6]';
            $rule ['password_confirm'] = 'matches[password]';

            $messages['password'] = [
                'max_length'=> 'Mật khẩu quá dài. Vui lòng nhập {param} ký tự',
                'min_length'=> 'Mật khẩu quá ngắn. Vui lòng nhập ít nhất {param} ký tự'
            ];
            $messages['password_confirm'] = [
                'matches'=> 'Mật khẩu không trùng khớp'
            ];
        }
        $this->validation->setRules($rule, $messages);
        $this->validation->withRequest($requestData)->run();
        return $this->validation;
    }
    //
    public function deleteUser($id)
    {
        try{
            $this->users->delete($id);
            return [
                'status' => ResulltUtils::STATUS_CODE_OK,
                'messageCode' => ResulltUtils::MESSAGE_CODE_OK,
                'messages'=> ['success'=>'Thêm dữ liệu thành công']
            ];
        }
        catch(Exception $e){
            return [
                'status' => ResulltUtils::STATUS_CODE_ERR,
                'messageCode' => ResulltUtils::MESSAGE_CODE_ERR,
                'messages'=>['success'=>$e->getMessage()]
            ];
        }
    }
}
