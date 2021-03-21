<?php

namespace App\Controllers;

use App\Models\ProductBrandModel;


use CodeIgniter\HTTP\IncomingRequest;

class Brand extends BaseController
{
   private $product_brand_object;


   public function __construct()
   {
      $this->product_brand_object    = new ProductBrandModel();
   }

   public function index()
   {

      $data['brand_show'] = $this->product_brand_object->findAll();

      return view('product/ProductBrandAdd', $data);
   }

   //--------------------------------------------------------------------//
   public function create()
   {
      $data = [
         'product_brand_name'   => $this->request->getVar('product_brand_name'),
      ];
      $id =  $this->product_brand_object->insert($data);
      if ($id > 0) {
         echo "1";
      } else {
         echo "0";
      }
   }

   //--------------------------------------------------------------------//
   public function update($id = 0)
   {

      $id   = $this->request->getVar('product_brand_id');

      $data = [
         'product_brand_name'   => $this->request->getVar('product_brand_name'),
      ];
      $update_id =  $this->product_brand_object->update($id, $data);
      if ($update_id > 0) {
         echo "1";
      } else {
         echo "0";
      }
   }
   //--------------------------------------------------------------------//
   public function delete($id = 0)
   {

      $id = $this->request->getVar('delete_id');

      $this->product_brand_object->where('brand_id', $id)->delete();

      //return into Brand page
      return $this->response->redirect(site_url('/Brand'));
   }
}
