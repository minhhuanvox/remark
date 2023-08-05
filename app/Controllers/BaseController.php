<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use CodeIgniter\HTTP\CLIRequest;
use CodeIgniter\HTTP\IncomingRequest;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use Psr\Log\LoggerInterface;

/**
 * Class BaseController
 *
 * BaseController provides a convenient place for loading components
 * and performing functions that are needed by all your controllers.
 * Extend this class in any new controllers:
 *     class Home extends BaseController
 *
 * For security be sure to declare any new methods as protected or private.
 */
abstract class BaseController extends Controller
{
    /**
     * Instance of the main Request object.
     *
     * @var CLIRequest|IncomingRequest
     */
    protected $request;

    /**
     * An array of helpers to be loaded automatically upon
     * class instantiation. These helpers will be available
     * to all other controllers that extend BaseController.
     *
     * @var array
     */
    protected $helpers = [];

    /**
     * Be sure to declare properties for any property fetch you initialized.
     * The creation of dynamic property is deprecated in PHP 8.2.
     */
    // protected $session;

    /**
     * Constructor.
     */
    public function initController(RequestInterface $request, ResponseInterface $response, LoggerInterface $logger)
    {
        // Do Not Edit This Line
        parent::initController($request, $response, $logger);

        // Preload any models, libraries, etc, here.

        // E.g.: $this->session = \Config\Services::session();
    }

    // set data for master layout
    public function loadMasterLayout($data, $title, $content, $dataLayout=[], $cssFiles=[], $jsFiles=[])
    {
        $data['title'] = $title;
        $data['leftMenu'] = view('admin/layout/left-menu');
        $data['header'] = view('admin/layout/header');
        $data['cssFiles'] = $cssFiles;
        $data['jsFiles'] = $jsFiles;
        $data['content'] = view($content, $dataLayout);
        return $data;
    }
    protected function isAdmin()
    {
        // Kiểm tra xem người dùng đã đăng nhập hay chưa
        if (session()->has('user_login')) {
            // Lấy thông tin người dùng từ session
            $user = session('user_login');

            // Kiểm tra nếu role của người dùng là 'admin'
            if ($user['role'] === 'admin') {
                return true; // Nếu là admin, trả về true
            }
        }

        return false; // Nếu không phải admin hoặc chưa đăng nhập, trả về false
    }
}
