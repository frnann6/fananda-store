<?php

namespace App\Models;

use CodeIgniter\Model;

class ProdukModel extends Model
{
    protected $table = 'products';
    protected $allowedFields = [
        'brand_id', 'name', 'description', 'img', 'price', 'price_cut'
    ];
}
