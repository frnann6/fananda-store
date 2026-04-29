<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ProductModel;
use App\Models\UserModel;

class SuperAdmin extends BaseController
{
    public function index()
    {
        return $this->dashboard();
    }

    public function dashboard()
    {
        $productModel = new ProductModel();
        $userModel = new UserModel();
        $db = \Config\Database::connect();

        // 1. Ambil data User per bulan untuk tahun ini
        $usersPerMonth = $db->table('users')
            ->select('MONTH(created_at) as bulan, COUNT(id) as total')
            ->where('YEAR(created_at)', date('Y')) // Hanya tahun sekarang
            ->groupBy('MONTH(created_at)')
            ->get()->getResultArray();

        // 2. Ambil data Product per bulan untuk tahun ini
        $productsPerMonth = $db->table('products')
            ->select('MONTH(created_at) as bulan, COUNT(id) as total')
            ->where('YEAR(created_at)', date('Y'))
            ->groupBy('MONTH(created_at)')
            ->get()->getResultArray();

        // 3. Siapkan Array kosong untuk 12 bulan (Jan - Dec)
        $chartUsers = array_fill(0, 12, 0);
        $chartProducts = array_fill(0, 12, 0);

        // 4. Isi array dengan hasil query
        foreach ($usersPerMonth as $row) {
            $chartUsers[$row['bulan'] - 1] = (int)$row['total'];
        }
        foreach ($productsPerMonth as $row) {
            $chartProducts[$row['bulan'] - 1] = (int)$row['total'];
        }

        return view('superadmin/main', [
            'content'       => 'superadmin/dashboard',
            'totalProducts' => $productModel->countAll(),
            'totalUsers'    => $userModel->countAll(),
            // Kirim data array ke view
            'chartUsers'    => $chartUsers,
            'chartProducts' => $chartProducts
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
