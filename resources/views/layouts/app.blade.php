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
            @import url("https://fonts.googleapis.com/css?family=Chakra+Petch&display=swap");
            html,
            body {
                font-family: "Chakra Petch" !important;
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
        </style>
    </head>
    <body>
        <div id="app">
           
            <nav class="navbar navbar-expand-md navbar-light navbar-laravel">
                <div class="container">
                    <a
                        class="navbar-brand"
                        href="{{ Auth::check() ? url('/home') : url('/')}}"
                    >
                        {{ config("app.name", "Laravel") }}
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
                        <!-- Left Side Of Navbar -->
                        <ul class="navbar-nav mr-auto"></ul>

                        <!-- Right Side Of Navbar -->
                        <ul class="navbar-nav ml-auto">
                            <!-- Authentication Links -->
                            @if(!Auth::check())
                            <li>
                                <a class="nav-link" href="{{ url('/login') }}"
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
                                <!--
                                <li class="nav-item dropdown">
                                    <a
                                        class="nav-link dropdown-toggle"
                                        href="#"
                                        id="navbarDropdown"
                                        role="button"
                                        data-toggle="dropdown"
                                        aria-haspopup="true"
                                        aria-expanded="false"
                                    >
                                        Pages
                                    </a>
                                    <div
                                        class="dropdown-menu"
                                        aria-labelledby="navbarDropdown"
                                    >
                                        <a class="dropdown-item" href="#"
                                            >Elements</a
                                        >
                                        <a class="dropdown-item" href="#"
                                            >About</a
                                        >
                                        <div class="dropdown-divider"></div>
                                                                        <a class="dropdown-item" href="#"
                                                                            >Something else here</a
                                                                        >
                                    </div>
                                </li>-->
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
                                    <!-- <a href="">asdas</a>
                                    <a href="">asdas</a>
                                    <a href="">asdas</a> -->

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
            <div
                id="carouselExampleControls"
                class="carousel slide container"
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
            <!-- bradcam_area_end  -->

            <main class="py-4">
                @yield('content')
            </main>
        </div>

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}"></script>
        @yield('script')
    </body>
</html>
