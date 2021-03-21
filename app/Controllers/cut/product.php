<?php

namespace App\Controllers;

use App\Models\NewProductAddModel;
use App\Models\ProductCategoryModel;
use App\Models\ProductBrandModel;
use App\Models\ProductGroupModel;
use App\Models\ProductUnitModel;


use CodeIgniter\HTTP\IncomingRequest;

class Product extends BaseController
{
   private $productCategoryModel;
   private $NewProductAddModel;
   private $ProductBrandModel;
   private $productgroup_object;
   private $productunit_object;


   public function __construct()
   {
      $this->NewProductAddModel   = new NewProductAddModel();
      $this->productCategoryModel = new ProductCategoryModel();
      $this->ProductBrandModel    = new ProductBrandModel();
      $this->productgroup_object  = new ProductGroupModel();
      $this->productunit_object   = new ProductUnitModel();
   }

   public function index()
   {
      $data['product_show'] = $this->NewProductAddModel->findAll();
      $data['category_show'] = $this->productCategoryModel->findAll();
      $data['brand_show'] = $this->ProductBrandModel->findAll();
      $data['group_show'] = $this->productgroup_object->findAll();
      $data['unit_show'] = $this->productunit_object->findAll();

      return view('product/product_details', $data);
   }

   //--------------------------------------------------------------------


   public function productadd($action = "show")
   {
      switch ($action) {

         case 'show':
            echo $action;
            break;

         case 'create':
            $data = [
               'ProductName'       => $this->request->getVar('ProductName'),
               'ProductCategory'   => $this->request->getVar('ProductCategory'),
               'ProductBrand'      => $this->request->getVar('ProductBrand'),
                'product_group'      => $this->request->getVar('product_group'),
               'ProductUnit'       => $this->request->getVar('ProductUnit'),
               'CodeForBarcode'    => $this->request->getVar('CodeForBarcode'),
               'TaxPerchantage'    => $this->request->getVar('TaxPerchantage'),
               'ProductInitialQuantity'   => $this->request->getVar('ProductInitialQuantity'),
               'UnitPrice'         => $this->request->getVar('UnitPrice'),
               'TotalPrice'        => $this->request->getVar('TotalPrice'),
               'AlertQuantity'     => $this->request->getVar('AlertQuantity'),
               'product_image'     => $this->request->getVar('product_image')

            ];
            $this->NewProductAddModel->insert($data);
            return $this->response->redirect(site_url('/product'));
            break;

         case 'edit':
            # code...
            break;

         case 'delete':
            # code...
            break;

         default:
            # code...
            break;
      }
   }


   public function category($action = "show")
   {
      switch ($action) {

         case 'show':
            echo $action;
            break;

         case 'create':
            $data = [
               'category_name'   => $this->request->getVar('product_category_name'),
            ];
            $df = new ProductCategoryModel();
            $df->insert($data);
            return $this->response->redirect(site_url('/product'));
            break;

         case 'edit':
            # code...
            break;

         case 'delete':
            # code...
            break;

         default:
            # code...
            break;
      }
   }


   public function brand($action = "show")
   {
      switch ($action) {

         case 'show':
            echo $action;
            break;

         case 'create':
            $data = [
               'product_brand_name'   => $this->request->getVar('product_brand_name'),
            ];
            $this->ProductBrandModel->insert($data);
            return $this->response->redirect(site_url('/product'));
            break;

         case 'edit':
            # code...
            break;

         case 'delete':
            # code...
            break;

         default:
            # code...
            break;
      }
   }



   public function group($action = "show")
   {
      switch ($action) {

         case 'show':
            echo $action;
            break;

         case 'create':
            $data = [
               'group_name'   => $this->request->getVar('product_group_name'),
            ];
            $this->productgroup_object->insert($data);
            return $this->response->redirect(site_url('/product'));
            break;

         case 'edit':
            # code...
            break;

         case 'delete':
            # code...
            break;

         default:
            # code...
            break;
      }
   }



   public function unit($action = "show")
   {
      switch ($action) {

         case 'show':
            echo $action;
            break;

         case 'create':
            $data = [
               'product_unit_name'   => $this->request->getVar('product_unit'),
            ];
            $this->productunit_object->insert($data);
            return $this->response->redirect(site_url('/product'));
            break;

         case 'edit':
            # code...
            break;

         case 'delete':
            # code...
            break;

         default:
            # code...
            break;
      }
   }
}
