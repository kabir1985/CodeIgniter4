<?php

namespace App\Controllers;

use App\Models\ProductSaleModel;
use App\Models\ProductSaleDetailsModel;
use App\Models\NewProductAddModel;
use CodeIgniter\HTTP\IncomingRequest;

class Pos extends BaseController
{
    private $db;

    private $product_id_object;
    private $product_sale_object;
    private $product_sale_details_object;

    public function __construct()
    {
        $this->product_id_object = new NewProductAddModel();
        $this->product_sale_object = new ProductSaleModel();
        $this->product_sale_details_object = new ProductSaleDetailsModel();
        $this->db = db_connect();
    }

    public function index()
    {

        $sql = "SELECT st.*,product_name,productinitial_quantity AS initial_qty,IFNULL(pr.purchased,0) AS purchase_qty,productinitial_quantity + IFNULL(pr.purchased,0) AS total_stock
        FROM product_inital_stock as st
        LEFT JOIN (SELECT product_id,SUM(quantity) as purchased
        FROM product_purchase
        GROUP BY product_id) as pr
        ON st.product_id = pr.product_id";

        //$data['product_show_for_sale'] = $this->product_id_object->findAll();
        $data['product_show_for_sale'] = $this->db->query($sql)->getResult('array');

        // echo ("<pre>");
        // print_r($data);
        // echo ("</pre>");


        return view('pos/pos_add', $data);
    }

    public function sale()
    {

        $productsList = $this->request->getVar("cart_data");

        $discount = $_POST['discount'];
        $others_cost = $_POST['others_cost'];

        ///// Auto Invoice Generate + Sales Table entry start///////////////////////////////////////////////
        $day_no = date('z') + 1;
        $unique_text = substr(md5(microtime(true) . mt_Rand()), -5);

        $invoice_id = strtoupper("INV" . date("y") .  str_pad($day_no, 3, "0", STR_PAD_LEFT) . "" .  $unique_text);

        $sales_data = array(
            "sales_invoice" => $invoice_id,
            "sales_user"    => 1,
            "sales_date"    => date("Y-m-d H:i:s"),
            "payment_type"  => "Cash",
            "discount"      => $discount,
            "others_cost"   => $others_cost
        );
        ////////Auto Invoice Generate start///////////////////////////////////////////////////

        $sales_details_invoice_data = [];

        foreach ($productsList as $row) {
            $item["sales_details_invoice"] = $invoice_id;
            $item["product_id"]  = $row['product_id'];
            $item["product_quantity_sold"] = $row['quantity'];
            $item["unit_price"] = $row['selling_unit_price'];

            array_push($sales_details_invoice_data, $item);
        }

        $this->product_sale_object->insert($sales_data);
        $this->product_sale_details_object->insertBatch($sales_details_invoice_data);
    }
}
