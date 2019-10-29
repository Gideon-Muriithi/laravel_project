<?php

namespace Laravel\Http\Controllers;
use Laravel\status;
use Illuminate\Http\Request;

class StatusController extends Controller
{
    
    public function index()
    {
        status::all();

        return view('status.index'); 
     
    }

    public function create()
    {
        //
    }

   
    public function store(Request $request)
    {
        //
    }

    public function show(status $status)
    {
        //
    }

    public function edit(status $status)
    {
        //
    }

  
    public function update(Request $request, status $status)
    {
        //
    }

    
    public function destroy(status $status)
    {
        //
    }
}