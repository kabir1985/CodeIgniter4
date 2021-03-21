<?php

namespace App\Models;

use CodeIgniter\Model;

class ProductPurchaseModel extends Model
{
    protected $table = 'product_purchase';

    protected $primaryKey = 'purchase_id';

    protected $allowedFields = ['purchase_invoice_id', 'supplier_id', 'product_id', 'unit_price', 'quantity', 'total_price', 'purchase_date'];
}
