<?php

namespace App\Models;

use CodeIgniter\Model;

class ProductModel extends Model
{
    protected $table = 'products';
    protected $primaryKey = 'id';
    protected $allowedFields = [
        'brand_id',
        'name',
        'description',
        'img',
        'price',
        'price_cut'
    ];
}
