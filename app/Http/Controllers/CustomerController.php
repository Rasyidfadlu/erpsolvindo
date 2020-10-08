<?php

namespace App\Http\Controllers;

use App\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data['customer'] = \DB::table('customer')->get();
        return view('ispPartner', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('addNewIsp');
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
        $rule = [
            'Company_Name' => 'required|string',
            'Acc_Parent' =>  'required|string',
            // 'Location_ID' => 'required|unique:customer',
            // 'Customer_ID' => 'required|numeric|unique:customer',
            // 'Customer_No' => 'required|unique:customer',
            // 'Position' => 'required',
            'Address' => 'required',
            'Street' => 'required',
            'City' => 'required',
            'Province' => 'required',
            'ZipCode' => 'required|numeric',
            'Phone' => 'required|numeric',
            'Fax' => 'required|numeric',
            'Email' => 'required',
            'PIC' => 'required',
            'Primary_Contact_No' => 'required|numeric',
            'Sales_Person' => 'required',
            'PIC_Billing_Name' => 'required',
            'PIC_Billing_Phone' => 'required|numeric',
            'PIC_Billing_Fax' => 'required|numeric',
            'PIC_Billing_Email' => 'required',
            'Contract_Start' => '',
            'Contract_End' => '',
            'Due_Days' => 'required',
            'Contract_No' => 'required',
            'PPH' => '',
            'NPWP' => 'required',
            'VAT_NAME' => 'required',
            'VAT_Address' => 'required',
            'VAT_Street' => 'required',
            'VAT_City' => 'required',
            'VAT_Prefix' => 'numeric',
    
        ];
    
        $this->validate($request, $rule);
    
            $input = $request->all();
            unset($input['_token']);
            $status = \DB::table('customer')->insert($input);
    
            if ($status) {
                return redirect('/ispPartner')->with('success', 'Berita berhasil diunggah');
            } else {
                return redirect('/ispPartner/create')->with('error', 'Berita gagal diunggah');
        }
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function show(Customer $customer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function edit(Customer $customer)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Customer $customer)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function destroy(Customer $customer)
    {
        //
    }
}
