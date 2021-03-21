<?php

namespace App\Controllers;

use App\Models\NewProductAddModel;


use CodeIgniter\HTTP\IncomingRequest;

class Stockreport extends BaseController
{
   private $product_initial_stock_object;


   public function __construct()
   {
      $this->product_initial_stock_object = new NewProductAddModel();
   }

   public function index()
   {
      $data['product_initial_stock_show'] = $this->product_initial_stock_object->findAll();

      return view('report/stock_report', $data);
   }

}
