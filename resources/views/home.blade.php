@extends('layout.template')

@section('title', 'Home')

@section('style')
  <link rel="stylesheet" href="{{ URL::asset('/css/home.css')}}">
@endsection

@section('home', 'aktif')

@section('info'  , 'sliding-underline')
@section('about' , 'sliding-underline')
@section('login' , 'sliding-underline')

@section('container')
    
<div class="container">
    <div class="row">
      <div class="col-8">
        <h1 class="mt-2"> TEST BAMBANG </h1>
      </div>
    </div>
</div>

@endsection

@section('script')
    <script src="{{ URL::asset('/js/home.js')}}"></script>
@endsection
   
   