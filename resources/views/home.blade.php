@extends('layout.template')

@section('title', 'Home')

@section('style')
  <link rel="stylesheet" href="{{ URL::asset('/css/home.css')}}">
  <style>
      body{
        background-image:url('assets/image/login.jpg');
        background-repeat:no-repeat;
        background-size:cover;
      }
    </style>
@endsection

@section('home', 'aktif')

@section('about' , 'sliding-underline')
@section('login' , 'sliding-underline')

@section('container')
    
<!-- <img class="bg-home" src="{{ URL::asset('/assets/image/login.jpg')}}" alt=""> -->
<div class="content scrollmenu">
    <div class="artikel">
      <span class="judul">SOLVINDO</span>
      <p class="konten mt-4 mb-4">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ullam sequi dicta pariatur tempora culpa inventore possimus a nesciunt? Veritatis, quia dolorem quis nesciunt eaque similique rem commodi placeat neque nam?</p>
      <a href="{{url('/#')}}"><button class="btn btn-outline-success">Get Started</button></a>
      <a href="{{url('/#')}}"><button class="btn btn-outline-success">View Demo</button></a>
    </div>
</div>

@endsection

@section('script')
    <script src="{{ URL::asset('/js/home.js')}}"></script>
@endsection
   
   