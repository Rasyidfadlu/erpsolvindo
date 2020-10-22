@extends('layout/templateAdmin')

@section('title', 'Add New Isp')

@section('style')
    <link rel="stylesheet" href="{{ URL::asset('/css/addNewIsp.css')}}">
@endsection
    
@section('container')

<?php

$action = 'input';
$title = '  <i class="fas fa-plus-square ml-4"></i> Add New ISP/Partner';

if (!empty($berita)){

$action = 'edit';
$title = ' <i class=" fas fa-edit ml-4 "></i> Add New ISP/Partner';
}
?>
<div class="col-md-10 content">

    @if (session('error'))
    <div class="alert alert-error content">
        {{ session('error') }}
    </div>
    @endif

    @if (count($errors) > 0)
    <div class="alert alert-danger">
        <strong>Perhatian !!!</strong>
        <br/>
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
    </div>
    @endif
</div>

<div class="col-md-10 content">
    @if (session('status'))
        <div class="alert alert-success">
            {{ session('status')}}
        </div>
    @endif    
    <h1 class="judul mt-2 ml-2 text-dark">
        <?= $title ?>
    </h1>
    <hr class="line">

    <div class="border-form  ml-auto mr-auto p-4">
    <div class="container">
            <div class="row">
                <div class="">
                    <h1 class="font-weight-bold judul text-left">I. CUSTOMER IDENTITY</h1>
                    <hr class="line">
                </div>
            </div>
        </div>

            <form action="{{ url('ispPartner', @$customers->id) }}" method="POST" enctype="multipart/form-data">
                <div class="row no-gutters">
                    <div class="col-md-6">
                        @csrf
                        @if(!empty($customers))
                            @method('PATCH')
                        @endif         
                        <div class="form-group">
                            <input type="text" placeholder="Account Name" class="form-control" name="Company_Name" value="{{ old('Company_Name') }}">
                        </div>
                        <div class="form-group">
                            <input type="text" placeholder="Alias(NamaPangilan)" class="form-control" name="Acc_Parent" value="{{ old('Acc_Parent') }}">
                        </div>
                        <div class="form-group">
                            <input type="text" placeholder="Address" class="form-control" name="Address" value="{{ old('Address') }}">
                        </div>
                        <div class="form-group">
                            <input type="text" placeholder="Street" class="form-control" name="Street" value="{{ old('Street') }}">
                        </div>
                        <div class="form-group">    
                            <input type="text" placeholder="City" class="form-control" name="City" value="{{ old('City') }}">
                        </div>
                        <div class="form-group">
                            <input type="text" placeholder="ZipCode" class="form-control" name="ZipCode" value="{{ old('ZipCode') }}">
                        </div>
                        <div class="form-group">
                            <input type="text" placeholder="Phone" class="form-control" name="Phone" value="{{ old('Phone') }}">
                        </div>
                        <div class="form-group">
                            <input type="number" placeholder="FAX" class="form-control" name="Fax" value="{{ old('Fax') }}">
                        </div>
                        <div class="form-group">
                            <input type="text" placeholder="Email" class="form-control" name="Email" value="{{ old('Email') }}">
                        </div>
                        <div class="form-group">
                            <input type="text" placeholder="PIC" class="form-control" name="PIC" value="{{ old('PIC') }}">
                        </div>
                        <div class="form-group">
                            <input type="text" placeholder="PICPhone" class="form-control" name="Primary_Contact_No" value="{{ old('Primary_Contact_No') }}">
                        </div>
                        <div class="form-group">
                            <input type="text" placeholder="Sales Person" class="form-control" name="Sales_Person" value="{{ old('Sales_Person') }}">
                        </div>
                        <!-- <div class="form-group">
                            <input type="date" placeholder="Sales Person" class="form-control" name="Sales Person" value="{{ old('Tanggal', @$berita->Tanggal) }}">
                        </div> -->
                    </div>
                </div>
                
    <div class="row no-gutters">
    <div class="container">
            <div class="row">
                <div class="">
                    <h1 class="font-weight-bold judul text-left">II. BILLINNG REQUIREMENT</h1>
                    <hr class="line">
                </div>
            </div>
        </div>
    <br>
        <div class="col-md-6">    
                <div class="form-group">
                            <input type="text" placeholder="PIC Name" class="form-control" name="PIC_Billing_Name" value="{{ old('PIC_Billing_Name') }}">
                        </div>
                        <div class="form-group">
                            <input type="text" placeholder="PIC Contact No" class="form-control" name="PIC_Billing_Phone" value="{{ old('PIC_Billing_Phone') }}">
                        </div>
                        <div class="form-group">
                            <input type="text" placeholder="PIC Fax No" class="form-control" name="PIC_Billing_Fax" value="{{ old('PIC_Billing_Fax') }}">
                        </div>
                        <div class="form-group">
                            <input type="text" placeholder="PIC Email" class="form-control" name="PIC_Billing_Email" value="{{ old('PIC_Billing_Email') }}">
                        </div>
                        <div class="form-group">
                            <input type="datetime-local" placeholder="Contract Start" class="form-control" name="Contract_Start" value="{{ old('Contract_Start') }}">
                        </div>
                        <div class="form-group">
                            <input type="datetime-local" placeholder="Contract End" class="form-control" name="Contract_End" value="{{ old('Contract_End') }}">
                        </div>
                        <div class="form-group">
                            <input type="number" placeholder="Invoice Due Days" class="form-control" name="Due_Days" value="{{ old('Due_Days') }}">
                        </div>
                        <div class="form-group">
                            <input type="text" placeholder="Contract No" class="form-control" name="Contract_No" value="{{ old('Contract_No') }}">
                        </div>
                        
                </div>
        </div>

        <div class="row no-gutters">
    <div class="container">
            <div class="row">
                <div class="">
                    <h1 class="font-weight-bold judul text-left">III. TAXATION REQUIREMENT</h1>
                    <hr class="line">
                </div>
            </div>
        </div>
    <br>
    <div class="col-md-6">    
                <div class="form-group">
                        </div>
                        <div class="form-group">
                            <input type="text" placeholder="VAT No (NPWP)" class="form-control" name="NPWP" value="{{ old('NPWP') }}">
                        </div>
                        <div class="form-group">
                            <input type="text" placeholder="VAT Company Name" class="form-control" name="VAT_NAME" value="{{ old('VAT_NAME') }}">
                        </div>
                        <div class="form-group">
                            <input type="text" placeholder="VAT Address" class="form-control" name="VAT_Address" value="{{ old('VAT_Address') }}"></input>
                        </div>
                        <div class="form-group">
                            <input type="text" placeholder="VAT Street" class="form-control" name="VAT_Street" value="{{ old('VAT_Street') }}"></input>
                        </div>
                        <div class="form-group">
                            <input type="text" placeholder="VAT City" class="form-control" name="VAT_City" value="{{ old('VAT_City') }}">
                        </div>
                        <div class="form-group">
                            <input type="number" placeholder="VAT Prefik" class="form-control" name="VAT_Prefix" value="{{ old('VAT_Prefix') }}">
                        </div>
                        <button type="submit" class="btn btn-danger" href="#">RESET</button> <button type="submit" class="btn btn-secondary">SUBMIT</button>
                        
                </div>
        </div>
    <!-- </div>        
            </form>

            <div class="form-group">
                <textarea class="form-control" name="Isi">{{ old('Isi', @$berita->Isi) }}</textarea>
            </div>
            <button type="submit" class="btn btn-dark">SAVE</button> 
    </div> -->




@endsection

@section('script')
    <script src="{{ URL::asset('/js/addNewIsp.js')}}"></script>
@endsection


