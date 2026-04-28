<?php

namespace App\Filters;

use CodeIgniter\Filters\FilterInterface;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;

class AuthFilter implements FilterInterface
{
    public function before(RequestInterface $request, $arguments = null)
    {
        // belum login
        if (!session()->get('logged_in')) {
            return redirect()->to('/login');
        }

        // cek role
        if($arguments) {
            if (!in_array(session()->get('role'), $arguments)){
                return "Akses ditolak!";
            }
        }
    }

    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
    {
        //
    }
}
