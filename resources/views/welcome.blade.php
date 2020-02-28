<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />

        <title>Bed Patient Management System</title>

        <!-- Fonts -->
        <link
            href="https://fonts.googleapis.com/css?family=Nunito:200,600"
            rel="stylesheet"
        />
        <link href="{{ asset('css/app.css') }}" rel="stylesheet" />
        <link
            rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
        />
        <!-- Styles -->
        <style>
            @import url('https://fonts.googleapis.com/css?family=Bai+Jamjuree:400,500,600,700&display=swap&subset=thai');
            html,
            body {
                background-color:#175A87 ;
                color: #FDFEFE;
                font-family: 'Bai Jamjuree' !important;
                font-weight: 500;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 40px;
            }

            .links > a {
                color: #FDFEFE;
                padding: 0 25px;
                font-size: 15px;
                font-weight: 600;
                letter-spacing: 0.1rem;
                text-decoration: none;
                text-transform: uppercase;
                
            }

            .m-b-md {
                margin-bottom: 20px;
            }
            
            .links > a{
                border: 1px solid #fff;
                padding: 10px;
            }
            .links > a:hover{
                border: 1px solid #175A87;
                padding: 10px;
                background-color: #175A87;
                transition: 400ms;
                color: #FDFEFE;
            }
        </style>
    </head>
    <body style="background-image:url('/images/P1.jpg');background-size:cover;backgroud-color:#175A87;">
        
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
            <div class="top-right links">
                @auth
                <a href="{{ url('/home') }}">Home</a>
                @else
                <a class="logstyle" href="{{ route('login') }}"><i class="fa fa-user"></i> เข้าสู่ระบบ</a>

                @if (Route::has('register'))
                <a class="logstyle" href="{{ route('register') }}"><i class="fa fa-user-plus"></i> สมัครสมาชิก</a>
                @endif @endauth
            </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    Bed Patient Management System
                </div>

                <div class="links">
                    <form
                        method="GET"
                        action="{{ url('/patients') }}"
                        accept-charset="UTF-8"
                        class="form-inline my-2 my-lg-0 float-right"
                        role="search"
                    >
                        <div class="input-group">
                            <input
                                type="text"
                                class="form-control"
                                name="uid"
                                placeholder="กรุณากรอกรหัสผู้ป่วย"
                                value="{{ request('search') }}"
                            />
                            <span class="input-group-append">
                                <button class="btn btn-secondary" type="submit">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>
