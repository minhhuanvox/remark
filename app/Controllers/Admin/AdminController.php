<?php

namespace App\Controllers\User;
use App\Controllers\BaseController;
use App\Models\UserModel;

class AdminController extends BaseController
{
    public function index()
    {
        // Kiểm tra quyền của người dùng
        if ($this->isUser()) {
            // Thực hiện các tác vụ cho user
            return view('user/dashboard');
        } else {
            // Chuyển hướng người dùng không có quyền user đến trang khác
            return redirect('login');
        }
    }

    private function isUser()
    {
        // Kiểm tra quyền của người dùng dựa vào thông tin đăng nhập và quyền hạn lưu trong session hoặc database
        $userModel = new UserModel();
        $user = $userModel->where('username', session('username'))->first();

        return $user['role'] === 'user';
    }
}