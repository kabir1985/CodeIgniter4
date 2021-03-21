<?php

namespace App\Models;

use CodeIgniter\Model;

class ProductBrandModel extends Model
{
    protected $table = 'product_brand';

    protected $primaryKey = 'brand_id';

    protected $allowedFields = ['product_brand_name'];
}
