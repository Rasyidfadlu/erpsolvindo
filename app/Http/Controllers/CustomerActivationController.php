<?php

namespace App\Http\Controllers;

use App\CustomerActivation;
use Illuminate\Http\Request;

class CustomerActivationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data['customer_activations'] = \DB::table('customer_activations')->get();
        return view('prospekData', $data);
        // $search = $request->search;

        // $data = customer_activations::select('Company_Name')
        //     ->where(function ($query) use ($search){
        //         if($search){
        //             $query->where('Company_Name' . $search);
        //         }
        //     })
        //     ->when($request, function ($query, $request){
        //         $sortBy = $request->$sortBy ? $request->$sortBy : [];
        //         $sortDecs = $request->$sortDecs ? $request->$sortDecs : [];

        //         if (count($sortBy)> 0){
        //             for ($i = 0; $i < count($sortBy); $i++){
        //                 return $query->orderBy($sortBy[$i], $sortDecs[$i] ? 'decs' : 'asc');
        //             }
        //         }
        //     })
        //     ->withCount('prospekData')
        //     ->paginate($request->itemPerPage);

        // return response()->json([
        //     'data' => $data
        // ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('entriDataProspek');
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
            // 'Location_ID' => 'required|unique:customer_activations',
            // 'Task_ID' => 'required|numeric|unique:customer_activations',
            // 'Customer_Name' => 'required|string',
            // 'Customer_ID' => 'required|numeric',
            // // 'Handphone' => 'required|numeric',
            // 'Fax' => 'required|string',
            // 'PIC' => 'required|string',
            // 'City' => 'required',
            // 'Position' => 'required',
            // 'Handphone' => 'required|numeric',
            // // 'Email' => 'required',
            // // 'PIC2' => 'required|string',
            // // 'PIC2_Telp' => 'required|numeric',
            // // 'Phone' => 'required|numeric',
            'Customer_Sub_Name' => 'required|string',
            'Customer_Sub_Address' => 'required|string',
            'City' => 'required',
            'Province' => 'required',
            'Latitude' => 'required|numeric',
            'Longitude' => 'required|numeric',
            // 'Note' => 'required'
            
            
        ];
    
        $this->validate($request, $rule);
    
        CustomerActivation::create($request->all());
        return redirect('/aktifasiCustomer/create')->with('status', 'Data Berhasil di Tambahkan!!');
        // $input = $request->all();
        // unset($input['_token']);
        // $status = \DB::table('customer_activations')->insert($input);

        // if ($status) {
        //     return redirect('/aktifasiCustomer')->with('success', 'Data berhasil diunggah');
        // } else {
        //     return redirect('/aktifasiCustomer/create')->with('error', 'Data gagal diunggah');
        // }

        // CustomerActivation::updateOrCreate($request->only('Location_ID'), $request->all());

        // return response()->json([
        //     'status' => true
        // ]);
        

    
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\CustomerActivation  $customerActivation
     * @return \Illuminate\Http\Response
     */
    public function show(CustomerActivation $customerActivation)
    {
        //
        $data['customer_activations'] = \DB::table('customer_activations')->get();
        return view('prosesInstalasi', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\CustomerActivation  $customerActivation
     * @return \Illuminate\Http\Response
     */
    public function edit(CustomerActivation $customerActivation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\CustomerActivation  $customerActivation
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CustomerActivation $customerActivation)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\CustomerActivation  $customerActivation
     * @return \Illuminate\Http\Response
     */
    public function destroy(CustomerActivation $customerActivation, Request $request, $id)
    {
        //
        $customer_activation = \App\CustomerActivation::find($id);

        $status = \DB::table('customer_activations')->where('id',$id)->delete();
        return redirect('/aktifasiCustomer/create')->with('status', 'Data Berhasil Dihapus!!');
    }
}
