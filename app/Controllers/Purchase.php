<?php

namespace App\Controllers;

use App\Models\ProductPurchaseModel;
use App\Models\NewProductAddModel;
use App\Models\SupplierModel;

use CodeIgniter\HTTP\IncomingRequest;

class Purchase extends BaseController
{

    private $product_purchase_object;
    private $product_add_object;
    private $supplier_object;

    public function __construct()
    {
        $this->product_purchase_object = new ProductPurchaseModel();
        $this->product_add_object = new NewProductAddModel();
        $this->supplier_object = new SupplierModel();
    }

    public function index()
    {
        $data['product_show_for_sale'] = $this->product_add_object->findAll();
        $data['supplier_show'] = $this->supplier_object->findAll();

        return view('purchase/purchase_add', $data);
    }

    public function purchase_product()
    {

        $purchaseList = $this->request->getVar("cart_data");
        // print_r($productsList);

        $discount = $_POST['discount'];
        $others_cost = $_POST['others_cost'];
        $supplier_id = $_POST['supplier_id'];

        ///// Auto Invoice Generate + Purchase Table entry start////////////////////////////////////////
        $day_no = date('z') + 1;
        $unique_text = substr(md5(microtime(true) . mt_Rand()), -5);

        $invoice_id = strtoupper("PUR" . date("y") .  str_pad($day_no, 3, "0", STR_PAD_LEFT) . "" .  $unique_text);

        // $sales_data = array(
        //     "sales_invoice" => $invoice_id,
        //     "sales_user"    => 1,
        //     "sales_date"    => date("Y-m-d H:i:s"),
        //     "payment_type"  => "Cash",
        //     "discount"      => $discount,
        //     "others_cost"   => $others_cost
        // );
        ////////Auto Invoice Generate start///////////////////////////////////////////////////

        $purchase_details_invoice_data = [];

        foreach ($purchaseList as $row) {
            $item["purchase_invoice_id"] = $invoice_id;
            $item["supplier_id"]  = $_POST['supplier_id'];
            $item["product_id"] = $row['product_id'];
            $item["unit_price"] = $row['product_unit'];

            $item["quantity"] = $row['buying_unit_price'];
            //$item["total_price"] =  $row['product_unit'] * $row['buying_unit_price'];
            $item["total_price"] =  100;
            $item["purchase_date"] = date("Y-m-d H:i:s");

            array_push($purchase_details_invoice_data, $item);
        }

        //$this->product_sale_object->insert($sales_data);
        $this->product_purchase_object->insertBatch($purchase_details_invoice_data);
    }
}
