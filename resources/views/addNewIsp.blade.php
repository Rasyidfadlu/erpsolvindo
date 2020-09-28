@extends('layout/templateAdmin')

@section('title', 'Form Berita')

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

            <form action="{{ url('beritaAdmin', @$berita->id) }}" method="POST" enctype="multipart/form-data">
                <div class="row no-gutters">
                    <div class="col-md-6">
                        @csrf
                        @if(!empty($berita))
                            @method('PATCH')
                        @endif         
                        <div class="form-group">
                            <input type="text" placeholder="Account Name" class="form-control" name="Account" value="{{ old('Judul', @$berita->Judul) }}">
                        </div>
                        <div class="form-group">
                            <input type="text" placeholder="Alias(Nama Pangilan)" class="form-control" name="Alias" value="{{ old('Headline', @$berita->Headline) }}">
                        </div>
                        <div class="form-group">
                            <textarea type="text" placeholder="Address" class="form-control" name="Address" value="{{ old('Judul', @$berita->Judul) }}"></textarea>
                        </div>
                        <div class="form-group">
                            <textarea type="text" placeholder="Street" class="form-control" name="Street" value="{{ old('Headline', @$berita->Headline) }}"></textarea>
                        </div>
                        <div class="form-group">
                            <input type="text" placeholder="City" class="form-control" name="city" value="{{ old('Judul', @$berita->Judul) }}">
                        </div>
                        <div class="form-group">
                            <input type="text" placeholder="Province" class="form-control" name="Province" value="{{ old('Headline', @$berita->Headline) }}">
                        </div>
                        <div class="form-group">
                            <input type="text" placeholder="Zip Code" class="form-control" name="Zip Code" value="{{ old('Judul', @$berita->Judul) }}">
                        </div>
                        <div class="form-group">
                            <input type="text" placeholder="Phone" class="form-control" name="Phone" value="{{ old('Headline', @$berita->Headline) }}">
                        </div>
                        <div class="form-group">
                            <input type="text" placeholder="FAX" class="form-control" name="FAX" value="{{ old('Judul', @$berita->Judul) }}">
                        </div>
                        <div class="form-group">
                            <input type="text" placeholder="Email" class="form-control" name="Email" value="{{ old('Headline', @$berita->Headline) }}">
                        </div>
                        <div class="form-group">
                            <input type="text" placeholder="PIC" class="form-control" name="PIC" value="{{ old('Judul', @$berita->Judul) }}">
                        </div>
                        <div class="form-group">
                            <input type="text" placeholder="PIC Phone" class="form-control" name="PIC Phone" value="{{ old('Headline', @$berita->Headline) }}">
                        </div>
                        <div class="form-group">
                            <input type="text" placeholder="Sales Person" class="form-control" name="Sales Person" value="{{ old('Headline', @$berita->Headline) }}">
                        </div>
                        <!-- <div class="form-group">
                            <input type="date" placeholder="Sales Person" class="form-control" name="Sales Person" value="{{ old('Tanggal', @$berita->Tanggal) }}">
                        </div> -->
                        <div class="form-group">
                            <textarea class="form-control" name="Isi">{{ old('Isi', @$berita->Isi) }}</textarea>
                        </div>
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
                            <input type="text" placeholder="PIC Name" class="form-control" name="PIC Name" value="{{ old('Judul', @$berita->Judul) }}">
                        </div>
                        <div class="form-group">
                            <input type="text" placeholder="PIC Contact No" class="form-control" name="PIC Contact No" value="{{ old('Headline', @$berita->Headline) }}">
                        </div>
                        <div class="form-group">
                            <input type="text" placeholder="PIC Fax No" class="form-control" name="PIC Fax No" value="{{ old('Judul', @$berita->Judul) }}">
                        </div>
                        <div class="form-group">
                            <input type="text" placeholder="PIC Email" class="form-control" name="PIC Email" value="{{ old('Headline', @$berita->Headline) }}">
                        </div>
                        <div class="form-group">
                            <input type="datetime-local" placeholder="Contract Start" class="form-control" name="Contract Start" value="{{ old('Judul', @$berita->Judul) }}">
                        </div>
                        <div class="form-group">
                            <input type="datetime-local" placeholder="Contract End" class="form-control" name="Contract End" value="{{ old('Headline', @$berita->Headline) }}">
                        </div>
                        <div class="form-group">
                            <input type="number" placeholder="Invoice Due Days" class="form-control" name="Invoice Due Days" value="{{ old('Judul', @$berita->Judul) }}">
                        </div>
                        <div class="form-group">
                            <input type="text" placeholder="Contract No" class="form-control" name="Contract No" value="{{ old('Headline', @$berita->Headline) }}">
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
            <span class="text-secondary">PPH</span>
          <input type="checkbox" placeholder="PPH" style="margin-left : 200px;" name="PPH" value="{{ old('Judul', @$berita->Judul) }}">
                            
                        </div>
                        <div class="form-group">
                            <input type="text" placeholder="VAT No (NPWP)" class="form-control" name="VAT No (NPWP)" value="{{ old('Headline', @$berita->Headline) }}">
                        </div>
                        <div class="form-group">
                            <input type="text" placeholder="VAT Company Name" class="form-control" name="VAT Company Name" value="{{ old('Judul', @$berita->Judul) }}">
                        </div>
                        <div class="form-group">
                            <textarea type="text" placeholder="VAT Address" class="form-control" name="VAT Address" value="{{ old('Headline', @$berita->Headline) }}"></textarea>
                        </div>
                        <div class="form-group">
                            <textarea type="text" placeholder="VAT Street" class="form-control" name="VAT Street" value="{{ old('Judul', @$berita->Judul) }}"></textarea>
                        </div>
                        <div class="form-group">
                            <input type="text" placeholder="VAT City" class="form-control" name="VAT City" value="{{ old('Headline', @$berita->Headline) }}">
                        </div>
                        <div class="form-group">
                            <input type="number" placeholder="VAT Prefik" class="form-control" name="VAT Prefik" value="{{ old('Judul', @$berita->Judul) }}">
                        </div>
                        <div class="form-group">
                            <input type="text" placeholder="Contract No" class="form-control" name="Contract No" value="{{ old('Headline', @$berita->Headline) }}">
                        </div>
                        
                </div>
        </div>
    </div>        
            </form>

            <div class="form-group">
                <textarea class="form-control" name="Isi">{{ old('Isi', @$berita->Isi) }}</textarea>
            </div>
            <button type="submit" class="btn btn-dark">SAVE</button> 
    </div>




@endsection

@section('script')
    <script src="{{ URL::asset('/js/addNewIsp.js')}}"></script>
@endsection


