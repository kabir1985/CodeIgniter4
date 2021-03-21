<?php

namespace App\Models;

use CodeIgniter\Model;

class ProductPurchaseModel extends Model
{
    protected $table = 'sales';

    protected $primaryKey = 'sales_id';

    protected $allowedFields = ['sales_invoice', 'sales_user', 'sales_date', 'payment_type', 'discount', 'others_cost'];
}
