@extends('layout/templateAdmin')

@section('title', 'ispPartner')

@section('style')
    <link rel="stylesheet" href="{{ URL::asset('/css/ispPartner.css')}}">
@endsection
    
@section('container')

<div class="col-md-10 content scrollmenu" >
	  
    <h1 class="judul mt-2 ml-2 text-dark"><i class="fas fa-newspaper ml-4" style="margin-left:100%;"></i> Add New Isp
    <a class="btn btn-outline-dark tombol" href="{{url('/ispPartner/create')}}">
       <h4 class="d-inline">
           <i class="fas fa-plus"></i>
       </h4> 
    </a>
    </h1>
	<hr class="line">
	@if (session('status'))
        <div class="alert alert-success">
            {{ session('status')}}
        </div>
    @endif 
	<div class="wadah mb-5 table-responsive" style="overflow-x:auto;">
		<table class="table display table-color ml-auto mr-auto table-bordered text-dark" id="myTable">
			<thead class="thead-light">
			
				<tr>
					<th>No</th>
					<th>Account No</th>
					<th>Company Name</th>
					<th>Alias</th>
					<th>Address</th>
					<th>Street</th>
					<th>City</th>
					<th>Zip Code</th>
					<th>Phone</th>
					<th>Fax</th>
					<th>Email</th>
					<th>NPWP</th>
					<th>Status</th>
					<th>Due Days</th>
					<th>Vat_Address</th>
					<th>Vat_Street</th>
					<th>Vat_City</th>
					<th>Vat_Country</th> 
					<th>Vat_Phone</th>
					<th>Vat_Name</th> 
					<th>Created Date</th>
					<th>Created By</th>
					<th>Aksi</th>
				</tr>
			</thead>
			
			<tbody>
				@foreach ($customers as $row)
				<tr>
					<td>{{ isset($i) ? ++$i : $i = 1}}</td>
					<td>{{ $row->id }}</td>
					<td>{{ $row->Company_Name }}</td>
					<td>{{ $row->Acc_Parent }}</td>
					<td>{{ $row->Address }}</td>
					<td>{{ $row->Street }}</td>
					<td>{{ $row->City }}</td>
					<td>{{ $row->ZipCode }}</td>
					<td>{{ $row->Phone }}</td>
					<td>{{ $row->Fax }}</td>
					<td>{{ $row->Email }}</td>
					<td>{{ $row->NPWP }}</td>
					<td>{{ $row->Status }}</td>
					<td>{{ $row->Due_Days }}</td>
					<td>{{ $row->VAT_Address }}</td>
					<td>{{ $row->VAT_Street }}</td>
					<td>{{ $row->VAT_City }}</td>
					<td>{{ $row->VAT_Country }}</td>
					<td>{{ $row->VAT_Phone }}</td>
					<td>{{ $row->VAT_NAME }}</td>
					<td>{{ $row->Created_Date }}</td>
					<td>{{ $row->Created_By }}</td>
					<td style="border-right: none;">
                        <div class="row">
                            <div class="col-md-6">
                                <a class="btn btn-success" href="{{ url('/ispPartner/'.$row->id .'/edit') }}">
                                    <i class="far fa-edit tio-edit font-weight-bold text-white"></i> Edit
                                </a>              
                                <form class="d-inline" action="{{ url('/ispPartner',$row->id) }}" method="POST">
                                    @method('DELETE')
                                    @csrf
                                    <button type="submit" class="btn btn-danger"><i class="fas fa-trash text-white"></i></button>
                                </form>
                            </div>
                        </div>
                    </td>
					@endforeach
				</tr>
			</tbody>
		</table>
		<a href="/customer/export_excel" class="btn btn-success" target="_blank" style="margin-right:90%;">EXPORT EXCEL</a>
	</div>
	
	
</div>
@endsection

@section('script')
	<script src="{{ URL::asset('/js/ispPartner.js')}}"></script>
	<script src="../node_modules/table-edits/build/table-edits.min.js"></script>
@endsection
