<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>

    <link rel="stylesheet" href="{{ URL::asset('/assets/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{ URL::asset('/assets/fontawesome/css/all.min.css')}}">
    @yield('style')

</head>
<body>
    <nav class="navbar navbar-expand-lg fixed-top">
      <a class="navbar-brand " href="#">ERP-SOLVINDO</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <center>
          <ul class="navbar-nav ml-auto">
            <a class="nav-item nav-link text-decoration-none font-weight-bold mr-2 ml-2 @yield('home')" href="{{url('/home')}}">HOME</a>
          </ul>
        </center>
          <ul class="navbar-nav ml-auto">
            <a class="nav-item nav-link font-weight-bold mr- ml-2 @yield('about')" href="{{url('/about')}}">ABOUT US</a>
            <a class="nav-item nav-link font-weight-bold mr-4 ml-2 @yield('login')" href="{{url('/login')}}">LOGIN</a>
          </ul>
      </div>
      <form class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </nav>

      @yield('container')
    
      <!-- <section class="footer_one home pb0">
        <div class="container">
          <div class="row mt10 pb50">
            <div class="col-lg-12">
              <div class="copyright-widget text-center mt25">
                <p class="color-gray">&copy 2020 ERP SOVINDO</p>
              </div>
            </div>
          </div>
        </div>
      </section> -->
    
      <script src="{{URL::asset('/assets/bootstrap/js/jquery-3.4.1.min.js')}}"></script>
      <script src="{{URL::asset('/assets/bootstrap/js/popper.min.js')}}"></script>
      <script src="{{URL::asset('/assets/bootstrap/js/bootstrap.min.js')}}"></script>
      <script src="{{URL::asset('/assets/bootstrap/js/bootstrap.js')}}"></script>
      <script src="{{URL::asset('/assets/bootstrap/js/sweetalert2.all.min.js')}}"></script>
      @yield('script')
</body>
</html>