<?php

namespace Laravel\Http\Controllers;

use Laravel\janauary2018_charges;
use Illuminate\Http\Request;


class Janauary2018ChargesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $charges= janauary2018_charges::all();

        return view('monthlycharges.index', compact('charges'));
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
     * @param  \Laravel\janauary2018_charges  $janauary2018_charges
     * @return \Illuminate\Http\Response
     */
    public function show(janauary2018_charges $janauary2018_charges)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \Laravel\janauary2018_charges  $janauary2018_charges
     * @return \Illuminate\Http\Response
     */
    public function edit(janauary2018_charges $janauary2018_charges)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Laravel\janauary2018_charges  $janauary2018_charges
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, janauary2018_charges $janauary2018_charges)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \Laravel\janauary2018_charges  $janauary2018_charges
     * @return \Illuminate\Http\Response
     */
    public function destroy(janauary2018_charges $janauary2018_charges)
    {
        //
    }
}
