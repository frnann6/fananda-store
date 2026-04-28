<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\UserModel;

class Auth extends BaseController
{
    public function index()
    {
        //
    }

    public function register()
    {
        // GET
        if ($this->request->getMethod(true) === 'GET') {
            return view('auth/register');
        }

        // POST
        $model = new UserModel();

        $model->insert([
            'name' => $this->request->getPost('name'),
            'email' => $this->request->getPost('email'),
            'password' => password_hash($this->request->getPost('password'), PASSWORD_DEFAULT),
            'role' => 'customer' 
        ]);

        return "Register berhasil";
    }

    public function login()
    {
        // GET
        if($this->request->getMethod(true) === 'GET'){
            return view('auth/login');
        }

        // POST
        $model = new UserModel();

        $user = $model->where('email', $this->request->getPost('email'))->first();

        if ($user && password_verify($this->request->getPost('password'), $user['password'])){

            session()->set([
                'id' => $user['id'],
                'name' => $user['name'],
                'role' => $user['role'],
                'logged_in' => true
            ]);

            //  redirect
            if ($user['role'] === 'admin') {
                return redirect()->to('/dashboard/admin');
            } elseif ($user['role'] === 'super_admin') {
                return redirect()->to('/superadmin');
            } else {
                return redirect()->to('/');
            }

        }
        return "Email atau password salah";
    }

    public function logout()
    {
        session()->destroy();
        return "Logout berhasil";
    }
}
