<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ URL::asset('/assets/DataTables/Bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{ URL::asset('/assets/DataTables/datatables.min.css')}}">
    <link rel="stylesheet" href="{{ URL::asset('/assets/fontawesome/css/all.min.css')}}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    

@yield('style')


</head>
<body>  
    <header class="">
        <nav class="navbar navbar-expand-lg navbar-bordered bg-light">
            <a class="navbar-brand teks-secondary mb-1 pt-4 pb-1" href="#">ERP-SOLVINDO</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
    
            <div class="collapse navbar-collapse " id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                </ul>
                <a href="/dashboardAdmin">
                    <i class="fa fa-user-circle text-secondary ml-4" aria-hidden="true" style="font-size: 200%; "></i>
                </a>
                
                <!-- <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                </form> -->
            </div>
        </nav>
    </header>
    <!-- End Header -->
    <div class="row ">
        <div class=" side-bar">
            <ul class=" nav flex-column navs">
                <li class=" nav-item mb-2 pt-2 pb-2 sliding-underline">
            
                    <i class=" fas fa-tachometer-alt nav-icon la la-group text-secondary ml-4 " style=" font-size: 145%; "></i>
                    <a id="tombol6" class=" nav-link dropdown d-inline text-secondary " href="#">DASHBOARD</a>
                    <div id="boxx">
                        <ul class="transparent">
                            <li>
                                <li class="dropdown-item text-secondary waves-effect fas fa-folder" id="tap" style="font-size: 115%;">Aktifasi Customer</li>
                                    <div id="lol">
                                        <ul>
                                            <li class="">
                                                <a style="font-size: 105%; margin-left: 10px;" class="text-secondary waves-effect" href="/hospitalAdmin/create">
                                                    Activation Summary
                                                </a>
                                            </li>
                                            <li class="">
                                                <a style="font-size: 105%; margin-left: 10px;" class="text-secondary waves-effect" href="#">
                                                    Activation Summary Per ISP
                                                </a>
                                            </li>
                                            <li class="">
                                                <a style="font-size: 105%; margin-left: 10px;" class="text-secondary waves-effect" href="#">
                                                    Sales Per Week
                                                </a>

                                            </li>
                                            <li class="">
                                                <a style="font-size: 105%; margin-left: 10px;" class="text-secondary waves-effect" href="#">
                                                    Sales By Services
                                                </a>

                                            </li>
                                            <li class="">
                                                <a style="font-size: 105%; margin-left: 10px;" class="text-secondary waves-effect" href="#">
                                                    Sales Per Region
                                                </a>

                                            </li>
                                            <li class="">
                                                <a style="font-size: 105%; margin-left: 10px;" class="text-secondary waves-effect" href="#">
                                                    Last Mile Reports
                                                </a>

                                            </li>
                                        </ul>
                                    </div>
                            </li>
                        </ul>
                    </div>              
                </li>  
                <li class="nav-item  mb-2 pt-2 pb-2 sliding-underline dropdown">
                    <i class="fa fa-user-circle text-secondary ml-4" aria-hidden="true" style="font-size: 145%; "></i>
                    <a  id="tombol" class="nav-link dropdown collapsible-header  d-inline text-secondary" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="true">SALES AND MARKETING</a>
                    <div id="box" class=" collapsible-body">
                        <ul>
                            <li>
                                <li class="dropdown-item text-secondary waves-effect fas fa-folder" id="tombol2" style="font-size: 115%;">Aktifasi Customer</li>
                                        <div id="box2">
                                            <ul>
                                                <li class="">
                                                    <a style="font-size: 105%; margin-left: 10px;" class="text-secondary waves-effect" href="/hospitalAdmin/create">
                                                    Entri Data Prospek
                                                    </a>
                                                </li>
                                                <li class="">
                                                    <a style="font-size: 105%; margin-left: 10px;" class="text-secondary waves-effect" href="#">
                                                    Prospek Data
                                                    </a>
                                                </li>
                                                <li class="">
                                                    <a style="font-size: 105%; margin-left: 10px;" class="text-secondary waves-effect" href="#">
                                                    Proses Instalasi
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                <li class="dropdown-item text-secondary waves-effect fas fa-folder" style="font-size: 115%;" id="tombol3" href="#">Data Management</li>
                                    <div id="box3">
                                        <ul>
                                            <li class="">
                                                <a style="font-size: 115%; margin-left: 10px;" class="text-secondary waves-effect" href="#">
                                                Data Customer Aktif
                                                </a>
                                            </li>
                                            <li class="">
                                                <a style="font-size: 115%; margin-left: 10px;" class="text-secondary waves-effect" href="#">
                                                Dismantle Customer
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                <li class="dropdown-item text-secondary waves-effect fas fa-folder" style="font-size: 115%;" id="tombol4" href="#">Perubahan Data Customer</li>
                                    <div id="box4">
                                        <ul>
                                            <li class="">
                                                <a style="font-size: 115%; margin-left: 10px;" class="text-secondary waves-effect" href="#">
                                                Upgrade/Dowgrade
                                                </a>
                                            </li>
                                            <li class="">
                                                <a style="font-size: 115%; margin-left: 10px;" class="text-secondary waves-effect" href="#">
                                                Proses Dismatle
                                                </a>
                                            </li>
                                            <li class="">
                                                <a style="font-size: 115%; margin-left: 10px;" class="text-secondary waves-effect" href="#">
                                                Relokasi
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                <li class="dropdown-item text-secondary waves-effect fas fa-folder" style="font-size: 115%;" id="tombol5" href="#">Partner/ISP</li>
                                    <div id="box5">
                                        <ul>
                                            <li class="">
                                                <a style="font-size: 115%; margin-left: 10px;" class="text-secondary waves-effect" href="/ispPartner/create">
                                                Add New ISP/Partner
                                                </a>
                                            </li>
                                            <li class="">
                                                <a style="font-size: 115%; margin-left: 10px;" class="text-secondary waves-effect" href="/ispPartner">
                                                ISP/Partner Lists
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item mb-2 mt-2 pt-2 sliding-underline">
                        <i class="fas fa-users text-secondary ml-4 " style="font-size: 145%; "></i>
                        <a class="nav-link d-inline text-secondary " id="tombol12" href="{{url('#')}}">SALES & ADMIN</a>
                        <div id="boxxxx">
                        <ul>
                            <li>
                                <li class="dropdown-item text-secondary waves-effect fas fa-folder" id="tappp" style="font-size: 115%;">Sales Admin</li>
                                    <div id="lol3">
                                        <ul>
                                            <ul>
                                                <li class="">
                                                     <a style="font-size: 105%; margin-left: 10px;" class="text-secondary waves-effect" href="/hospitalAdmin/create">
                                                        Registered Customer
                                                    </a>
                                                </li>
                                                <li class="">
                                                     <a style="font-size: 105%; margin-left: 10px;" class="text-secondary waves-effect" href="#">
                                                        Request SPK
                                                    </a>
                                                 </li>
                                                 <li class="">
                                                     <a style="font-size: 105%; margin-left: 10px;" class="text-secondary waves-effect" href="#">
                                                        Proses Aktivasi
                                                    </a>
                                                 </li>
                                            </ul>
                                        </ul>
                                    </div>
                            </li>
                        </ul>
                        </div>
                        
                </li>
                <li class="nav-item mb-2 mt-2 pt-2 sliding-underline">
            
                        <i class="fas fa-cubes text-secondary ml-4 " style="font-size: 145%; "></i>
                        <a class="nav-link d-inline text-secondary " id="tombol7" href="{{url('#')}}">ASSET & INVENTORY</a>
                        <div id="boxxx">
                        <ul>
                            <li>
                                <li class="dropdown-item text-secondary waves-effect fas fa-folder" id="tapp" style="font-size: 115%;">INVESTMENT PROPERTY</li>
                                    <div id="lol2">
                                        <ul>
                                            <li class="">
                                                <a style="font-size: 105%; margin-left: 10px;" class="text-secondary waves-effect" href="/hospitalAdmin/create">
                                                Land
                                                </a>
                                            </li>
                                            <li class="">
                                                <a style="font-size: 105%; margin-left: 10px;" class="text-secondary waves-effect" href="#">
                                                Building
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <li class="dropdown-item text-secondary waves-effect fas fa-folder" id="tombol8" style="font-size: 115%;">FIXED ASSET</li>
                                    <div id="box8">
                                        <ul>
                                            <li class="">
                                                <a style="font-size: 105%; margin-left: 10px;" class="text-secondary waves-effect" href="/hospitalAdmin/create">
                                                Land
                                                </a>
                                            </li>
                                            <li class="">
                                                <a style="font-size: 105%; margin-left: 10px;" class="text-secondary waves-effect" href="#">
                                                Building
                                                </a>
                                            </li>
                                            <li class="">
                                                <a style="font-size: 105%; margin-left: 10px;" class="text-secondary waves-effect" href="/hospitalAdmin/create">
                                                Venicle
                                                </a>
                                            </li>
                                            <li class="">
                                                <a style="font-size: 105%; margin-left: 10px;" class="text-secondary waves-effect" href="#">
                                                Elektronic and IT
                                                </a>
                                            </li>
                                            <li class="">
                                                <a style="font-size: 105%; margin-left: 10px;" class="text-secondary waves-effect" href="/hospitalAdmin/create">
                                                Furniture
                                                </a>
                                            </li>
                                            <li class="">
                                                <a style="font-size: 105%; margin-left: 10px;" class="text-secondary waves-effect" href="#">
                                                Software
                                                </a>
                                            </li>
                                        </ul>
                                    </div>  
                                    <li class="dropdown-item text-secondary waves-effect fas fa-folder" id="tombol9" style="font-size: 115%;">ASSET OPERATION</li>
                                    <div id="box9">
                                        <ul>
                                            <li class="">
                                                <a style="font-size: 105%; margin-left: 10px;" class="text-secondary waves-effect" href="/hospitalAdmin/create">
                                                Moving Asset
                                                </a>
                                            </li>
                                            <li class="">
                                                <a style="font-size: 105%; margin-left: 10px;" class="text-secondary waves-effect" href="#">
                                                Appraisal and Disposal 
                                                </a>
                                            </li>
                                        </ul>
                                    </div>   
                                    <li class="dropdown-item text-secondary waves-effect fas fa-folder" id="tombol10" style="font-size: 115%;">New Incoming</li> 
                                    <div id="box10">
                                        <ul>
                                            <li class="">
                                                <a style="font-size: 105%; margin-left: 10px;" class="text-secondary waves-effect" href="/hospitalAdmin/create">
                                                Incoming Parts
                                                </a>
                                            </li>                                
                                        </ul>
                                    </div>
                                    <li class="dropdown-item text-secondary waves-effect fas fa-folder" id="tombol11" style="font-size: 115%;">Master Data</li> 
                                    <div id="box11">
                                        <ul>
                                            <li class="">
                                                <a style="font-size: 105%; margin-left: 10px;" class="text-secondary waves-effect" href="/hospitalAdmin/create">
                                                Master Product Code
                                                </a>
                                            </li>                                
                                        </ul>
                                    </div> 
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item mb-2 mt-2 pt-2 sliding-underline">
            
                        <i class="fas fa-desktop text-secondary ml-4 " style="font-size: 145%; "></i>
                        <a class="nav-link d-inline text-secondary " href="{{url('#')}}">N O C</a>
                </li>
                <li class="nav-item mb-2 mt-2 pt-2 sliding-underline">
            
                        <i class="fa fa-credit-card text-secondary ml-4 " style="font-size: 145%; "></i>
                        <a class="nav-link d-inline text-secondary " href="{{url('#')}}">FINANCE</a>
                </li>
                <li class="nav-item mb-2 mt-2 pt-2 sliding-underline">
            
                        <i class="fas fa-industry text-secondary ml-4 " style="font-size: 145%; "></i>
                        <a class="nav-link d-inline text-secondary " href="{{url('#')}}">ANALISIS INVESTASI</a>
                </li>
                <li class="nav-item mb-2 mt-2 pt-2 sliding-underline">
            
                        <i class="fas fa-user-plus text-secondary ml-4 " style="font-size: 145%; "></i>
                        <a class="nav-link d-inline text-secondary " href="{{url('#')}}">HUMAN RESOURCE</a>
                </li>
                <li class="nav-item mb-2 mt-2 pt-2 sliding-underline">
            
                        <i class="fas fa-cogs text-secondary ml-4 " style="font-size: 145%; "></i>
                        <a class="nav-link d-inline text-secondary " href="{{url('#')}}">OPERATION</a>
                </li>
                <li class="nav-item mb-2 mb-2 mt-2 pt-2 profil pb-2 sliding-underline">
            
                        <i class="fas fa-envelope text-secondary ml-4 " style="font-size: 145%; "></i>
                        <a class="nav-link d-inline text-secondary " href="{{url('/pesan')}}">PESAN</a>
                </li>
                <li class="nav-item pt-2 pb-2 mt-2  sliding-underline">
            
                        <i class="fas fa-sign-out-alt text-secondary ml-4 " style="font-size: 145%; "></i>
                        <a class="nav-link d-inline text-secondary " href="{{ route('logout') }}">LOGOUT</a>
                </li>
                <li class=" nav-item pt-2 pb-2 mt-2 ">
                
                </li>
            </ul>
        </div>
        
        @yield('container')

    <script src="{{URL::asset('/assets/DataTables/jQuery/jquery-3.3.1.min.js')}}"></script>
    <script src="{{URL::asset('/assets/DataTables/Bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{URL::asset('/assets/DataTables/datatables.min.js')}}"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <script src="{{URL::asset('/assets/DataTables/jQuery/jquery-3.3.1.js')}}"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <!-- JS Implementing Plugins -->
    <script src="../assets/vendor/hs-unfold/dist/hs-unfold.min.js"></script>

    <script>
    $(document).on('ready', function () {
        // initialization of unfold
        $('.js-hs-unfold-invoker').each(function () {
        var unfold = new HSUnfold($(this)).init();
        });
    });
    </script>

    @yield('script')

</body>
</html>