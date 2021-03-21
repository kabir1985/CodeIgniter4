<?php

namespace App\Controllers;

use App\Models\ProductCategoryModel;


use CodeIgniter\HTTP\IncomingRequest;

class Category extends BaseController
{
   private $productCategory_object;


   public function __construct()
   {
      $this->productCategory_object = new ProductCategoryModel();
   }

   public function index()
   {
      $data['category_show'] = $this->productCategory_object->findAll();

      return view('product/ProductCategoryAdd', $data);
   }

   //--------------------------------------------------------------------//
   public function create()
   {
      $data = [
         'category_name'   => $this->request->getVar('product_category_name'),
      ];
      //$df = new ProductCategoryModel();
      $id =  $this->productCategory_object->insert($data);
      if ($id > 0) {
         echo "1";
      } else {
         echo "0";
      }
   }

   //--------------------------------------------------------------------//
   public function update($id = 0)
   {

      $id   = $this->request->getVar('product_category_id');

      $data = [
         'category_name'   => $this->request->getVar('category_name'),
      ];
      $update_id =  $this->productCategory_object->update($id, $data);
      if ($update_id > 0) {
         echo "1";
      } else {
         echo "0";
      }
   }

   public function delete($id = 0)
   {

      $id = $this->request->getVar('delete_id');

      $this->productCategory_object->where('product_category_id', $id)->delete();
      //$this->NewProductAddModel_Object->where('product_id', $id)->delete();

      //return into supplier page
      return $this->response->redirect(site_url('/Category'));
   }
}
