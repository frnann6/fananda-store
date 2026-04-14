<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class Home extends BaseController
{
    public function index()
    {
        return view('home');
    }

    public function produk()
    {
        $db = \Config\Database::connect();

        $builder = $db->table('products');
        $builder->select('products.*, brands.name as brand_name, brands.logo');
        $builder->join('brands', 'brands.id = products.brand_id');

        $data = $builder->get()->getResult();
        
        return $this->response->setJSON($data);
    }

    public function profiles()
    {
        $model = new \App\Models\ProfileModel();
        $data = $model->findAll();

        return $this->response->setJSON($data);
    }
}

