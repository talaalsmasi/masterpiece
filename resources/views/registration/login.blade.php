<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha384-k6RqeWeci5ZR/Lv4MR0sA0FfDOM0sP3tnE7GkKk0h4/4e2ZlEwtJtTjAl1bl1BKe" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

        <title>Login Page</title>
        <!-- Bootstrap core CSS -->
        <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">
        <!-- Slick Slider CSS -->
        <link href="{{ asset('css/slick-theme.css') }}" rel="stylesheet"/>
        <!-- Datepicker CSS -->
        <link href="{{ asset('css/dcalendar.picker.css') }}" rel="stylesheet"/>
        <!-- Animate CSS -->
        <link href="{{ asset('css/animate.css') }}" rel="stylesheet"/>
        <!-- Animation CSS -->
        <link href="{{ asset('css/animation.css') }}" rel="stylesheet"/>
        <!-- Demo CSS -->
        <link href="{{ asset('css/demo.css') }}" rel="stylesheet"/>
        <!-- ICONS CSS -->
        <link href="{{ asset('css/font-awesome.css') }}" rel="stylesheet">
        <!-- jQuery bxSlider CSS -->
        <link href="{{ asset('css/jquery.bxslider.css') }}" rel="stylesheet">
        <!-- Pretty Photo CSS -->
        <link href="{{ asset('css/prettyPhoto.css') }}" rel="stylesheet">
        <!-- Custom Main StyleSheet CSS -->
        <link href="{{ asset('css/component.css') }}" rel="stylesheet">
        <!-- Typography CSS -->
        <link href="{{ asset('css/typography.css') }}" rel="stylesheet">
        <!-- Style Icon CSS -->
        <link href="{{ asset('css/style-icon.css') }}" rel="stylesheet"/>
        <!-- Custom Main StyleSheet CSS -->
        <link href="{{ asset('css/style.css') }}" rel="stylesheet">
        <!-- Color CSS -->
        <link href="{{ asset('css/color.css') }}" rel="stylesheet">
        <!-- Responsive CSS -->
        <link href="{{ asset('css/responsive.css') }}" rel="stylesheet">
        <!-- login CSS -->
        <link href="{{ asset('css/login.css') }}" rel="stylesheet">



    </head>
    <body class="">
        <!-- main header  start -->
         <div class="main_header">
          <div class="custom-container-fluid">
            <!-- main top bar start -->
            <div class="main_top_bar">
                  <h1><figure><img src="images/top-logo.png"></figure></h1>
                  <ul class="navigation">
                      <li><a href="#">Home <i class="fa fa-caret-down"></i></a>
                        <ul class="sub-menu">
                          <li><a href="index.html">main home</a></li>
                          <li><a href="index-02.html">Home 02</a></li>
                        </ul>
                      </li>
                      <li><a href="#">Pages<i class="fa fa-caret-down"></i></a>
                        <ul class="sub-menu">
                           <li><a href="about-us.html">about us</a></li>
                           <li><a href="team-page.html">team page</a></li>
                           <li><a href="team-detail.html">team detail</a></li>
                           <li><a href="gallery.html">gallery page</a></li>
                           <li><a href="gallery01.html">gallery02</a></li>
                           <li><a href="404-page.html">404 page</a></li>
                        </ul>
                      </li>
                      <li><a href="#">Services<i class="fa fa-caret-down"></i></a>
                        <ul class="sub-menu">
                           <li><a href="service-grid.html">service grid</a></li>
                           <li><a href="service-grid02.html">service 02</a></li>
                           <li><a href="service-grid03.html">service 03</a></li>
                           <li><a href="service-detail.html">service detail</a></li>
                        </ul>
                      </li>
                      <li><a href="#">Blog <i class="fa fa-caret-down"></i></a>
                         <ul class="sub-menu">
                           <li><a href="blog-post.html">blog page</a></li>
                           <li><a href="blog-post-full.html">blog post </a></li>
                           <li><a href="blog-post-sidebar.html">blog sidebar</a></li>
                           <li><a href="blog-detail.html">blog detail</a></li>
                        </ul>
                      </li>
                      <li><a href="#"> Shop<i class="fa fa-caret-down"></i></a>
                         <ul class="sub-menu">
                           <li><a href="shop-page.html">shop page</a></li>
                           <li><a href="shop-detail.html">Shop detail</a></li>
                         </ul>
                        </li>
                      <li><a href="contact-us.html"> Contact Us</a></li>
                  </ul>
                  <!--DL Menu Start-->
                  <div id="kode-responsive-navigation" class="dl-menuwrapper">
                    <button class="dl-trigger">Open Menu</button>
                    <ul class="dl-menu">
                      <li><a class="active" href="#">Home</a>
                        <ul class="dl-submenu">
                            <li><a href="index.html">main home</a></li>
                            <li><a href="index-02.html">Home 02</a></li>
                        </ul>
                      </li>
                      <li class="menu-item kode-parent-menu"><a href="#">Pages</a>
                          <ul class="dl-submenu">
                             <li><a href="about-us.html">about us</a></li>
                             <li><a href="team-page.html">team page</a></li>
                             <li><a href="team-detail.html">team detail</a></li>
                             <li><a href="gallery.html">gallery page</a></li>
                             <li><a href="gallery01.html">gallery02</a></li>
                             <li><a href="404-page.html">404 page</a></li>
                             <li><a href="appointment.html">appointment</a></li>
                          </ul>
                      </li>
                      <li class="menu-item kode-parent-menu"><a href="#">Services</a>
                        <ul class="dl-submenu">
                            <li><a href="service-grid.html">service grid</a></li>
                           <li><a href="service-grid02.html">service 02</a></li>
                           <li><a href="service-grid03.html">service 03</a></li>
                           <li><a href="service-detail.html">service detail</a></li>
                        </ul>
                      </li>
                      <li class="menu-item kode-parent-menu"><a href="#">blog</a>
                        <ul class="dl-submenu">
                            <li><a href="blog-post.html">blog page</a></li>
                           <li><a href="blog-post-full.html">blog post </a></li>
                           <li><a href="blog-post-sidebar.html">blog sidebar</a></li>
                           <li><a href="blog-detail.html">blog detail</a></li>
                        </ul>
                      </li>
                      <li class="menu-item kode-parent-menu"><a href="#">Shop</a>
                        <ul class="dl-submenu">
                            <li><a href="shop-page.html">shop page</a></li>
                           <li><a href="shop-detail.html">Shop detail</a></li>
                        </ul>
                      </li>
                      <li><a href="contact-us.html">contact Us</a></li>
                    </ul>
                  </div>
                  <!--DL Menu END-->
                  <a class="main_button hover-affect" href="appointment.html">Book Appointment</a>
              </div>
              <!-- main top bar end-->
          </div>
        </div>
          <!-- main header end-->

        <!-- main header  start -->
         <div class="main_header fixed">
          <div class="custom-container-fluid">
            <!-- main top bar start -->
            <div class="main_top_bar">
                  <h1><figure><img src="images/top-logo01.png"></figure></h1>
                   <ul class="navigation">
                      <li><a href="#">Home</a>
                        <ul class="sub-menu">
                          <li><a href="index.html">main home</a></li>
                          <li><a href="index-02.html">Home 02</a></li>
                        </ul>
                      </li>
                      <li><a href="#">Pages<i class="fa fa-caret-down"></i></a>
                        <ul class="sub-menu">
                           <li><a href="about-us.html">about us</a></li>
                           <li><a href="team-page.html">team page</a></li>
                           <li><a href="team-detail.html">team detail</a></li>
                           <li><a href="gallery.html">gallery page</a></li>
                           <li><a href="gallery01.html">gallery02</a></li>
                           <li><a href="404-page.html">404 page</a></li>
                           <li><a href="appointment.html">appointment</a></li>
                        </ul>
                      </li>
                      <li><a href="#">Services<i class="fa fa-caret-down"></i></a>
                        <ul class="sub-menu">
                           <li><a href="service-grid.html">service grid</a></li>
                           <li><a href="service-grid02.html">service 02</a></li>
                           <li><a href="service-grid03.html">service 03</a></li>
                           <li><a href="service-detail.html">service detail</a></li>
                        </ul>
                      </li>
                      <li><a href="#">Blog</a>
                         <ul class="sub-menu">
                           <li><a href="blog-post.html">blog page</a></li>
                           <li><a href="blog-post-full.html">blog post </a></li>
                           <li><a href="blog-post-sidebar.html">blog sidebar</a></li>
                           <li><a href="blog-detail.html">blog detail</a></li>
                        </ul>
                      </li>
                      <li><a href="#"> Shop<i class="fa fa-caret-down"></i></a>
                         <ul class="sub-menu">
                           <li><a href="shop-page.html">shop page</a></li>
                           <li><a href="shop-detail.html">Shop detail</a></li>
                         </ul>
                        </li>
                      <li><a href="contact-us.html"> Contact Us</a></li>
                  </ul>
                  <!--DL Menu Start-->
                  <div id="responsive-navigation" class="dl-menuwrapper">
                    <button class="dl-trigger">Open Menu</button>
                    <ul class="dl-menu">
                      <li><a class="active" href="#">Home</a>
                        <ul class="dl-submenu">
                            <li><a href="index.html">main home</a></li>
                            <li><a href="index-02.html">Home 02</a></li>
                        </ul>
                      </li>
                      <li class="menu-item kode-parent-menu"><a href="#">Pages</a>
                          <ul class="dl-submenu">
                             <li><a href="about-us.html">about us</a></li>
                             <li><a href="team-page.html">team page</a></li>
                             <li><a href="team-detail.html">team detail</a></li>
                             <li><a href="gallery.html">gallery page</a></li>
                             <li><a href="gallery01.html">gallery02</a></li>
                             <li><a href="404-page.html">404 page</a></li>
                              <li><a href="appointment.html">appointment</a></li>
                          </ul>
                      </li>
                      <li class="menu-item kode-parent-menu"><a href="#">Services</a>
                        <ul class="dl-submenu">
                            <li><a href="service-grid.html">service grid</a></li>
                           <li><a href="service-grid02.html">service 02</a></li>
                           <li><a href="service-grid03.html">service 03</a></li>
                           <li><a href="service-detail.html">service detail</a></li>
                        </ul>
                      </li>
                      <li class="menu-item kode-parent-menu"><a href="#">blog</a>
                        <ul class="dl-submenu">
                            <li><a href="blog-post.html">blog page</a></li>
                           <li><a href="blog-post-full.html">blog post </a></li>
                           <li><a href="blog-post-sidebar.html">blog sidebar</a></li>
                           <li><a href="blog-detail.html">blog detail</a></li>
                        </ul>
                      </li>
                      <li class="menu-item kode-parent-menu"><a href="#">Shop</a>
                        <ul class="dl-submenu">
                            <li><a href="shop-page.html">shop page</a></li>
                           <li><a href="shop-detail.html">Shop detail</a></li>
                        </ul>
                      </li>
                      <li><a href="contact-us.html">contact Us</a></li>
                    </ul>
                  </div>
                  <!--DL Menu END-->
                  <a class="main_button hover-affect" href="appointment.html">Book Appointment</a>
              </div>
              <!-- main top bar end-->
          </div>
        </div>
          <!-- main header end-->

            <!--sab banner wraper start-->
              <div class="sab-banner-wraper">
                <div class="container">
                  <div class="sab-banner-text">
                     <h2>Login</h2>
                      <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Login</li>
                      </ul>
                  </div>
                </div>
               <div class="custom-shape-divider-bottom-1687358784">
                  <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
                      <path d="M0,0V46.29c47.79,22.2,103.59,32.17,158,28,70.36-5.37,136.33-33.31,206.8-37.5C438.64,32.43,512.34,53.67,583,72.05c69.27,18,138.3,24.88,209.4,13.08,36.15-6,69.85-17.84,104.45-29.34C989.49,25,1113-14.29,1200,52.47V0Z" opacity=".25" class="shape-fill"></path>
                      <path d="M0,0V15.81C13,36.92,27.64,56.86,47.69,72.05,99.41,111.27,165,111,224.58,91.58c31.15-10.15,60.09-26.07,89.67-39.8,40.92-19,84.73-46,130.83-49.67,36.26-2.85,70.9,9.42,98.6,31.56,31.77,25.39,62.32,62,103.63,73,40.44,10.79,81.35-6.69,119.13-24.28s75.16-39,116.92-43.05c59.73-5.85,113.28,22.88,168.9,38.84,30.2,8.66,59,6.17,87.09-7.5,22.43-10.89,48-26.93,60.65-49.24V0Z" opacity=".5" class="shape-fill"></path>
                      <path d="M0,0V5.63C149.93,59,314.09,71.32,475.83,42.57c43-7.64,84.23-20.12,127.61-26.46,59-8.63,112.48,12.24,165.56,35.4C827.93,77.22,886,95.24,951.2,90c86.53-7,172.46-45.71,248.8-84.81V0Z" class="shape-fill"></path>
                  </svg>
              </div>
            </div>
            <!--sab banner wraper end-->

            <!--pet 404 warp start -->
            <section class="pet_appointment_wrap"><br><br><br>
                <a href="https://front.codes/" class="logo" target="_blank"></a>

                <!-- عرض رسالة النجاح -->
                @if (session('success'))
                    <div style="color: green;">
                        {{ session('success') }}
                    </div>
                @endif

                <div class="section">
                    <div class="container">
                        <div class="row full-height justify-content-center">
                            <div class="col-12 text-center align-self-center py-5">
                                <div class="section pb-5 pt-5 pt-sm-2 text-center">
                                    <h6 class="mb-0 pb-3"><span>Log In </span><span>Sign Up</span></h6>
                                    <input class="checkbox" type="checkbox" id="reg-log" name="reg-log"/>
                                    <label for="reg-log"></label>
                                    <div class="card-3d-wrap mx-auto">
                                        <div class="card-3d-wrapper">

                                            <!-- نموذج تسجيل الدخول -->
                                            <div class="card-front">
                                                <div class="center-wrap">
                                                    <div class="section text-center">
                                                        <form method="POST" action="{{ route('login') }}">
                                                            @csrf
                                                            <h4 class="appointment-main-title">Log In</h4><br>

                                                            <div class="form-group mt-2">
                                                                <input type="email" name="email" class="form-style" placeholder="Your Email" id="logemail" autocomplete="off" value="{{ old('email') }}">
                                                                <i class="input-icon fas fa-envelope"></i>
                                                            </div>
                                                            <!-- عرض خطأ خاص بحقل الايميل -->
                                                            @if ($errors->has('email'))
                                                                <div style="color: red;">
                                                                    {{ $errors->first('email') }}
                                                                </div>
                                                            @endif
                                                            <br>

                                                            <div class="form-group mt-2">
                                                                <input type="password" name="password" class="form-style" placeholder="Your Password" id="logpass" autocomplete="off">
                                                                <i class="input-icon fas fa-lock"></i>
                                                            </div>
                                                            <!-- عرض خطأ خاص بحقل الباسوورد -->
                                                            @if ($errors->has('password'))
                                                                <div style="color: red;">
                                                                    {{ $errors->first('password') }}
                                                                </div>
                                                            @endif
                                                            <br><br>

                                                            <button type="submit" class="btn mt-4">Login</button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- نموذج إنشاء الحساب -->
                                            <div class="card-back">
                                                <div class="center-wrap">
                                                    <div class="section text-center">
                                                        <form method="POST" action="{{ route('signup') }}">
                                                            @csrf
                                                            <h4 class="appointment-main-title">Sign Up</h4>

                                                            <div class="form-group mt-2">
                                                                <input type="text" name="name" class="form-style" placeholder="Your Full Name" id="logname" autocomplete="off" value="{{ old('name') }}">
                                                                <i class="input-icon fas fa-user"></i>
                                                            </div>
                                                            <!-- عرض خطأ خاص بحقل الاسم -->
                                                            @if ($errors->has('name'))
                                                                <div style="color: red;">
                                                                    {{ $errors->first('name') }}
                                                                </div>
                                                            @endif
                                                            <br>

                                                            <div class="form-group mt-2">
                                                                <input type="email" name="email" class="form-style" placeholder="Your Email" id="logemail" autocomplete="off" value="{{ old('email') }}">
                                                                <i class="input-icon fas fa-envelope"></i>
                                                            </div>
                                                            <!-- عرض خطأ خاص بحقل الايميل -->
                                                            @if ($errors->has('email'))
                                                                <div style="color: red;">
                                                                    {{ $errors->first('email') }}
                                                                </div>
                                                            @endif
                                                            <br>

                                                            <div class="form-group mt-2">
                                                                <input type="text" name="phone" class="form-style" placeholder="Your phone number" id="lognum" autocomplete="off" value="{{ old('phone') }}">
                                                                <i class="input-icon fas fa-phone"></i>
                                                            </div>
                                                            <!-- عرض خطأ خاص بحقل الهاتف -->
                                                            @if ($errors->has('phone'))
                                                                <div style="color: red;">
                                                                    {{ $errors->first('phone') }}
                                                                </div>
                                                            @endif
                                                            <br>

                                                            <div class="form-group mt-2">
                                                                <input type="password" name="password" class="form-style" placeholder="Your Password" id="logpass" autocomplete="off">
                                                                <i class="input-icon fas fa-lock"></i>
                                                            </div>
                                                            <!-- عرض خطأ خاص بحقل الباسوورد -->
                                                            @if ($errors->has('password'))
                                                                <div style="color: red;">
                                                                    {{ $errors->first('password') }}
                                                                </div>
                                                            @endif
                                                            <br>

                                                            <button type="submit" class="btn mt-4">Submit</button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- pet team warp end -->

            <!--pet company wrap start-->
            <section class="pet_company_wrap">
              <div class="container">
                <div class="pet_company_row">
                  <div class="pet-ccompany-slider">
                    <div>
                      <div class="pet_company_column">
                          <figure >
                            <img src="images/client-fig01.png" alt="">
                          </figure>
                      </div>
                    </div>
                    <div>
                      <div class="pet_company_column">
                          <figure>
                            <img src="images/client-fig02.png" alt="">
                          </figure>
                      </div>
                  </div>
                  <div>
                    <div class="pet_company_column">
                        <figure>
                          <img src="images/client-fig03.png" alt="">
                        </figure>
                    </div>
                  </div>
                  <div>
                    <div class="pet_company_column">
                        <figure>
                          <img src="images/client-fig04.png" alt="">
                        </figure>
                    </div>
                  </div>
                  <div>
                    <div class="pet_company_column">
                        <figure>
                          <img src="images/client-fig05.png" alt="">
                        </figure>
                    </div>
                  </div>
                  <div>
                    <div class="pet_company_column">
                        <figure>
                          <img src="images/client-fig01.png" alt="">
                        </figure>
                    </div>
                  </div>
                  <div>
                    <div class="pet_company_column">
                        <figure>
                          <img src="images/client-fig01.png" alt="">
                        </figure>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="custom-shape-divider-top-1687358087">
            <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
                <path d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V0H0V27.35A600.21,600.21,0,0,0,321.39,56.44Z" class="shape-fill"></path>
            </svg>
        </div>
          </section>
          <!--pet compnay wrap end-->

          <!--pet widget start-->
          <div class="pet_widget">
                <div class="container">
                  <div class="pet_widget_row">
                    <div class="pet_widget_column">
                      <figure><img src="images/top-logo.png"></figure>
                      <p>ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis </p>
                      <ul class="widget_social_share">
                        <li><a class="hover-affect" href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a class="hover-affect" href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a class="hover-affect" href="#"><i class="fa fa-camera"></i></a></li>
                        <li><a class="hover-affect" href="#"><i class="fa fa-youtube"></i></a></li>
                      </ul>
                    </div>
                    <div class="pet_widget_column widget_service">
                      <h6 class="widget_title">SERVICES</h6>
                      <ul class="pet_widget_link">
                        <li><a href="#">Grooming</a></li>
                        <li><a href="#">Blueberry Facial</a></li>
                        <li><a href="#">Blueberry Facial</a></li>
                        <li><a href="#">Pet SPA</a></li>
                        <li><a href="#">Pet SPA</a></li>
                        <li><a href="#">Grooming</a></li>
                      </ul>
                    </div>

                    <div class="pet_widget_column widget_post">
                      <h6 class="widget_title">Recent Post</h6>
                      <ul class="pet_widget_post_row">
                        <li>
                          <div class="pet_widget_post">
                            <figure class="image-layer-affect">
                              <img src="extra-images/post-fig.jpg"></img>
                            </figure>
                            <div class="widget_post_text">
                              <p>Contribute For Food hunger</p>
                              <a href="">11 Feb 2022</a>
                            </div>
                          </div>
                        </li>
                        <li>
                          <div class="pet_widget_post">
                            <figure class="image-layer-affect">
                              <img src="extra-images/post-fig1.jpg"></img>
                            </figure>
                            <div class="widget_post_text">
                              <p>Contribute For Food hunger</p>
                              <a href="">11 Feb 2022</a>
                            </div>
                          </div>
                        </li>
                        <li>
                          <div class="pet_widget_post">
                            <figure class="image-layer-affect">
                              <img src="extra-images/post-fig2.jpg"></img>
                            </figure>
                            <div class="widget_post_text">
                              <p>Contribute For Food hunger</p>
                              <a href="">11 Feb 2022</a>
                            </div>
                          </div>
                        </li>
                      </ul>
                    </div>
                    <div class="pet_widget_column widget_news">
                       <h6 class="widget_title">Newsletter</h6>
                       <div class="pet_widget_newslater">
                          <p>you will be notified wen somthing new  will be appear you will be notified wen somthing new  will be appear</p>
                          <input type="text" placeholder="Email Address">
                     </div>
                  </div>
                </div>
            </div>
            <div class="pet_copyright">
                <div class="container">
                  <div class="pet_copyright_text">
                      <p>@ 2019 All Rights Reserved and Registered</p>
                  </div>
                </div>
              </div>
          </div>
        </div>
        <!--pet widget end-->

        <!--Jquery Library-->
        <script src="js/jquery.js"></script>
         <!--Bootstrap core JavaScript-->
        <script src="js/bootstrap.js"></script>
        <!--Slick Slider JavaScript-->
        <script src="js/slick.min.js"></script>
        <!--Slick Slider JavaScript-->
        <script src="js/dcalendar.picker.js"></script>
        <!--Pretty Photo JavaScript-->
        <script src="js/demo5.js"></script>
        <!--Pretty Photo JavaScript-->
       <script src="js/modernizr.custom.js"></script>
       <!--Pretty Photo JavaScript-->
        <script src="js/jquery.dlmenu.js"></script>
        <!--js/jquery.bxslider.min.js start-->
        <script src="js/jquery.bxslider.min.js"></script>
       <!--Pretty Photo JavaScript-->
        <script src="js/downCount.js"></script>
        <!--Counter up JavaScript-->
        <script src="js/waypoints.js"></script>
        <!--Custom JavaScript-->
       <script src="js/custom.js"></script>
        <script type="text/javascript">
          $( document ).ready(function() {
            var $body = $(document.body);
            var _SCROLL_FIXED_CUTOFF = _SCROLL_FIXED_CUTOFF || ($(window).height() >= 825 ? 300 : 75),
              _HEADER_HEIGHT = _HEADER_HEIGHT || 825;

            $(window).scroll(function(e) {
              if ($('.main_header[data-no-scroll]').length)
              return;
              if (this.pageYOffset >= _SCROLL_FIXED_CUTOFF && !$body.hasClass('scrolled')) {
              $body.addClass('scrolled');
              } else if (this.pageYOffset < _SCROLL_FIXED_CUTOFF && $body.hasClass('scrolled')) {
              $body.removeClass('scrolled');
              }
              if (this.pageYOffset >= _HEADER_HEIGHT) {
              _header_carousel_active = false;
              } else {
              _header_carousel_active = true;
              }
            });
          });
      </script>

      <script type="text/javascript">
        $(".accordion_tab").click(function(){
          $(".accordion_tab").each(function(){
              $(this).parent().removeClass("active");
              $(this).removeClass("active");
          });
          $(this).parent().addClass("active");
          $(this).addClass("active");
        });
      </script>

    </body>
</html>
