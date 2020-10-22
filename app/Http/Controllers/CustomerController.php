<?php

namespace App\Http\Controllers;

use App\Customer;
use Illuminate\Http\Request;
use App\Exports\CustomerExport;
use Maatwebsite\Excel\Facades\Excel;
use App\Http\Controllers\Controller;
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
        $data['customers'] = \DB::table('customers')->get();
        return view('ispPartner', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     * 
     * 
     */
    public function create()
    {
        //
        return view('addNewIsp');
    }

    public function export_excel()
	{
		return Excel::download(new CustomerExport, 'Customer.xlsx');
	}

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $rule = [
            'id' => '',
            'Company_Name' => 'required|string',
            'Acc_Parent' =>  'required|string',
            'Address' => 'required',
            'Street' => 'required',
            'City' => 'required',
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
            'NPWP' => 'required',
            'VAT_NAME' => 'required',
            'VAT_Address' => 'required',
            'VAT_Street' => 'required',
            'VAT_City' => 'required',
            'VAT_Prefix' => 'numeric',
    
        ];

        //
        $input = $request->all();
        $this->validate($request, $rule);
        $status = \App\Customer::create($input);
    
        return redirect('/ispPartner')->with('status', 'Data berhasil diunggah');
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function show(Customer $customer)
    {
    
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, $id)
    {
        $data['customers'] = \App\Customer::find($id);
        return view('editIsp', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  $id)
    {
        

        $input = $request->all();
        // unset($input['_token']);
        // unset($input['_method']);

        // $status = \DB::table('customers')->where('id', $id)->update($input);

        $data = \App\Customer::find($id);
        $status = $data->update($input);


        return redirect('/ispPartner')->with('status', 'Data berhasil diubah');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function destroy(Customer $customer, Request $request, $id)
    {
        $customer = \App\Customer::find($id);

        $status = $customer->delete();

        return redirect('/ispPartner')->with('status', 'Data berhasil dihapus');

    }

    // public function edit(Request $request, $id){
    //     $data['ispPartner'] = \DB::table('customer')->find($ID);
    //     return view('ispPartner', $data);
    // }
}

