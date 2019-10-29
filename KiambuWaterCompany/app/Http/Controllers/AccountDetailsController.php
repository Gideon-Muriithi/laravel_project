<?php

namespace Laravel\Http\Controllers;
use Laravel\accountdetail;
use Illuminate\Http\Request;

class AccountDetailsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        accountdetail::all();

        return view('accountdetails.index'); 
     
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }
 /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

   /**
     * Display the specified resource.
     *
     * @param  \Laravel\accountdetails  $accountdetails
     * @return \Illuminate\Http\Response
     */
    public function show(accountdetails $accountdetails)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \Laravel\accountdetails  $accountdetails
     */
    public function edit(accountdetails $accountdetails)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Laravel\accountdetails  $accountdetails
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, accountdetails $accountdetails)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \Laravel\accountdetails  $accountdetails
     * @return \Illuminate\Http\Response
     */
    public function destroy(accountdetails $accountdetails)
    {
        //
    }
}