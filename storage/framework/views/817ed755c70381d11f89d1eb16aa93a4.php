<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha384-k6RqeWeci5ZR/Lv4MR0sA0FfDOM0sP3tnE7GkKk0h4/4e2ZlEwtJtTjAl1bl1BKe" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
        <title>Home page Pet</title>
       <!-- Slick Slider CSS -->
<link href="<?php echo e(asset('css/slick-theme.css')); ?>" rel="stylesheet"/>
<!-- Slick Slider CSS -->
<link href="<?php echo e(asset('css/animate.css')); ?>" rel="stylesheet"/>
<!-- Pretty Photo CSS -->
<link href="<?php echo e(asset('css/prettyPhoto.css')); ?>" rel="stylesheet"/>
<!-- Animation CSS -->
<link href="<?php echo e(asset('css/animation.css')); ?>" rel="stylesheet"/>
<!-- Bootstrap CSS -->
<link href="<?php echo e(asset('css/bootstrap.css')); ?>" rel="stylesheet"/>
<!-- Demo CSS -->
<link href="<?php echo e(asset('css/icon-folder/demo-files/demo.css')); ?>" rel="stylesheet"/>
<!-- ICONS CSS -->
<link href="<?php echo e(asset('css/font-awesome.css')); ?>" rel="stylesheet"/>
<!-- bxSlider CSS -->
<link href="<?php echo e(asset('css/jquery.bxslider.css')); ?>" rel="stylesheet"/>
<!-- Custom Main StyleSheet CSS -->
<link href="<?php echo e(asset('css/component.css')); ?>" rel="stylesheet"/>
<!-- Typography CSS -->
<link href="<?php echo e(asset('css/typography.css')); ?>" rel="stylesheet"/>
<!-- Style Icon CSS -->
<link href="<?php echo e(asset('css/icon-folder/style-icon.css')); ?>" rel="stylesheet"/>
<!-- Custom Main StyleSheet CSS -->
<link href="<?php echo e(asset('css/style.css')); ?>" rel="stylesheet"/>
<!-- Color CSS -->
<link href="<?php echo e(asset('css/color.css')); ?>" rel="stylesheet"/>
<!-- Responsive CSS -->
<link href="<?php echo e(asset('css/responsive.css')); ?>" rel="stylesheet"/>
<!-- Pretty Photo CSS -->
<link href="<?php echo e(asset('css/prettyPhoto.css')); ?>" rel="stylesheet">
    </head>

    <body class="">


      <div class="main-wrapper">
       <!-- main header  start -->
    	   <div class="main_header">
    			<div class="custom-container-fluid">
            <!-- main top bar start -->
    				<div class="main_top_bar">
                  <h1><figure><img src="images/top-logo.png"></figure></h1>
                  <ul class="navigation">
                    <li><a href="#">Services<i class="fa fa-caret-down"></i></a>
                        <ul class="sub-menu">
                           <li><a href="<?php echo e(route('appointment.create')); ?>">Doctor visit</a></li>
                           <li><a href="<?php echo e(route('rooms.index')); ?>">Pets night</a></li>
                           <li><a href="<?php echo e(route('grooming.create')); ?>">Grooming</a></li>
                           <li><a href="<?php echo e(route('adoption.pets')); ?>">Adoption</a></li>
                           <li><a href="<?php echo e(route('rescueAnimals.index')); ?>">Donations</a></li>
                        </ul>
                      </li>
                      <li><a href="<?php echo e(route('posts.index')); ?>">Posts</i></a>
                    <li><a href="<?php echo e(route('events.show')); ?>">events</a></li>
                      </li>
                      <li><a href="#"> Shop<i class="fa fa-caret-down"></i></a>
                         <ul class="sub-menu">
                            <li><a href="<?php echo e(route('products.showProducts')); ?>">shop</a></li>
                            <li><a href="<?php echo e(route('cart.show')); ?>">Your Cart</a></li>
                            <li><a href="<?php echo e(route('wishlist.show')); ?>">Your wishlist</a></li>
                         </ul>
                        </li>
                      <li><a href="<?php echo e(route('contactUs.index')); ?>"> Contact Us</a></li>
                    </li>

                     <li><a href=""><i class="fa-solid fa-envelope"></i></a></li>
                     <li><a href=""><i class="fa-solid fa-bell" style="color: #ffffff;"></i></a></li>

                  </ul>
                  <!--DL Menu Start-->
                  <div id="kode-responsive-navigation" class="dl-menuwrapper">
                    <button class="dl-trigger">Open Menu</button>
                    <ul class="dl-menu">
                      <li><a class="active" href="#">Services</a>
                        <ul class="dl-submenu">
                            <li><a href="<?php echo e(route('appointment.create')); ?>">Doctor visit</a></li>
                            <li><a href="<?php echo e(route('rooms.index')); ?>">Pets night</a></li>
                            <li><a href="<?php echo e(route('grooming.create')); ?>">Grooming</a></li>
                            <li><a href="<?php echo e(route('adoption.pets')); ?>">Adoption</a></li>
                            <li><a href="<?php echo e(route('rescueAnimals.index')); ?>">Donations</a></li>
                        </ul>
                      </li>
                      <li class="menu-item kode-parent-menu"><a href="<?php echo e(route('posts.index')); ?>">Posts</a>
                      </li>
                      <li class="menu-item kode-parent-menu"><a href="<?php echo e(route('events.show')); ?>">events</a>
                      </li>

                      <li class="menu-item kode-parent-menu"><a href="#">shop</a>
                        <ul class="dl-submenu">
                            <li><a href="<?php echo e(route('products.showProducts')); ?>">shop</a></li>
                            <li><a href="<?php echo e(route('cart.show')); ?>">Your Cart</a></li>
                            <li><a href="<?php echo e(route('wishlist.show')); ?>">Your wishlist</a></li>
                        </ul>
                      </li>
                      <li class="menu-item kode-parent-menu"><a href="<?php echo e(route('contactUs.index')); ?>"> Contact Us</a></li>
                      <li class="menu-item kode-parent-menu"><a href=""><i class="fa-solid fa-envelope"></i></a></li>
                      <li class="menu-item kode-parent-menu"><a href=""><i class="fa-solid fa-bell" style="color: #ffffff;"></i></a></li>
                      <?php if(auth()->guard()->check()): ?>
                      <!-- إذا كان المستخدم مسجل الدخول -->
                      <li class="menu-item kode-parent-menu">
                          <a href="<?php echo e(route('profile')); ?>">Profile</a>
                      </li>
                      <li class="menu-item kode-parent-menu">
                          <a href="<?php echo e(route('logout')); ?>" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
                      </li>

                      <!-- نموذج تسجيل الخروج -->
                      <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                          <?php echo csrf_field(); ?>
                      </form>
                  <?php else: ?>
                      <!-- إذا لم يكن المستخدم مسجل الدخول -->
                      <li class="menu-item kode-parent-menu">
                          <a href="<?php echo e(route('signup')); ?>">Sign up</a>
                      </li>
                      <li class="menu-item kode-parent-menu">
                          <a href="<?php echo e(route('login')); ?>">Log in</a>
                      </li>
                  <?php endif; ?>
                    </ul>
                  </div>
                  <!--DL Menu END-->
                  
                  <div>
                    <?php if(auth()->guard()->check()): ?>
                        <!-- المستخدم مسجل الدخول -->
                        <a class="main_button hover-affect" href="<?php echo e(route('profile')); ?>">Profile</a>
                        <a class="main_button hover-affect" href="<?php echo e(route('logout')); ?>" style="margin-left: 2vh"
                           onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                           Logout
                        </a>

                        <!-- نموذج تسجيل الخروج -->
                        <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                            <?php echo csrf_field(); ?>
                        </form>
                    <?php else: ?>
                        <!-- المستخدم غير مسجل الدخول -->
                        <a class="main_button hover-affect" href="<?php echo e(route('signup')); ?>">Sign up</a>
                        <a class="main_button hover-affect" href="<?php echo e(route('login')); ?>" style="margin-left: 2vh">Log in</a>
                    <?php endif; ?>
                </div>

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
                      <li><a href="#">Services<i class="fa fa-caret-down"></i></a>
                        <ul class="sub-menu">
                            <li><a href="<?php echo e(route('appointment.create')); ?>">Doctor visit</a></li>
                            <li><a href="<?php echo e(route('rooms.index')); ?>">Pets night</a></li>
                            <li><a href="<?php echo e(route('grooming.create')); ?>">Grooming</a></li>
                            <li><a href="<?php echo e(route('adoption.pets')); ?>">Adoption</a></li>
                            <li><a href="<?php echo e(route('rescueAnimals.index')); ?>">Donations</a></li>
                        </ul>
                      </li>
                      <li><a href="<?php echo e(route('posts.index')); ?>">Posts</a> </li>
                      <li><a href="<?php echo e(route('events.show')); ?>">events</a> </li>
                      <li><a href="#">Shop<i class="fa fa-caret-down"></i></a>
                         <ul class="sub-menu">
                            <li><a href="<?php echo e(route('products.showProducts')); ?>">shop</a></li>
                            <li><a href="<?php echo e(route('cart.show')); ?>">Your Cart</a></li>
                            <li><a href="<?php echo e(route('wishlist.show')); ?>">Your wishlist</a></li>
                        </ul>
                      </li>

                      <li><a href="<?php echo e(route('contactUs.index')); ?>"> Contact Us</a></li>
                      <li><a href=""><i class="fa-solid fa-envelope" style="color: #000000;"></i></a></li>
                      <li><a href=""><i class="fa-solid fa-bell" style="color: #000000;"></i></a></li>
                      

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
                        
                      </li>
                      <li><a href="contact-us.html">contact Us</a></li>
                    </ul>
                  </div>
                  <!--DL Menu END-->
                  <div>
                    <?php if(auth()->guard()->check()): ?>
                        <!-- المستخدم مسجل الدخول -->
                        <a class="main_button hover-affect" href="<?php echo e(route('profile')); ?>">Profile</a>
                        <a class="main_button hover-affect" href="<?php echo e(route('logout')); ?>" style="margin-left: 2vh"
                           onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                           Logout
                        </a>

                        <!-- نموذج تسجيل الخروج -->
                        <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                            <?php echo csrf_field(); ?>
                        </form>
                    <?php else: ?>
                        <!-- المستخدم غير مسجل الدخول -->
                        <a class="main_button hover-affect" href="<?php echo e(route('signup')); ?>">Sign up</a>
                        <a class="main_button hover-affect" href="<?php echo e(route('login')); ?>" style="margin-left: 2vh">Log in</a>
                    <?php endif; ?>
                </div>
              </div>
              <!-- main top bar end-->
          </div>
        </div>
          <!-- main header end-->

        <!-- main banner start -->
        <div class="main_banner top_banner">
          <div class="bg_layer">
            <div class="custom-container-fluid">
                <div class="main_banner_row">
                    <div class="mian_banner_text">
                         <h2>Your Pet</h2>
                         <h1>Our Priority</h1>
                         <p>PetPal is the relation between pets and their owners, built on <br>
                            trust, love, and care</p>
                        <ul class="banner_video">
                            <a class="main_button btn2 hover-affect" href="#">Learn More</a>
                            <a class="play_btn" href="https://www.youtube.com/watch?v=Yzv0gXqoCkc"><i class="fa fa-play-circle"></i>Play Video</a>
                        </ul>
                    </div>
                    <div class="banner_fig_slider">
                        <div>
                          <div class="mian_banner_fig">
                            <figure>
                               <img src="images/banner-fig01.png">
                           </figure>
                          </div>
                        </div>
                        <div>
                          <div class="mian_banner_fig">
                            <figure>
                               <img src="images/banner-fig.png">
                           </figure>
                          </div>
                        </div>
                        <div>
                          <div class="mian_banner_fig">
                            <figure>
                               <img src="images/banner-fig01.png">
                           </figure>
                          </div>
                        </div>
                    </div>
                </div>
            </div>
              <div id="divider_id" class="website-divider-container-500113">

                 <svg xmlns="http://www.w3.org/2000/svg" class="divider-img-500113" viewBox="0 0 1080 137" preserveAspectRatio="none">
                <path d="M 0,137 V 59.03716 c 158.97703,52.21241 257.17659,0.48065 375.35967,2.17167 118.18308,1.69101 168.54911,29.1665 243.12679,30.10771 C 693.06415,92.25775 855.93515,29.278599 1080,73.61449 V 137 Z" style="opacity:0.85"></path>
              </svg>

              </div>
           </div>
        </div>
        <!-- main banner end-->

        <!-- pet service start -->
        <section class="pet_service">
            <div class="custom-container">
                <div class="mian_heading text-center"><h2>Animals you can adopt</h2></div>


                    <div class="pet_service_row">
                      <div class="pet_service_column">
                          <figure>
                              <img src="images/service_bg.png" alt="image">
                              <img class="hover_img" src="images/service_bg_hover.png" alt="image">
                              <a class="icon_img" href="#"><img src="images/icon-img.png" alt="image"></a>
                          </figure>
                          <h6>Dog</h6>
                      </div>
                     <div class="pet_service_column">
                          <figure>
                              <img src="images/service_bg.png" alt="image">
                              <img class="hover_img" src="images/service_bg_hover.png" alt="image">
                              <a class="icon_img" href="#"><img src="images/icon-img01.png" alt="image"></a>
                          </figure>
                          <h6>Cat</h6>
                      </div>
                     <div class="pet_service_column">
                          <figure>
                              <img src="images/service_bg.png" alt="image">
                              <img class="hover_img" src="images/service_bg_hover.png" alt="image">
                              <a class="icon_img" href="#"><img src="images/icon-img02.png" alt="image"></a>
                          </figure>
                          <h6>Parrots</h6>
                      </div>
                      <div class="pet_service_column">
                          <figure>
                              <img src="images/service_bg.png" alt="image">
                              <img class="hover_img" src="images/service_bg_hover.png" alt="image">
                              <a class="icon_img" href="#"><img src="images/icon-img03.png" alt="image"></a>
                          </figure>
                          <h6>Fish</h6>
                      </div>

                  </div><br><br><br><br>
                  <div style="text-align: center">
                    <a class="main_button btn2 bdr-clr hover-affect" href="<?php echo e(route('adoption.pets')); ?>" style="">Adopt Now</a>
                  </div>

                </div>
        </section>

        <section class="pet_sevice02_wrap">
            <div class="custom-container">
                <div class="mian_heading">
                    <h2 class="clr_white">Our Services</h2>
                    <h3 class="clr_white">We are best in</h3>
                </div>
                <div class="pet_service02_row service_grid">
                    <div class="pet_service02_column">
                        <figure class="">
                          <img style="height: 400px" src="<?php echo e(asset('images/vet1.jpg')); ?>" alt="">
                        </figure>
                        <h5>Consultation</h5>
                        <p>Get expert advice on your pet's health and wellbeing. Schedule a consultation with our specialists to address any concerns you have about your pet.</p>
                        <a href="<?php echo e(route('appointment.create')); ?>">BOOK NOW</a>
                      </div>
                  <div class="pet_service02_column">
                    <figure class="">
                      <img style="height: 400px;width:700px" src="<?php echo e(asset('images/vet3.jpg')); ?>" alt="">
                    </figure>
                    <h5>Vaccination</h5>
                    <p>Our system allows you to choose a convenient date and time to ensure your pet gets the essential vaccines on time. Simple, fast, and stress-free!</p>
                    <a href="<?php echo e(route('appointment.create')); ?>">BOOK NOW</a>
                  </div>
                  <div class="pet_service02_column">
                    <figure class="">
                      <img style="height: 400px;width:400px" src="<?php echo e(asset('images/vet2.jpg')); ?>" alt="">
                    </figure>
                    <h5>Checkup</h5>
                    <p>Ensure your pet is in the best of health with regular checkups. Book a general checkup to keep your pet happy and healthy.</p>
                    <a href="<?php echo e(route('appointment.create')); ?>">BOOK NOW</a>
                  </div>
                </div>
             </div>
             <div class="custom-shape-divider-top-1687264903">
                <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
                    <path d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V0H0V27.35A600.21,600.21,0,0,0,321.39,56.44Z" class="shape-fill"></path>
                </svg>
            </div>
         </section>
         <!-- pet service warp end -->
         <!-- pet service warp end -->

          <!--pet exercise wrap start-->
          <section class="pet_exercise_wrap">
            <div class="container">
             <!--pet exercise row service03 start-->
             <div class="pet_exercise_row service03">
               <div class="pet_exercise_fig">
                   <figure>
                     <img src="images/exercise-fig1.png" alt="">
                   </figure>
               </div>
               <div class="pet_exercise_text">
                 <h3>Pets night</h3>
                 <p>
                    Going on a trip? You can now easily book a comfortable stay for your pet through our online booking system. We ensure your pet feels at home with us by providing top-notch care while you're away.</p>
                 <p>Why Choose Us?</p>
                 <ul class="pet_service_list">
                   <li><a href="#"><i class="fa fa-paw"></i><b>24/7 Veterinary Care</b>: Our professional team monitors your pet around the clock to ensure their health and well-being.</a></li>
                     <li><a href="#"><i class="fa fa-paw"></i><b>Personalized Attention</b>: Each pet receives individualized care, including customized feeding and exercise plans.</a></li>
                   <li><a href="#"><i class="fa fa-paw"></i><b>Safe and Clean Environment</b>: We maintain a hygienic and secure space where your pet can relax and enjoy their stay.</a></li>
                   <li>
                     <a class="main_button bdr-clr hover-affect" href="<?php echo e(route('rooms.index')); ?>">Book Now</a>
                   </li>
                 </ul>
               </div>
             </div>
           </div>
            <!--pet exercise row service03 end -->




        <!--pet client wraper start-->
 <!-- قسم التبرع -->
 <section class="pet_client_wrap" id="donation-section">
  <div class="custom-container">
      <div class="pet_client_row">
          <div class="pet_client_fig">
              <figure>
                  <img src="images/client-text-fig.png" alt="">
                  <h2 class="pet_clien_text"><br>Donate<br> for us</h2>
              </figure>
          </div>
          <div class="pet_client_list">
              <div class="mian_heading">
                  <h2 class="clr_white">So ...</h2>
                  <h3 class="clr_white">what does your donation make?</h3>
              </div>
              <p>"Help us make a difference! Your donation will provide food, shelter, and medical care to animals in need. Every little bit helps save lives. Join us in giving these animals a second chance at happiness and a loving home. Donate today and be the hero they need!"</p>
              <div class="pet_client_detail">
                  <div class="pet_client_detail_text">
                      <a class="main_button hover-affect" href="<?php echo e(route('rescueAnimals.index')); ?>" style="color: white">Donate Now</a>
                  </div>
              </div>
          </div>
      </div>
      <div class="custom-shape-divider-bottom-1687357859">
          <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
              <path d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V0H0V27.35A600.21,600.21,0,0,0,321.39,56.44Z" class="shape-fill"></path>
          </svg>
      </div>
  </div>
</section>

<!-- JavaScript للتحكم بالصوت -->
<script>
  // تحديد ملف الصوت
  const catSound = new Audio("<?php echo e(asset('sounds/cat-sound.wav')); ?>");
  let soundPlayed = false; // لضمان تشغيل الصوت مرة واحدة فقط عند التمرير إلى القسم

  // التحقق من وصول المستخدم إلى قسم التبرع
  function checkScroll() {
      const donationSection = document.getElementById("donation-section");
      const sectionPosition = donationSection.getBoundingClientRect();
      const screenHeight = window.innerHeight;

      // إذا كان القسم يظهر جزئياً أو كلياً على الشاشة
      if (sectionPosition.top < screenHeight && sectionPosition.bottom > 0) {
          if (!soundPlayed) { // تشغيل الصوت مرة واحدة فقط
              catSound.play();
              soundPlayed = true;
          }
      } else {
          // إيقاف الصوت عند خروج القسم من الشاشة وإعادة تعيين الحالة
          catSound.pause();
          catSound.currentTime = 0;
          soundPlayed = false;
      }
  }

  // إضافة حدث التمرير
  window.addEventListener("scroll", checkScroll);
</script>



          <!--pet testimonila wraper end-->

                 <!-- pet about wrap start -->
        <section class="pet_about_wrap">
            <div class="custom-container">
                <div class="pet_about_row">
                   <div class="pet_about_fig">
                        <figure>
                          <img src="images/about-fig.png" alt="image">
                        </figure>
                    </div>
                    <div class="pet_about_text">
                        <h3>Grooming Session</h3>
                        <h2>We'll Make Your Pets<br>
                        Really Awesome</h2>
                        <p> Treat your cat to a refreshing bath by booking an appointment through our online system. Choose a suitable date and time for your cat's grooming session to keep them clean and happy. Quick, easy, and convenient!"</p>
                        <a class="main_button btn2 bdr-clr hover-affect" href="<?php echo e(route('grooming.create')); ?>">Book Now</a>
                    </div>
                </div>
            </div>
        </section>
        <!-- pet about wrap end -->


    <!--pet testimonila wraper end-->
           <!-- main banner start -->
           <div class="main_banner responsive-banner">
            <div class="bg-overlay">
              <div class="custom-container-fluid">
                  <div class="main_banner_row">
                      <div class="mian_banner_text">
                           <h2>Pet Shop</h2>
                           <h1>Our shop</h1>
                           <p>offers a wide range of supplies to help you take care of your pets<br>
                              </p><br>
                          <ul class="banner_video">
                              <a class="main_button btn2 hover-affect" href="<?php echo e(route('products.showProducts')); ?>">Shop Now</a>
                              
                          </ul>
                      </div>
                  </div>
              </div>
                <div id="divider_id" class="website-divider-container-500113">

                   <svg xmlns="http://www.w3.org/2000/svg" class="divider-img-500113" viewBox="0 0 1080 137" preserveAspectRatio="none">
                  <path d="M 0,137 V 59.03716 c 158.97703,52.21241 257.17659,0.48065 375.35967,2.17167 118.18308,1.69101 168.54911,29.1665 243.12679,30.10771 C 693.06415,92.25775 855.93515,29.278599 1080,73.61449 V 137 Z" style="opacity:0.85"></path>
                </svg>

                </div>
             </div>
          </div>
          <!-- main banner end-->
          <section class="pet_exercise_wrap">
            <div class="container">
          <div class="pet_exercise_row service03 reverse-column">
            <div class="pet_exercise_text">
              <h3>Provide best quality pet boarding.</h3>
              <p>Our staff spends time interacting with and monitoring the pets to ensure their safety and happiness while they are with us. Capitalize on low hanging fruit to identify a ballpark value added activity to beta test. Override the digital divide with additional clickthroughs from DevOps. Nanotechnology immersion along the information highway.</p>
              <p>administrate empowered markets via plug-and-play networks. Dynamically procrastinate B2C users after installed base benefits dramatically visualize.</p>
              <ul class="pet_service_list">
                <li><a href="#"><i class="fa fa-paw"></i>Proposal, together sides decisions, had as a into.</a></li>
                  <li><a href="#"><i class="fa fa-paw"></i>Proposal, together sides decisions, had as a into.</a></li>
                <li><a href="#"><i class="fa fa-paw"></i>Proposal, together sides decisions, had as a into.</a></li>
                <li>
                  <a class="main_button bdr-clr hover-affect" href="#">See More</a>
                </li>
              </ul>
            </div>
            <div class="pet_exercise_fig">
                <figure>
                  <img src="images/exercise-fig.png" alt="">
                </figure>
            </div>
          </div>
            </div>
          </section>
           <!-- main banner start -->
           <div class="main_banner responsive-banner" style="	background-image: url(/images/event7.jpg);">
            <div class="bg-overlay">
              <div class="custom-container-fluid">
                  <div class="main_banner_row">
                      <div class="mian_banner_text">
                           <h2>Pet Events</h2>
                           <h1>Our events</h1>
                           <p>are designed to educate pet owners on important topics related to pet care and well-being. <br> Through these events, we bring together experts and companies that provide free samples <br> and advice, helping you select the best products tailored for your pet's unique needs. <br> It's a perfect opportunity to learn more and make informed choices for your furry friend.<br>
                              </p><br>
                          <ul class="banner_video">
                              <a class="main_button btn2 hover-affect" href="<?php echo e(route('events.show')); ?>">Show events</a>
                              
                          </ul>
                      </div>
                  </div>
              </div>
                <div id="divider_id" class="website-divider-container-500113">

                   <svg xmlns="http://www.w3.org/2000/svg" class="divider-img-500113" viewBox="0 0 1080 137" preserveAspectRatio="none">
                  <path d="M 0,137 V 59.03716 c 158.97703,52.21241 257.17659,0.48065 375.35967,2.17167 118.18308,1.69101 168.54911,29.1665 243.12679,30.10771 C 693.06415,92.25775 855.93515,29.278599 1080,73.61449 V 137 Z" style="opacity:0.85"></path>
                </svg>

                </div>
             </div>
          </div>
          <!-- main banner end-->
             <!--child service  wrap start-->
             <section class="child_service_wrap">
                <div class="container">
                    <div class="mian_heading text-center">
                        <h2>Our Posts</h2>
                        <h3>Keep in touch</h3>
                    </div>
                    <div class="child_service_row">
                        <div class="child_service_slider">
                            <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> <!-- Start the foreach loop -->
                            <div>
                                <div class="child_service_column">
                                    <figure class="image-layer-affect">
                                        <img style="height: 283px;width:368px" src="<?php echo e($post->image); ?>" alt="<?php echo e($post->title); ?>"> <!-- Use the image from the post -->
                                    </figure>
                                    <div class="child_service_text">
                                        
                                        <h5><?php echo e($post->title); ?><br></h5>
                                        <ul class="child_service_info">
                                            <li>
                                                <i class="fa fa-calendar"></i>
                                                <?php echo e($post->created_at ? $post->created_at->format('F j, Y \a\t g:i A') : 'Date not available'); ?>

                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> <!-- End the foreach loop -->
                        </div>

                    </div><br>
                    <a href="<?php echo e(route('posts.index')); ?>"class="main_button btn2 bdr-clr hover-affect" style="margin-left: 42%">view all posts</a>

                </div>
            </section>
          <!--pet price table wraper end-->



          <!--pet client wraper start-->
          <section class="pet_client_wrap main_padding0" style="height:50%">
            <div class="container">
                <div class="pet_client_row textimonial_row">
                    <div class="pet_client_fig" style="margin-left: 17%">
                        <h3 class="pet_client_text">See Our</h3>
                        <h2>Client <br> Testimonials</h2>
                        <a class="main_button hover-affect" href="<?php echo e(route('feedback')); ?>" style="color: white">show feedback</a>
                        <p style="visibility: hidden">Lorem ipsum dolor sit amet,lllllllconsectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida.</p>
                    </div>

                    <div class="pet_client02_row">
                        <div class="pet_client02_slider">
                            <?php $__currentLoopData = $ratings; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rating): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="pet_client02_column" style="width: 50vh;height:45vh">
                                <div class="pet_client_list">
                                    <p><?php echo e($rating->feedback); ?></p>
                                    <div class="pet_client_detail">
                                        <figure>
                                            <img style="height: 77px;width:77px;border-radius:50%" src="<?php echo e(asset($rating->user->image)); ?>" alt="Client Image">
                                        </figure>
                                        <div class="pet_client_detail_text">
                                            <h6><?php echo e($rating->user->name); ?></h6>
                                            
                                        </div>
                                    </div>
                                </div><br><br><br>
                            </div><br>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                    </div>
                </div>


                <div class="custom-shape-divider-bottom-1687357859">
                    <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
                        <path d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V0H0V27.35A600.21,600.21,0,0,0,321.39,56.44Z" class="shape-fill"></path>
                    </svg>
                </div>

            </div>
        </section>







        <!--pet gallery warp start-->
        <section class="pet_gallery_wrap">
            <div class="mian_heading text-center">
                <h2>See Our</h2>
                <h3>Really Awesome <br> Gallery</h3>
            </div>
            <div class="pet_gallery_row">
                <?php if(isset($pets[0])): ?>
                    <div class="pet_gallery_fig">
                        <figure class="image-layer-affect">
                            <img style="height: 265px;width:265px" src="<?php echo e(asset( $pets[0]->image)); ?>" alt="<?php echo e($pets[0]->name); ?>">
                        </figure>
                    </div>
                <?php endif; ?>

                <?php if(isset($pets[1])): ?>
                    <div class="pet_gallery_fig">
                        <figure class="image-layer-affect">
                            <img style="height: 265px;width:265px" src="<?php echo e(asset($pets[1]->image)); ?>" alt="<?php echo e($pets[1]->name); ?>">
                        </figure>
                        <?php if(isset($pets[2])): ?>
                            <figure class="image-layer-affect">
                                <img style="height: 265px;width:265px" src="<?php echo e(asset( $pets[2]->image)); ?>" alt="<?php echo e($pets[2]->name); ?>">
                            </figure>
                        <?php endif; ?>
                    </div>
                <?php endif; ?>

                <?php if(isset($pets[3])): ?>
                    <div class="pet_gallery_fig margin-top">
                        <figure class="image-layer-affect">
                            <img style="height: 265px;width:265px" src="<?php echo e(asset( $pets[3]->image)); ?>" alt="<?php echo e($pets[3]->name); ?>">
                        </figure>
                        <?php if(isset($pets[4])): ?>
                            <figure class="image-layer-affect">
                                <img style="height: 265px;width:265px" src="<?php echo e(asset( $pets[4]->image)); ?>" alt="<?php echo e($pets[4]->name); ?>">
                            </figure>
                        <?php endif; ?>
                    </div>
                <?php endif; ?>

                <?php if(isset($pets[5])): ?>
                    <div class="pet_gallery_fig">
                        <figure class="image-layer-affect">
                            <img style="height: 265px;width:265px" src="<?php echo e(asset($pets[5]->image)); ?>" alt="<?php echo e($pets[5]->name); ?>">
                        </figure>
                        <?php if(isset($pets[6])): ?>
                            <figure class="image-layer-affect">
                                <img style="height: 265px;width:265px" src="<?php echo e(asset($pets[6]->image)); ?>" alt="<?php echo e($pets[6]->name); ?>">
                            </figure>
                        <?php endif; ?>
                    </div>
                <?php endif; ?>

                <?php if(isset($pets[7])): ?>
                    <div class="pet_gallery_fig margin-top">
                        <figure class="image-layer-affect">
                            <img style="height: 265px;width:265px" src="<?php echo e(asset( $pets[7]->image)); ?>" alt="<?php echo e($pets[7]->name); ?>">
                        </figure>
                        <?php if(isset($pets[8])): ?>
                            <figure class="image-layer-affect">
                                <img style="height: 265px;width:265px" src="<?php echo e(asset($pets[8]->image)); ?>" alt="<?php echo e($pets[8]->name); ?>">
                            </figure>
                        <?php endif; ?>
                    </div>
                <?php endif; ?>

                <?php if(isset($pets[9])): ?>
                    <div class="pet_gallery_fig">
                        <figure class="image-layer-affect">
                            <img style="height: 265px;width:265px" src="<?php echo e(asset( $pets[9]->image)); ?>" alt="<?php echo e($pets[9]->name); ?>">
                        </figure>
                        <?php if(isset($pets[10])): ?>
                            <figure class="image-layer-affect">
                                <img style="height: 265px;width:265px" src="<?php echo e(asset( $pets[10]->image)); ?>" alt="<?php echo e($pets[10]->name); ?>">
                            </figure>
                        <?php endif; ?>
                    </div>
                <?php endif; ?>
                <?php if(isset($pets[11])): ?>
                <div class="pet_gallery_fig">
                    <figure class="image-layer-affect">
                        <img style="height: 265px;width:265px" src="<?php echo e(asset( $pets[11]->image)); ?>" alt="<?php echo e($pets[11]->name); ?>">
                    </figure>
                </div>
            <?php endif; ?>
            </div>
        </section>

        <!--pet gallery warp end-->

<!-- pet counter wrap start -->
<section class="pet_counter_wrap">
    <div class="pet_counter_bg">
      <div class="custom-container">
         <div class="pet_counter_row">
            <div class="pet_counter_column">
              <span><i class="fa fa-user-md"></i></span>
              <div class="pet_counter_text">
                <h3 class="counter"><?php echo e($usersCount); ?></h3>
                <p>Clients</p>
              </div>
            </div>
            <div class="pet_counter_column">
              <span><i class="fa fa-user-md"></i></span>
              <div class="pet_counter_text">
                <h3 class="counter"><?php echo e($doctorsCount); ?></h3>
                <p>Doctors</p>
              </div>
            </div>
            <div class="pet_counter_column">
              <span><i class="fa fa-paw"></i></span>
              <div class="pet_counter_text">
                <h3 class="counter"><?php echo e($petsCount); ?></h3>
                <p>Pets</p>
              </div>
            </div>
            <div class="pet_counter_column">
              <span><i class="fa fa-medkit"></i></span>
              <div class="pet_counter_text">
                <h3 class="counter"><?php echo e($productsCount); ?></h3>
                <p>Products</p>
              </div>
           </div>
         </div>
      </div>
      <div class="custom-shape-divider-bottom-1687266093">
          <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
              <path d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V0H0V27.35A600.21,600.21,0,0,0,321.39,56.44Z" class="shape-fill"></path>
          </svg>
      </div>
    </div>
  </section>
   <!-- pet client wrap end-->

        <!--pet price table wraper start-->
        <section class="pet_price_table_wrap">
          <div class="custom-container">
            <div class="mian_heading text-center">
              <h2>best stuff</h2>
              <h3>Our Doctors</h3>
            </div>
            <div class="pet_price_table_row"  >
                <?php $__currentLoopData = $doctors; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $doctor): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="pet_price_table_column" >
                        <figure class="image-layer-affect">
                            <img style="height:400px;width:450px" src="<?php echo e(asset($doctor->user->image)); ?>" alt="">
                        </figure>
                        <div class="pet_price_text">
                            <h2>Dr.<?php echo e(explode(' ', $doctor->user->name)[0]); ?></h2>
                            <p><?php echo e($doctor->about ?? 'No information available'); ?></p><br>
                            <p>Email: <?php echo e($doctor->user->email); ?></p>


                            <a class="main_button btn2 bdr-clr hover-affect" href="<?php echo e(route('users.posts', $doctor->user->id)); ?>">visit profile</a>
                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
          </div>
        </section>
        <!--pet price table wraper end-->


        <!--pet company wrap start-->
        <section class="pet_company_wrap instagram-fig">
          <div class="custom-container-fluid">
            <div class="pet_company_row">
              <div class="pet-ccompany-slider">
                <div>
                  <div class="pet_company_column">
                      <figure class="image-layer-affect">
                        <img style="height: 200px;width:235px" src="<?php echo e(asset('img/brands/brand9.jpg')); ?>" alt="">
                      </figure>
                  </div>
                </div>
                <div>
                  <div class="pet_company_column">
                      <figure class="image-layer-affect">
                        <img style="height: 200px;width:235px" src="<?php echo e(asset('img/brands/brand2.png')); ?>" alt="">
                      </figure>
                  </div>
              </div>
              <div>
                <div class="pet_company_column">
                    <figure class="image-layer-affect">
                        <img style="height: 200px;width:235px" src="<?php echo e(asset('img/brands/brand3.jpg')); ?>" alt="">
                      </figure>
                </div>
              </div>
              <div>
                <div class="pet_company_column">
                    <figure class="image-layer-affect">
                        <img style="height: 200px;width:235px" src="<?php echo e(asset('img/brands/brand8.jpg')); ?>" alt="">
                      </figure>
                </div>
              </div>
              <div>
                <div class="pet_company_column">
                    <figure class="image-layer-affect">
                        <img style="height: 200px;width:235px" src="<?php echo e(asset('img/brands/brand5.jpg')); ?>" alt="">
                      </figure>
                </div>
              </div>
              <div>
                <div class="pet_company_column">
                   <figure class="image-layer-affect">
                        <img style="height: 200px;width:235px" src="<?php echo e(asset('img/brands/brand6.png')); ?>" alt="">
                      </figure>
                </div>
              </div>
              <div>
                <div class="pet_company_column">
                    <figure class="image-layer-affect">
                        <img style="height: 200px;width:235px" src="<?php echo e(asset('img/brands/brand7.png')); ?>" alt="">
                      </figure>
                </div>
              </div>
            </div>
          </div>
          <div class="custom-shape-divider-top-1687358087">
            <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
                <path d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V0H0V27.35A600.21,600.21,0,0,0,321.39,56.44Z" class="shape-fill"></path>
            </svg>
        </div>
        </div>
      </section>
      <!--pet compnay wrap end-->

      <!--pet widget start-->
      <div class="pet_widget">
            <div class="custom-container">
              <div class="main_widget_row">
                <div class="widget_contact">
                   <h6 class="widget_title">Contacts Us</h6>
                  <div class="main_widget_column">
                    <span><img src="images/phone-fig.png"></span>
                    <div class="main_widget_contact">
                      <a href="#">+962791547531</a>
                      <a href="#">+962799567006</a>
                    </div>
                  </div>
                  <div class="main_widget_column">
                    <span><img src="images/envelope-fig.png"></span>
                    <div class="main_widget_contact">
                      <a href="#">pet2024pal@gmail.com</a>
                      <a href="#">pet.pal@gmail.com</a>
                    </div>
                  </div>
                  <div class="main_widget_column">
                    <span><img src="images/map-fig.png"></span>
                    <div class="main_widget_contact">
                      <a href="#">Jordan, Amman, Abu nusayr,<br>
                        Abu nusayr street</a>
                    </div>
                  </div>
                </div>

                <div class="pet_widget_column">
                  <figure><img src="images/top-logo.png"></figure>
                  <p>"At our veterinary clinic, we provide a comprehensive range of services to ensure the health and happiness of your beloved pet. Our priority is to deliver exceptional care and meet all your expectations, because your pet's well-being is our top priority."</p>
                  <ul class="widget_social_share">
                    <li><a class="hover-affect" href="#"><i class="fa fa-facebook"></i></a></li>
                    <li><a class="hover-affect" href="#"><i class="fa fa-twitter"></i></a></li>
                    <li><a class="hover-affect" href="#"><i class="fa fa-camera"></i></a></li>
                    <li><a class="hover-affect" href="#"><i class="fa fa-youtube"></i></a></li>
                  </ul>
                  <a class="main_button btn2 bdr-clr hover-affect" href="<?php echo e(route('contactUs.index')); ?>">Contact Us</a>
                </div>
                <div class="pet_widget_column widtget-hours">
                   <h6 class="widget_title">Opening Hours</h6>
                    <ul class="pet_widget_link">
                      <li><a href="#">Monday </a><span>09:00 am - 09:00 pm</span></li>
                      <li><a href="#">Tuesday </a><span>09:00 am - 09:00 pm</span></li>
                      <li><a href="#">Wednesday</a><span>09:00 am - 09:00 pm</span></li>
                      <li><a href="#">Wednesday</a><span>09:00 am - 09:00 pm</span></li>
                      <li><a href="#">Friday</a><span>09:00 am - 09:00 pm</span></li>
                      <li><a href="#">Saturday</a><span>09:00 am - 09:00 pm</span></li>
                      <li><a href="#">Sunday</a><span>09:00 am - 09:00 pm</span></li>
                    </ul>
              </div>
            </div>
        </div>
        <div class="pet_copyright">
            <div class="container">
              <div class="pet_copyright_text">
                  <p>@ 2024 All Rights Reserved and Registered</p>
              </div>
            </div>
          </div>
      </div>
    </div>
    <div id="paw-icon"></div>

    <script>
        // تعريف حدث للتحكم في حركة الأيقونة مع حركة الفأرة
        document.addEventListener("mousemove", function(event) {
    const pawIcon = document.getElementById("paw-icon");
    // ضبط موضع الأيقونة بناءً على موقع المؤشر بالنسبة للنافذة
    pawIcon.style.left = event.clientX + "px";
    pawIcon.style.top = event.clientY + "px";
});


    </script>
    <!--pet widget end-->
    <!--Jquery Library-->
    <script src="js/jquery.js"></script>
	   <!--Bootstrap core JavaScript-->
    <script src="js/bootstrap.js"></script>
    <!--Slick Slider JavaScript-->
    <script src="js/slick.min.js"></script>
    <!--Pretty Photo JavaScript-->
    <script src="js/jquery.prettyPhoto.js"></script>
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
    </div>
    </body>
</html>
<?php /**PATH C:\Users\Orange\Desktop\project vet pet\project\resources\views/index.blade.php ENDPATH**/ ?>