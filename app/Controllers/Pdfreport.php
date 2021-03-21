<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Pdfreport extends BaseController
{
    public $db;

    public function __construct()
    {
        $this->db = \Config\Database::connect();
    }

    public function index()
    {
        // Sending data to view file
        $data = $this->db->table("sales")->get()->getResult();
        // Calling view file
        return view('pdf_view', [
            "students" => $data
        ]);
    }
}
