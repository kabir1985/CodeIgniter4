<?php namespace App\Controllers;

class Customer extends BaseController
{

	/**
     * Display a listing of the resource.
     */
    public function index()
    {
		return view('customer/all');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function add()
    {
        return view('customer/collapseable');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store()
    {
        
    }

    /**
     * Display the specified resource.
     * @param  int  $id
     */
    public function show($id=0)
    {

    }
    /**
     * Show the form for editing the specified resource.
     * @param  int  $id
     */
    public function edit($id=0)
    {

    }

    /**
     * Update the specified resource in storage.
     */
    public function update()
    {
      
    }

    /**
     * Remove the specified resource from storage.
     * @param  int  $id
     */
    public function delete($id=0)
    {
       
    }




	//--------------------------------------------------------------------

}
