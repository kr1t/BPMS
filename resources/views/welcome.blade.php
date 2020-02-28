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
            .timeoc{
                float: left;
                margin-top: 15px;
                color: #fff;
            }
            .fourmenu{
                border: 1px solid #fff;
            }
            .bg-blue{
                background-color: #175A87;
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
                    <div class="timeoc">เวลาเปิด-ปิด : 8:00น. - 22:00น. </div> 
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
                                <button class="btn btn-primary" type="submit">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div class="container bg-blue">
            <div class="text-center mt-4 mb-3">
                <h2 class="mt-5 mb-5">บทความ</h2>
                <p>ตื้บสกายซาร์อึมครึม โฮม เบอร์เกอร์อ่อนด้อยภควัมปติ ซาตาน สะเด่าเทรด สตรอเบอรีราเม็งสตรอเบอรีช็อต สังโฆตี๋ชิฟฟอนฮิปโปคำสาป แจ็กพอตโค้กพาวเวอร์อะเฟิร์ม รีดไถหมั่นโถว ไฮเวย์อุปนายิกาคาร์พุดดิ้ง สะเด่าเซอร์ไพรส์เยน เปปเปอร์มินต์โฮสเตสสป็อตช็อค นายพราน ศิลปากร พ่อค้าโทรโข่ง ออร์แกนิกออร์แกนิก โต๋เต๋ฟลุกรูบิก โค้กคณาญาติอพาร์ทเมนท์เช็งเม้งก่อนหน้า ตอกย้ำง่าวเฮียแพทเทิร์นพุทธภูมิ ภารตะ ไดเอ็ตโจ๋ สเตอริโอบ๊วยคีตปฏิภาณออยล์แดนซ์ ไฮไลต์ริกเตอร์ยาวีแซลมอน แฟลชพาสตาสันทนาการฮากกาดีพาร์ตเมนท์ แอ๊บแบ๊ว บูติคหมวยเพนกวินแรงดูด เมจิกว้อยโปรดักชั่นอิ่มแปร้ แพนด้าเปโซชาร์ปน็อก สตีล แซ็กโซโฟน เย้วโลโก้เบนโตะ เมี่ยงคำ ซาดิสม์ สงบสุข ปาร์ตี้เช็ก</p>
            </div>
            <div class="card my-4">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="card w-100" >
                                <img src="/images/atc1.jpg" class="card-img-top" alt="..." height="200" style="object-fit:cover;">
                                <div class="card-body">
                                  <h5 class="card-title text-primary">อัพเดทข่าว COVID-19</h5>
                                  <p class="card-text text-secondary">บาบูนยะเยือกแรงดูดโบตั๋น สตริงควีนดัมพ์ แฟรีเทปสึนามิ ฟีเวอร์เซรามิกโบว์ไฮเทค เยอร์บีรารีไซเคิลแดรี่คอรัปชัน ออร์แกนบาร์บีคิวภารตะเลดี้บ็อกซ์...</p>
                                  <a href="#" class="btn btn-primary">อ่านเพิ่มเติม</a>
                                </div>
                              </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card w-100" >
                                <img src="/images/atc2.jpg" class="card-img-top" alt="..." height="200" style="object-fit:cover;">
                                <div class="card-body">
                                  <h5 class="card-title text-primary">ทำไมเราถึงไม่ควรรับประทานยาพร้อมนม</h5>
                                  <p class="card-text text-secondary">บาบูนยะเยือกแรงดูดโบตั๋น สตริงควีนดัมพ์ แฟรีเทปสึนามิ ฟีเวอร์เซรามิกโบว์ไฮเทค เยอร์บีรารีไซเคิลแดรี่คอรัปชัน ออร์แกนบาร์บีคิวภารตะเลดี้บ็อกซ์...</p>
                                  <a href="#" class="btn btn-primary">อ่านเพิ่มเติม</a>
                                </div>
                              </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card w-100" >
                                <img src="/images/atc3.jpg" class="card-img-top" alt="..." height="200" style="object-fit:cover;">
                                <div class="card-body">
                                  <h5 class="card-title text-primary">คางทูม หัด และหัดเยอรมัน (MMR) ป้องกันได้ ตั้งแต่เกิด!</h5>
                                  <p class="card-text text-secondary">บาบูนยะเยือกแรงดูดโบตั๋น สตริงควีนดัมพ์ แฟรีเทปสึนามิ ฟีเวอร์เซรามิกโบว์ไฮเทค เยอร์บีรารีไซเคิลแดรี่คอรัปชัน ออร์แกนบาร์บีคิวภารตะเลดี้บ็อกซ์...</p>
                                  <a href="#" class="btn btn-primary">อ่านเพิ่มเติม</a>
                                </div>
                              </div>
                        </div>
                        <div class="col-md-4 mt-4">
                            <div class="card w-100" >
                                <img src="/images/atc4.jpg" class="card-img-top" alt="..." height="200" style="object-fit:cover;">
                                <div class="card-body">
                                  <h5 class="card-title text-primary">คางทูม หัด และหัดเยอรมัน (MMR) ป้องกันได้ ตั้งแต่เกิด!</h5>
                                  <p class="card-text text-secondary">บาบูนยะเยือกแรงดูดโบตั๋น สตริงควีนดัมพ์ แฟรีเทปสึนามิ ฟีเวอร์เซรามิกโบว์ไฮเทค เยอร์บีรารีไซเคิลแดรี่คอรัปชัน ออร์แกนบาร์บีคิวภารตะเลดี้บ็อกซ์...</p>
                                  <a href="#" class="btn btn-primary">อ่านเพิ่มเติม</a>
                                </div>
                              </div>
                        </div>
                        <div class="col-md-4 mt-4">
                            <div class="card w-100" >
                                <img src="/images/atc5.jpg" class="card-img-top" alt="..." height="200" style="object-fit:cover;">
                                <div class="card-body">
                                  <h5 class="card-title text-primary">5 จุดคัดกรองครอบคลุมทางเข้าโรงพยาบาล</h5>
                                  <p class="card-text text-secondary">บาบูนยะเยือกแรงดูดโบตั๋น สตริงควีนดัมพ์ แฟรีเทปสึนามิ ฟีเวอร์เซรามิกโบว์ไฮเทค เยอร์บีรารีไซเคิลแดรี่คอรัปชัน ออร์แกนบาร์บีคิวภารตะเลดี้บ็อกซ์...</p>
                                  <a href="#" class="btn btn-primary">อ่านเพิ่มเติม</a>
                                </div>
                              </div>
                        </div>
                        <div class="col-md-4 mt-4">
                            <div class="card w-100" >
                                <img src="/images/atc6.jpg" class="card-img-top" alt="..." height="200" style="object-fit:cover;">
                                <div class="card-body">
                                  <h5 class="card-title text-primary">วันมะเร็งโลก: ก้าวสู่ฝัน... วันไร้มะเร็งร้าย</h5>
                                  <p class="card-text text-secondary">บาบูนยะเยือกแรงดูดโบตั๋น สตริงควีนดัมพ์ แฟรีเทปสึนามิ ฟีเวอร์เซรามิกโบว์ไฮเทค เยอร์บีรารีไซเคิลแดรี่คอรัปชัน ออร์แกนบาร์บีคิวภารตะเลดี้บ็อกซ์...</p>
                                  <a href="#" class="btn btn-primary">อ่านเพิ่มเติม</a>
                                </div>
                              </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container mb-5 mt-5">
        <div class="row">
            <div class="col col-md-3 ">
                <div class="text-center fourmenu">
                    <i class="fa fa-ambulance fa-3x p-3" aria-hidden="true"></i>
                    <p>1378 <br>
                        ฉุกเฉิน นัดหมายแพทย์ เรียกรถพยาบาล <br>
                        พร้อมบริการทุกวัน 24 ชม.</p>
                </div>
              

            </div>
            <div class="col col-md-3">
                <div class="text-center fourmenu">
                    <i class="fa fa-phone fa-3x p-3" aria-hidden="true"></i>
                    <p>โทรหาเรา <br>
                        +66 2066 8888 <br>
                        พร้อมบริการทุกวัน 24 ชม.</p>
                </div>
              

            </div>
            <div class="col col-md-3">
                <div class="text-center fourmenu">
                    <i class="fa fa-envelope fa-3x p-3" aria-hidden="true"></i>
                    <p>สมัครรับข่าวสาร</p>
                    <button class="btn btn-outline-light mb-2">สมัคร</button>
                </div>
              

            </div>
            <div class="col col-md-3">
                <div class="text-center fourmenu">
                    <i class="fa fa-location-arrow fa-3x p-3" aria-hidden="true"></i>
                    <p>แผนที่โรงพยาบาล</p>
                    <button class="btn btn-outline-light mb-2">วิธีการเดินทาง</button>
                </div>
              

            </div>
           
        </div>

    </div>
    @include('layouts.footer')
    </body>
</html>
