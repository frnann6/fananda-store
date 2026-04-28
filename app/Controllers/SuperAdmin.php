<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use Config\View;

class SuperAdmin extends BaseController
{
    public function index()
    {
        return view('superadmin/main', [
            'content' => 'superadmin/dashboard'
        ]);
    }

    public function dashboard()
    {
        return view('superadmin/main', [
            'content' => 'superadmin/dashboard'
        ]);
    }

    public function products()
    {
        return view('superadmin/main', [
            'content' => 'superadmin/products'
        ]);
    }

    public function users()
    {
        return view('superadmin/main', [
            'content' => 'superadmin/users'
        ]);
    }
}
