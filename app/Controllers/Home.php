<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\ProductModel;
use App\Models\BrandModel;
use App\Models\ProfileModel;

class Home extends BaseController
{
    public function index()
    {
        return view('home');
    }

    public function products(){
        $productModel = new ProductModel();
        $data = $productModel->findAll();

        return $this->response->setJSON($data);
    }

    public function brands()
    {
        $brandModel = new BrandModel();
        $data = $brandModel->findAll();

        return $this->response->setJSON($data);
    }

    public function profiles()
    {
        $model = new ProfileModel();
        $data = $model->findAll();

        return $this->response->setJSON($data);
    }
}

