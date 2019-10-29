<?php

namespace Laravel\Http\Controllers;
use Laravel\unit;
use Illuminate\Http\Request;


class UnitsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        unit::all();

        return view('units.index'); 
     
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
     * @param  \Laravel\units  $units
     * @return \Illuminate\Http\Response
     */
    public function show(units $units)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \Laravel\units  $units
     * @return \Illuminate\Http\Response
     */
    public function edit(units $units)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Laravel\units  $units
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, units $units)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \Laravel\units  $units
     * @return \Illuminate\Http\Response
     */
    public function destroy(units $units)
    {
        //
    }
}