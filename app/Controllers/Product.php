<?php

namespace App\Controllers;

use App\Models\NewProductAddModel;
use App\Models\ProductCategoryModel;
use App\Models\ProductBrandModel;
use App\Models\ProductGroupModel;
use App\Models\ProductUnitModel;

use App\Models\TaxModel;


use CodeIgniter\HTTP\IncomingRequest;

class Product extends BaseController
{
   private $productCategory_object;
   private $NewProductAddModel_Object;
   private $ProductBrandModel;
   private $productgroup_object;
   private $productunit_object;
   private $tax_object;
   //private $db;
   protected $db;


   public function __construct()
   {
      $this->NewProductAddModel_Object   = new NewProductAddModel();
      $this->productCategory_object = new ProductCategoryModel();
      $this->ProductBrandModel    = new ProductBrandModel();
      $this->productgroup_object  = new ProductGroupModel();
      $this->productunit_object   = new ProductUnitModel();
      $this->tax_object = new TaxModel();
      //$this->db = \Config\Database::connect();
      $this->db = db_connect();
   }

   public function index()
   {
      $data['category_show'] = $this->productCategory_object->findAll();
      $data['brand_show']    = $this->ProductBrandModel->findAll();
      $data['group_show']    = $this->productgroup_object->findAll();
      $data['unit_show']     = $this->productunit_object->findAll();
      $data['tax_show']      = $this->tax_object->findAll();

      //$data["product_list"] = [];
      // $sql = "SELECT * FROM product AS pr JOIN product_category AS pc ON pr.ProductCategory=pc.product_category_id ";

      $sql = "SELECT * FROM product_inital_stock AS pr
      JOIN product_category AS pc ON pr.product_category=pc.product_category_id
      JOIN product_group as pg ON pr.product_group =  pg.product_group_id
      JOIN product_brand as pb ON pr.product_brand =  pb.brand_id
      JOIN product_unit as pu ON pr.product_unit =  pu.product_unit_id";

      $data['product_show'] = $this->db->query($sql)->getResult('array');


      return view('product/NewProductAdd', $data);
   }

   //--------------------------------------------------------------------


   public function create()
   {
      $data = [
         'product_name'            => $this->request->getVar('product_name'),
         'product_category'        => $this->request->getVar('product_category'),
         'product_brand'           => $this->request->getVar('product_brand'),
         'product_group'           => $this->request->getVar('product_group'),
         'product_unit'            => $this->request->getVar('product_unit'),
         'codefor_barcode'         => $this->request->getVar('codefor_barcode'),
         'tax_perchantage'         => $this->request->getVar('tax_perchantage'),
         'productinitial_quantity' => $this->request->getVar('productinitial_quantity'),
         'buying_unit_price'       => $this->request->getVar('buying_unit_price'),
         'selling_unit_price'      => $this->request->getVar('selling_unit_price'),
         'alert_quantity'          => $this->request->getVar('alert_quantity'),
         'product_image'           => $this->request->getVar('product_image')

      ];
      $id = $this->NewProductAddModel_Object->insert($data);
      if ($id > 0) {
         echo "1";
      } else {
         echo "0";
      }
   }

   public function update($id = 0)
   {
      $id = $this->request->getVar('product_id');
      $data = [
         'product_name'       => $this->request->getVar('product_name'),
         'product_category'   => $this->request->getVar('product_category'),
         'product_brand'      => $this->request->getVar('product_brand'),
         'product_group'      => $this->request->getVar('product_group'),
         'product_unit'       => $this->request->getVar('product_unit'),
         'codefor_barcode'    => $this->request->getVar('codefor_barcode'),
         'tax_perchantage'    => $this->request->getVar('tax_perchantage'),
         'productinitial_quantity' => $this->request->getVar('productinitial_quantity'),
         'buying_unit_price'       => $this->request->getVar('buying_unit_price'),
         'selling_unit_price'      => $this->request->getVar('selling_unit_price'),
         'alert_quantity'     => $this->request->getVar('alert_quantity'),
         'product_image'     => $this->request->getVar('product_image')

      ];
      //$id = $this->NewProductAddModel->insert($data);
      $id = $this->NewProductAddModel_Object->update($id, $data);
      if ($id > 0) {
         echo "1";
      } else {
         echo "0";
      }
   }

   public function delete($id = 0)
   {

      $id = $this->request->getVar('delete_id');

      $this->NewProductAddModel_Object->where('product_id', $id)->delete();

      //return into supplier page
      return $this->response->redirect(site_url('/Product'));
   }
}
