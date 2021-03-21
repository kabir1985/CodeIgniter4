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

    function generatePDF()
    {

        $dompdf = new \Dompdf\Dompdf();

        $data = $this->db->table("sales")->get()->getResult();
        // Sending data to view file
        $dompdf->loadHtml(view('pdf_view', ["students" => $data]));
        // setting paper to portrait, also we have landscape
        $dompdf->setPaper('A4', 'portrait');
        $dompdf->render();
        // Download pdf
        $dompdf->stream();
        // to give pdf file name
        // $dompdf->stream("myfile");

        return redirect()->to(base_url('list-student'));
    }
}
