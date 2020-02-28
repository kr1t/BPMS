<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}" />

        <title>{{ config("app.name", "Laravel") }}</title>

        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet" />
        <link href="{{ asset('css/style.css') }}" rel="stylesheet" />

        <link
            rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
        />
        <style>
            @import url('https://fonts.googleapis.com/css?family=Bai+Jamjuree:400,500,600,700&display=swap&subset=thai');
            html,
            body {
                font-family: 'Bai Jamjuree' !important;
                background-color:#175A87;
                font-weight: 700;
            }
            .bradcam_area {
                padding: 170px;
                background-size: cover;
                background-position: center center;
                padding: 148px 0px;
                background-repeat: no-repeat;
            }
            .breadcam_bg_2 {
                background-image: url(../img/banner/bradcam3.png);
            }
            .icon-fa {
                font-size: 15px;
                color: #5db2ff;
                margin-right: 12px;
            }
            .icon-fa a:hover {
                color: #5db2ff;
            }
            .menu-list {
                color: #5db2ff !important;
                border-bottom: 1px solid #5db2ff;
            }
            .navbar-light .navbar-nav .nav-link:focus,
            .navbar-light .navbar-nav .nav-link:hover {
                color: #5db2ff;
            }
            a {
                text-decoration: none;
            }
            .navbar-laravel{
                background-color: #175A87;
                
            }
            .nav-link{
                color: #fff !important;
            }
            .nav-link:hover{
                font-size: 16px;
                transition: 600ms;
                border-bottom: 1px solid #fff;
            }
            .navbar-brand{
                color: #fff !important;
            }
            .navbar-brand:hover{
                font-size: 20px;
                transition: 800ms;
            }
            
            /* Footer */
            @import url('https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
            section {
                padding: 60px 0;
            }

            section .section-title {
                text-align: center;
                color: #007b5e;
                margin-bottom: 50px;
                text-transform: uppercase;
            }
            #footer {
                background: #1f1f1f !important;
                margin-top: 40px;
            }
            #footer h5{
                padding-left: 10px;
                border-left: 3px solid #eeeeee;
                padding-bottom: 6px;
                margin-bottom: 20px;
                color:#ffffff;
            }
            #footer a {
                color: #ffffff;
                text-decoration: none !important;
                background-color: transparent;
                -webkit-text-decoration-skip: objects;
            }
            #footer ul.social li{
                padding: 3px 0;
            }
            #footer ul.social li a i {
                margin-right: 5px;
                font-size:25px;
                -webkit-transition: .5s all ease;
                -moz-transition: .5s all ease;
                transition: .5s all ease;
            }
            #footer ul.social li:hover a i {
                font-size:30px;
                margin-top:-10px;
            }
            #footer ul.social li a,
            #footer ul.quick-links li a{
                color:#ffffff;
            }
            #footer ul.social li a:hover{
                color:#eeeeee;
            }
            #footer ul.quick-links li{
                padding: 3px 0;
                -webkit-transition: .5s all ease;
                -moz-transition: .5s all ease;
                transition: .5s all ease;
            }
            #footer ul.quick-links li:hover{
                padding: 3px 0;
                margin-left:5px;
                font-weight:700;
            }
            #footer ul.quick-links li a i{
                margin-right: 5px;
            }
            #footer ul.quick-links li:hover a i {
                font-weight: 700;
            }
            #footer h5,#footer a,#footer i{
                color:#c7c7c7 !important;
            }

            @media (max-width:767px){
                #footer h5 {
                padding-left: 0;
                border-left: transparent;
                padding-bottom: 0px;
                margin-bottom: 10px;
            }
            }
            .fc-title{
                color: #fff;
            }
            .bodystyle{
                background-image:url('/images/pattern.png'); background-repeat:repeat;
            }
            </style>
    </head>

    <body class="bodystyle">
        <div id="app">
           
            <nav class="navbar navbar-expand-md navbar-light navbar-laravel shadow">
                <div class="container">
                    <a
                        class="navbar-brand"
                        href="{{ Auth::check() ? url('/home') : url('/')}}"
                    >
                       BPMS
                    </a>
                    <button
                        class="navbar-toggler"
                        type="button"
                        data-toggle="collapse"
                        data-target="#navbarSupportedContent"
                        aria-controls="navbarSupportedContent"
                        aria-expanded="false"
                        aria-label="Toggle navigation"
                    >
                    <span class="navbar-toggler-icon"></span>
                    </button>

                    <div
                        class="collapse navbar-collapse"
                        id="navbarSupportedContent"
                    >
                        
                        <ul class="navbar-nav mr-auto"></ul>

                        
                        <ul class="navbar-nav ml-auto">
                            <!-- Authentication Links -->
                            @if(!Auth::check())
                            <li>
                                <a class="nav-link menu-item" href="{{ url('/login') }}"
                                    >เข้าสู่ระบบ</a
                                >
                            </li>
                            <li>
                                <a
                                    class="nav-link"
                                    href="{{ url('/register') }}"
                                    >สมัครสมาชิก</a
                                >
                            </li>
                            @else
                            <ul class="navbar-nav mr-auto mt-2">
                                <li class="nav-item ">
                                    <a class="nav-link" href="#"
                                        >หน้าแรก
                                        <!-- <span class="sr-only">(current)</span> -->
                                    </a>
                                </li>
                                
                                <li class="nav-item">
                                    <a
                                        class="nav-link"
                                        href="{{ url('/nurse/patients') }}"
                                        >รายการผู้ป่วย</a
                                    >
                                </li>
                                <li class="nav-item">
                                    <a
                                        class="nav-link"
                                        href="{{ url('/tasks') }}"
                                        >ปฏิทิน</a
                                    >
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ url('#') }}"
                                        >บุคลากร</a
                                    >
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">ติดต่อ</a>
                                </li>
                            </ul>
                            <li class="nav-item dropdown">
                                <a
                                    id="navbarDropdown"
                                    class="nav-link dropdown-toggle"
                                    href="#"
                                    role="button"
                                    data-toggle="dropdown"
                                    aria-haspopup="true"
                                    aria-expanded="false"
                                >

                                    <img
                                        src="{{ Auth::user()->avatar_url }}"
                                        width="40"
                                        height="40"
                                        class="avatar"
                                    />

                                    {{ Auth::user()->uid }} :
                                    {{ Auth::user()->name }}
                                    <span class="caret"></span>
                                </a>

                                <div
                                    class="dropdown-menu"
                                    aria-labelledby="navbarDropdown"
                                >
                                    <a class="dropdown-item" href="/profile">
                                        User Profile
                                    </a>
                                    <a
                                        class="dropdown-item"
                                        href="{{ url('/logout') }}"
                                        onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"
                                    >
                                        Logout
                                    </a>

                                    <form
                                        id="logout-form"
                                        action="{{ url('/logout') }}"
                                        method="POST"
                                        style="display: none;"
                                    >
                                        @csrf
                                    </form>
                                </div>
                            </li>
                            @endif
                        </ul>
                    </div>
                </div>
            </nav>

            <!-- bradcam_area_start  -->
            @if(Auth::check())
            <div
                id="carouselExampleControls"
                class="carousel slide container mt-4"
                data-ride="carousel"
            >
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img
                            src="/cover1.png"
                            class="d-block w-100"
                            alt="..."
                        />
                    </div>
                    <div class="carousel-item ">
                        <img
                            src="/cover2.png"
                            class="d-block w-100"
                            alt="..."
                        />
                    </div>
                </div>
                <a
                    class="carousel-control-prev"
                    href="#carouselExampleControls"
                    role="button"
                    data-slide="prev"
                >
                    <span
                        class="carousel-control-prev-icon"
                        aria-hidden="true"
                    ></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a
                    class="carousel-control-next"
                    href="#carouselExampleControls"
                    role="button"
                    data-slide="next"
                >
                    <span
                        class="carousel-control-next-icon"
                        aria-hidden="true"
                    ></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
            @endif
            <!-- bradcam_area_end  -->

            <main class="pt-4" style="min-height:750px;">
                @yield('content')
            </main>

            <footer>
                
              <section id="footer">
              <div class="container">
              <div class="row text-center text-xs-center text-sm-left text-md-left">
              <div class="col-xs-12 col-sm-4 col-md-4">
              
              <ul class="list-unstyled quick-links">
                        <h5>Bed</h5>
                        <h5>Patient</h5>
                        <h5>Management</h5>
                        <h5>System</h5>
              </ul>
              </div>
              <div class="col-xs-12 col-sm-4 col-md-4">
                    <h5>เมนูทางลัด</h5>
                    <ul class="list-unstyled quick-links">
                        <li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i>หน้าแรก</a></li>
                        <li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i>รายการผู้ป่วย</a></li>
                        <li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i>ปฏิทิน</a></li>
                        <li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i>บุคลากร</a></li>
                        <li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i>ติดต่อ</a></li>
                    </ul>
              </div>
              <div class="col-xs-12 col-sm-4 col-md-4">
              <h5>Address</h5>
              <ul class="list-unstyled quick-links">
              <li><a href="javascript:void();"><i class="fa fa-location-arrow"></i> 2424 Popular 4 Rd, Ban Mai, Pak Kret District, Nonthaburi 11120</a></li>
              <li><a href="javascript:void();"><i class="fa fa-phone"></i> 012-345-6789</a></li>
                    </ul>
                    <ul class="list-unstyled list-inline social text-center">
              <li class="list-inline-item"><a href="javascript:void();"><i class="fa fa-facebook"></i></a></li>
              <li class="list-inline-item"><a href="javascript:void();"><i class="fa fa-twitter"></i></a></li>
              <li class="list-inline-item"><a href="javascript:void();"><i class="fa fa-instagram"></i></a></li>
              <li class="list-inline-item"><a href="javascript:void();"><i class="fa fa-google-plus"></i></a></li>
              <li class="list-inline-item"><a href="javascript:void();" target="_blank"><i class="fa fa-envelope"></i></a></li>
              </ul>
              </div>
              </div>
              
              <div class="row">
              <div class="col-xs-12 col-sm-12 col-md-12 mt-2 mt-sm-2 text-center text-white">
              <p class="h6">Bed Patient Management System | &copy All right Reversed.</p>
              </div>
              
              </div>	
              </div>
              </section>
              
              </footer>
              

        </div>

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}"></script>
        @yield('script')
    </body>
</html>
