@extends('layout.templateAdmin')

@section('title', 'Entri Data Prospek')

@section('style')
    <link rel="stylesheet" href="{{ URL::asset('/css/edp.css')}}">
@endsection
    
@section('container')

<?php

$action = 'input';
$title = '  <i class="fas fa-list-ul ml-4"></i> Entri Data Prospek';

if (!empty($customer)){

$action = 'edit';
$title = ' <i class=" fas fa-edit ml-4 "></i> EDIT ';

}
?>

<div class="col-md-10 content">
    <h1 class="judul mt-2 ml-2 text-dark"> <?= $title ?> </h1>
    <hr class="line">

    <div class="card border-dark ml-auto mr-auto" ">
        <div class="card-body border" >
            <a class="text-decoration-none" href="{{ url('/dashboardAdmin') }}">
                <i class="fas fa-arrow-left"></i> Back
            </a>
        </div>
    </div>

    <div class="border-form  ml-auto mr-auto p-4">

        <form action="{{ url('hospitalAdmin', @$customer->id) }}" method="post" enctype="multipart/form-data">
            <div class="row no-gutters">
                <div class="col-md-6">
                    @csrf
                    @if(!empty($customer))
                        @method('PATCH')
                    @endif
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <h1 class="font-weight judul text-left mt-5">I. ISP/PROVIDER</h1>
                                <hr class="line">
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <!--<label for="">Nama Rumah Sakit</label>-->
                        <form style="">
                            <select class="form-input col-md-5 pt-2 font-weight-bold" name="Company_Name" onchange="showCustomer(this.value)">
                                <option value="">ISP</option>
                                <option value="1">PT. Skyline Semesta</option>
                                <option value="2">Melvar Lintasnusa, PT</option>
                                <option value="3">PT MNC Kabel Mediacom</option>
                            </select>
                            <script>
                                function showCustomer(str) {  
                                fetch('getInputDetail')
                                .then(data => {
                                    console.log(data.toJSON())
                                }).catch(error => {
                                    console.log(error.toJSON())
                                });
                            </script>
                        </form>
                        <input type="text" class="form-input col-md-7 pt-2" name="nm_rumahsakit" value="{{ old('', @$customer->) }}" disabled="disabled" placeholder="PROVIDER">
                        <br><br>
                    </div>
                    <div class="form-group">
                        <!--<label for="">Tingkat Rujukan</label>-->
                        <input type="text" disabled="disabled" class="form-control" disabled="disabled" name="" value="{{ old('',@$customer->)}}" placeholder="TELEPHONE">
                    </div>
                    <div class="form-group">
                        
                        <input type="text" class="form-control" disabled="disabled" name="" value="{{ old('',@$customer->)}}" placeholder="FAX">
                    </div>
                    <div class="form-group">
                        
                        <input type="text" class="form-control" disabled="disabled" name="" value="{{ old('',@$customer->)}}" placeholder="PIC">
                    </div>
                    <div class="form-group">
                        
                        <input type="text" class="form-control" disabled="disabled" name="" value="{{ old('',@$customer->)}}" placeholder="JABATAN">
                    </div>
                    <div class="form-group">
                        
                        <input type="text" class="form-control" disabled="disabled" name="" value="{{ old('',@$customer->)}}" placeholder="HP">
                    </div>
                    <div class="form-group">
                        
                        <input type="text" class="form-control" disabled="disabled" name="" value="{{ old('',@$customer->)}}" placeholder="EMAIL">
                    </div>
                    <div class="form-group">
                        
                        <input type="text" class="form-control" disabled="disabled" name="" value="{{ old('',@$customer->)}}" placeholder="PIC 2 (Billing)">
                    </div>
                    <div class="form-group">
                        
                        <input type="text" class="form-control" disabled="disabled" name="" value="{{ old('',@$customer->)}}" placeholder="PIC 2 Phone">
                    </div>
                    <div class="form-group">   
                        <input type="text" class="form-control" disabled="disabled" name="" value="{{ old('',@$customer->)}}" placeholder="PHONE (work)">
                    </div>

                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <h1 class="font-weight judul text-left mt-5">II. DATA PROSPEK</h1>
                                <hr class="line">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">   
                        <input type="text" class="form-control" name="" value="{{ old('',@$customer->)}}" placeholder="NAMA LOKASI" required="Form harus diisi">
                    </div>
                    <div class="form-group">
                        <textarea class="form-control" name="Alamat" placeholder="ALAMAT" required="Form harus diisi">{{old('Alamat', @$customer->Alamat)}}</textarea>
                    </div>
                    <div class="form-group">   
                        <input type="text" class="form-control" name="" value="{{ old('',@$customer->)}}" placeholder="KOTA" required="Form harus diisi">
                    </div>
                    <div class="form-group">   
                        <input type="text" class="form-control" name="" value="{{ old('',@$customer->)}}" placeholder="PROVINSI" required="Form harus diisi">
                    </div>
                    <div class="form-group">   
                        <input type="text" class="form-control" name="" value="{{ old('',@$customer->)}}" placeholder="LATITUDE" required="Form harus diisi">
                    </div>
                    <div class="form-group">   
                        <input type="text" class="form-control" name="" value="{{ old('',@$customer->)}}" placeholder="LONGTITUDE" required="Form harus diisi">
                    </div>
                    <div class="form-group">
                        <textarea class="form-control" name="Alamat" placeholder="NOTE/CATATAN" required="Form harus diisi">{{old('Alamat', @$customer->Alamat)}}</textarea>
                    </div>
                    <button type="submit" class="btn btn-danger">RESET</button>   <button type="submit" class="btn btn-secondary">SUBMIT</button>
                </div>
            
                <!--<div class="col-md-6">
                    <div class="form-group">
                        <div>
                            <input type="file" name="file" id="chooseFile" class="form-control-file add " >
                                <?php if ($action == "edit") { ?>
                                    <img id="preview" class="img-edit"  src="{{asset('assets/image/'.$customer->file)}}" alt="" width="258" height="258">
                                    <input type="hidden" name="file" id="chooseFile" class="form-control-file " value="{{old('file', $customer->file)}}">
                                <?php } ?>
                                <div class="box ml-auto mr-auto">
                                    <img id="preview" src="{{asset('assets/image/no-image.jpg')}}" alt="" width="258" height="258">
                                </div>

                                {{-- <div class="box ml-auto mr-auto mb-3">
                                    <img id="preview" src="{{asset('/assets/image/no-image.jpg')}}" alt="" width="358" height="358">
                                </div>
                                <input type="file" name="file" id="chooseFile" class="form-control-file"> --}}
                        </div>
                    </div>-->
                    
                </div>
            </div>
        </form>
    </div>

</div>

@endsection

@section('script')
    <script src="{{ URL::asset('/js/edp.js')}}"></script>
@endsection


