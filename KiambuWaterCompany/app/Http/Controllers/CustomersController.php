<?php

namespace Laravel\Http\Controllers;
use Illuminate\Support\Facades\Response;
use Validator;
use Laravel\Customer;
use input;
use Illuminate\Http\Request;

class CustomersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $customers=customer::all();

        return view('customers.index', compact ('customers')); 
    }

    public function create()
    {
        //
    }

   
    public function store(Request $request)
    {
      customer::create ($request->all());
      return back();
    }

    public function show(Customers $customers)
    {
        //
    }

    public function edit(Customers $customers)
    {
        //
    }

  
    public function update(Request $request)
    {
       $customer=Customer::findOrfail($request->customers_id);

//       $customer->update($request->all());

        $customer->AccountName = $request->AccountName;
        $customer->AccountNumber = $request->AccountNumber;
        $customer->PhoneNumber = $request->PhoneNumber;
        $customer->IdNumber = $request->IdNumber;
        $customer->Description = $request->Description;
        $customer->save();

       return back();
    }

    
    public function destroy(Request $request)
    {
        $customer=customer::findOrfail($request->customers_id);
        $customer->delete();
        return back();
    }

    public function getCustomer(Customer $customer){
        return Response::json(
            ['customer' => $customer]
        );
    }
}