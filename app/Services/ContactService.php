<?php

namespace App\Services;

use CodeIgniter\Commands\Utilities\Publish;
use App\Models\ContactModel;
use App\Common\ResultUtils;
use Exception;
class ContactService extends BaseService
{
    private $contact;
    // private $users;
    function __construct()
    {
        parent::__construct(); // run UserService and BaseService
        $this->contact = new ContactModel();
        $this->contact->protect(false);
    }
    public function getDataPaginationContact()
    {
        return $this->contact->orderBy('id', 'DESC')->paginate(2);
    }
    public function getPagerContact()
    {
        return $this->contact->pager;
    }
}