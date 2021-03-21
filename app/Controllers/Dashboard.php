<?php

namespace App\Controllers;

class Dashboard extends BaseController
{
    protected $db;

    public function __construct()
    {
        $this->db = db_connect();
    }

    public function index()
    {
        return view('ViewDashboard');
    }


    public function create()
    {
        $data = [
            'user_name'     => $this->request->getVar('login_data'),
            'user_password' => $this->request->getVar('user_password')
        ];
        //print_r($data);
        $login_id = $data['user_name'];
        $login_pw = $data['user_password'];

        $createObject = $this->db->table('user');
        $createObject->getWhere(['login_id' => $login_id]);
        $createObject->getWhere(['login_password' => $login_pw]);
        $results = $createObject->get()->getResult();

        if (count($results) > 0) {
            echo "1";
        } else {
            echo "0";
        }
        //--------------- Novice Style --------------------------||


        // $this->load->library('encryption');
        // echo $this->encrypt->encode(123456);


        // $createObject = $this->db->table('user');
        // $createObject->where(['login_id' => $login_id]);
        // $results = $createObject->get()->getResult();

        // if (count($results) > 0) {

        //     //if ($results[0]->login_password == $login_pw) {
        //     //              For Hash Password Match only 
        //     if (password_verify($results[0]->login_password, $login_pw)) {
        //         echo "Login Success";
        //     } else {
        //         echo "Invalid Username / Password";
        //     }
        // } else {
        //     echo "Login failed, Account Missing";
        // }
    }
}
