<?php

namespace App\Controllers\Admin;

use App\Common\ResultUtils;
use App\Controllers\BaseController;
use App\Services\LoginService;

// Tiếp tục sử dụng lớp 'LoginService' trong mã nguồn của bạn

class LoginController extends BaseController
{

    private $service;
    public function __construct()
    {

        $this->service = new LoginService();
    }
    public function index()
    {
        if (session()->has('user_login')) {
            $user = session('user_login');

            if ($user['role'] === 'admin') {
                return redirect('admin/home');
            } else {
                // Nếu là user, chuyển hướng đến trang chủ của người dùng
                return redirect('user/dashboard');
            }
        }


        return view('login');
    }
    public function login()
    {
        $result = $this->service->hasLoginInfo($this->request);
        $user = session('user_login');
        if ($result['status'] === ResultUtils::STATUS_CODE_OK) {
            //return redirect('admin/home');
            if ($user['role'] === 'admin') {
                return redirect('admin/home');
            } else {
                // Nếu là user, chuyển hướng đến trang chủ của người dùng
                return redirect('user/dashboard');
            }
        } else if ($result['status'] === ResultUtils::STATUS_CODE_ERR) {
            return redirect('login')->with($result['messageCode'], $result['messages']);
        }
        return redirect('home');
    }
    public function logout()
    {
        $this->service->logoutUser();
        return redirect('login');
    }
    function isAdmin(): bool
    {
        // Check if the user is logged in
        if (session()->has('user_login')) {
            // Get the user information from the session
            $user = session('user_login');

            // Check if the role is admin
            if ($user['role'] === 'admin') {
                return true; // User is admin
            }
        }

        return false; // User is not admin
    }
}