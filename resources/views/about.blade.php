@extends('layout.template')

@section('title', 'About Us')

@section('style')
  <link rel="stylesheet" href="{{ URL::asset('/css/about.css')}}">
@endsection

@section('about' , 'aktif')

@section('home', 'sliding-underline')
@section('login', 'sliding-underline')

@section('container')

<div class="flash-data" data-flashdata="{{session('success')}}"></div>

    <section class="about">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="font-weight-bold judul text-center mt-5">ABOUT</h1>
                    <hr class="line">
                </div>
            </div>
        </div>
            <div class="row w-75 ml-auto mr-auto">
                <div class="col-md-6">
                    <p class="pKiri">
                        Web Covid-Info ini dibuat dengan tujuan sebagai sumber informasi digital mengenai segala bentuk hal-hal yang berkaitan dengan virus covid-19 yang saat ini sangat menggemparkan masyarakat dunia. dengan adanya web ini semoga membantu para masyarakat dan lembaga penting yang membutuhkan data lengkap mengenai covid-19 dalam cakupan internasional, nasional, bahkan provinsi secara real time dan up to date.
                    </p>     
                </div>
                <div class="col-md-6">
                    <p class=" pKanan">
                        Anda juga dapat ikut berkontribusi bersama kami para admin pengembang, dengan cara memberikan laporan yang berkaitan dengan covid-19. Baik itu berita, informasi mengenai rujukan rumah sakit di daerah kalian ataupun masukan mengenai kekurangan & pengembangan bagi web ini demi kenyamanan bersama. Semua itu dapat kalian lakukan melalui form Contact Us yang akan kalian temukan dibawah ini
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="contact">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="font-weight-bold judul text-center mt-5">CONTACT US</h1>
                    <hr class="line">
                </div>
            </div>
        </div>
            <div class="row w-75 ml-auto mr-auto">
                <!-- <div class="col-md-6 bgKiri">
                   <img src="{{ URL::asset('/assets/image/login.gif')}}" width="400" height="400" alt="">
                </div> -->
                <div class="col-md-6 pt-4 formKanan">
                    <form action="{{ url('about') }}" method="post">
                        @csrf
                        <div class="form-group">
                            <input type="text" name="nama" class="form-input font-weight-bold " style="margin-left: 250px;" placeholder="YOUR NAME">
                        </div>
                        <div class="form-group mt-4">
                            <input type="email" name="email" class="form-input font-weight-bold " style="margin-left: 250px;" placeholder="YOUR E-MAIL ADDRESS">
                        </div>  
                        <div class="form-group mt-4">
                            <input type="tel" name="phone" class="form-input font-weight-bold " style="margin-left: 250px;" placeholder="YOUR NUMBER PHONE">
                        </div>
                        <div class="form-group mt-4">
                            <textarea class="form-input font-weight-bold" name="message" style="margin-left: 250px;" placeholder="YOUR MESSAGE"></textarea>
                        </div>
                        <button type="submit" class="btn tombol font-weight-bold mb-3" style="margin-left: 250px;">SEND</button>
                    </form>
                </div>
            </div>
    </section>

    @endsection

@section('script')
    <script src="{{ URL::asset('/js/about.js')}}"></script>
@endsection