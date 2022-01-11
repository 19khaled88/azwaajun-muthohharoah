<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Azwaajun-Muthohharoh</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">


        <meta content="" name="description">
        <meta content="" name="keywords">

        <!-- Favicons -->
        <link href="{{asset('frontend/img/favicon.png')}}" rel="icon">
        <link href="{{asset('frontend/img/apple-touch-icon.png')}}" rel="apple-touch-icon">

        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Montserrat:300,400,500,600,700" rel="stylesheet">

        <!-- Vendor CSS Files -->
        <link href="{{asset('frontend/vendor/aos/aos.css')}}" rel="stylesheet">
        <link href="{{asset('frontend/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
        <link href="{{asset('frontend/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
        <link href="{{asset('frontend/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
        <link href="{{asset('frontend/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">

        <!-- Template Main CSS File -->
        <link href="{{asset('frontend/css/style.css')}}" rel="stylesheet">
        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas
            /normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.dark\:text-gray-500{--tw-text-opacity:1;color:#6b7280;color:rgba(107,114,128,var(--tw-text-opacity))}}
        </style>

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
            /* .inner-div{
                display:flex;
                flex-direction:row;
            }
            .inner-div-1{

                padding-right:10px;
                border:1px solid black;
                margin-right:5px;
                border-radius:5px;
                width:350px;
            }
            .inner-div-2{

                padding-left:10px;
                border:1px solid black;
                margin-left:5px;
                border-radius:5px;
                width:350px;
            }
            .inner-div-1-p{
                padding:0px; margin:0px;
                text-align:'center';
            }
            .inner-div-2-p{
                padding:0px; margin:0px;
                text-align:'center';
            } */
        </style>
    </head>
    <body class="antialiased">
        <!-- <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
            @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/home') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Home</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
        </div> -->
          <!-- ======= Header ======= -->
      <header id="header" class="fixed-top d-flex align-items-center header-transparent">
         <div class="container d-flex align-items-center">

           <h1 class="logo me-auto"><a href="index.html">Rapid</a></h1>
           <!-- Uncomment below if you prefer to use an image logo -->
           <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

           <nav id="navbar" class="navbar order-last order-lg-0">
             <ul>
               <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
               <!-- <li><a class="nav-link scrollto" href="#about">About</a></li>
               <li><a class="nav-link scrollto" href="#services">Services</a></li> -->
               <li><a class="nav-link scrollto " href="{{URL::to('goal')}}">Our Goal</a></li>
               <li><a class="nav-link scrollto" href="{{URL::to('term-condition')}}">Terms & Condition</a></li>
               <li><a class="nav-link scrollto" href="{{URL::to('bio-dataCreate')}}">Bio-Data</a></li>
               <li class="dropdown"><a href="#"><span>Users</span></a>
                 <ul id="user-panel">
                   <li id="user-profile-login"><a class="user-profile-login" href="#">Login</a></li>
                   <li id="user-profile-register"><a class="user-profile-register" href="#">Register</a></li>
                 </ul>
               </li>
               <!-- <li><a class="nav-link scrollto" href="#footer">Contact</a></li> -->
             </ul>
             <i class="bi bi-list mobile-nav-toggle"></i>
           </nav><!-- .navbar -->

           <div class="social-links">
             <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
             <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
             <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
             <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
           </div>

         </div>
      </header><!-- End Header -->

 <!-- ======= Hero Section ======= -->
     <section id="hero" class="clearfix">
       <div class="container d-flex h-100">
         <div class="row justify-content-center align-self-center" data-aos="fade-up">
           <div class="col-lg-6 intro-info order-lg-first order-last" data-aos="zoom-in" data-aos-delay="100">
             <h2>Rapid Solutions<br>for Your <span>Business!</span></h2>
             <div>
               <a href="#about" class="btn-get-started scrollto">Get Started</a>
             </div>
           </div>

           <div class="col-lg-6 intro-img order-lg-last order-first" data-aos="zoom-out" data-aos-delay="200">
             <img src="{{asset('frontend/img/intro-img.svg')}}" alt="" class="img-fluid">
           </div>
         </div>

       </div>
     </section><!-- End Hero -->

     <main id="main">

    <!-- ======= About Section ======= -->
      <section id="about" class="about">

        <div class="container" data-aos="fade-up">
          <div class="row">

            <div class="col-lg-5 col-md-6">
              <div class="about-img" data-aos="fade-right" data-aos-delay="100">
                <!-- <img src="assets/img/about-img.jpg" alt=""> -->
              </div>
            </div>

            <div class="col-lg-7 col-md-6">
              <div class="about-content" data-aos="fade-left" data-aos-delay="100">
                <h2>About Us</h2>
                <h3>Odio sed id eos et laboriosam consequatur eos earum soluta.</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                <p>Aut dolor id. Sint aliquam consequatur ex ex labore. Et quis qui dolor nulla dolores neque. Aspernatur consectetur omnis numquam quaerat. Sed fugiat nisi. Officiis veniam molestiae. Et vel ut quidem alias veritatis repudiandae ut fugit. Est ut eligendi aspernatur nulla voluptates veniam iusto vel quisquam. Fugit ut maxime incidunt accusantium totam repellendus eum error. Et repudiandae eum iste qui et ut ab alias.</p>
                <ul>
                  <li><i class="bi bi-check-circle"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
                  <li><i class="bi bi-check-circle"></i> Duis aute irure dolor in reprehenderit in voluptate velit.</li>
                  <li><i class="bi bi-check-circle"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate trideta storacalaperda mastiro dolore eu fugiat nulla pariatur.</li>
                </ul>
              </div>
            </div>
          </div>
        </div>

      </section><!-- End About Section -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services section-bg">
      <div class="container" data-aos="fade-up">

        <header class="section-header">
          <h3>Services</h3>
          <p>Laudem latine persequeris id sed, ex fabulas delectus quo. No vel partiendo abhorreant vituperatoribus.</p>
        </header>

        <div class="row">

          <div class="col-md-6 col-lg-4 wow bounceInUp" data-aos="zoom-in" data-aos-delay="100">
            <div class="box">
              <div class="icon" style="background: #fceef3;"><i class="bi bi-briefcase" style="color: #ff689b;"></i></div>
              <h4 class="title"><a href="">Lorem Ipsum</a></h4>
              <p class="description">Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident</p>
            </div>
          </div>
          <div class="col-md-6 col-lg-4" data-aos="zoom-in" data-aos-delay="200">
            <div class="box">
              <div class="icon" style="background: #fff0da;"><i class="bi bi-card-checklist" style="color: #e98e06;"></i></div>
              <h4 class="title"><a href="">Dolor Sitema</a></h4>
              <p class="description">Minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat tarad limino ata</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-4" data-aos="zoom-in" data-aos-delay="300">
            <div class="box">
              <div class="icon" style="background: #e6fdfc;"><i class="bi bi-bar-chart" style="color: #3fcdc7;"></i></div>
              <h4 class="title"><a href="">Sed ut perspiciatis</a></h4>
              <p class="description">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur</p>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 wow" data-aos="zoom-in" data-aos-delay="100">
            <div class="box">
              <div class="icon" style="background: #eafde7;"><i class="bi bi-binoculars" style="color:#41cf2e;"></i></div>
              <h4 class="title"><a href="">Magni Dolores</a></h4>
              <p class="description">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-4" data-aos="zoom-in" data-aos-delay="200"">
        <div class=" box">
            <div class="icon" style="background: #e1eeff;"><i class="bi bi-brightness-high" style="color: #2282ff;"></i></div>
            <h4 class="title"><a href="">Nemo Enim</a></h4>
            <p class="description">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque</p>
          </div>
        </div>
        <div class="col-md-6 col-lg-4" data-aos="zoom-in" data-aos-delay="300">
          <div class="box">
            <div class="icon" style="background: #ecebff;"><i class="bi bi-calendar4-week" style="color: #8660fe;"></i></div>
            <h4 class="title"><a href="">Eiusmod Tempor</a></h4>
            <p class="description">Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi</p>
          </div>
        </div>

      </div>

      </div>
    </section><!-- End Services Section -->

    <!-- ======= Why Us Section ======= -->
    <section id="why-us" class="why-us">
      <div class="container-fluid" data-aos="fade-up">

        <header class="section-header">
          <h3>Why choose us?</h3>
          <p>Laudem latine persequeris id sed, ex fabulas delectus quo. No vel partiendo abhorreant vituperatoribus.</p>
        </header>

        <div class="row">

          <div class="col-lg-6" data-aos="zoom-in" data-aos-delay="100">
            <div class="why-us-img">
              <!-- <img src="assets/img/why-us.jpg" alt="" class="img-fluid"> -->
            </div>
          </div>

          <div class="col-lg-6">
            <div class="why-us-content">
              <p>Molestiae omnis numquam corrupti omnis itaque. Voluptatum quidem impedit. Odio dolorum exercitationem est error omnis repudiandae ad dolorum sit.</p>
              <p>
                Explicabo repellendus quia labore. Non optio quo ea ut ratione et quaerat. Porro facilis deleniti porro consequatur
                et temporibus. Labore est odio.

                Odio omnis saepe qui. Veniam eaque ipsum. Ea quia voluptatum quis explicabo sed nihil repellat..
              </p>

              <div class="features clearfix" data-aos="fade-up" data-aos-delay="100">
                <i class="bi bi-bookmarks" style="color: #f058dc;"></i>
                <h4>Corporis dolorem</h4>
                <p>Commodi quia voluptatum. Est cupiditate voluptas quaerat officiis ex alias dignissimos et ipsum. Soluta at enim modi ut incidunt dolor et.</p>
              </div>

              <div class="features clearfix" data-aos="fade-up" data-aos-delay="200">
                <i class="bi bi-box-seam" style="color: #ffb774;"></i>
                <h4>Eum ut aspernatur</h4>
                <p>Molestias eius rerum iusto voluptas et ab cupiditate aut enim. Assumenda animi occaecati. Quo dolore fuga quasi autem aliquid ipsum odit. Perferendis doloremque iure nulla aut.</p>
              </div>

              <div class="features clearfix" data-aos="fade-up" data-aos-delay="300">
                <i class="bi bi-card-checklist" style="color: #589af1;"></i>
                <h4>Voluptates dolores</h4>
                <p>Voluptates nihil et quis omnis et eaque omnis sint aut. Ducimus dolorum aspernatur. Totam dolores ut enim ullam voluptas distinctio aut.</p>
              </div>

            </div>

          </div>

        </div>

      </div>

      <div class="container">
        <div class="row counters" data-aos="fade-up" data-aos-delay="100">

          <div class="col-lg-3 col-6 text-center">
            <span data-purecounter-start="0" data-purecounter-end="232" data-purecounter-duration="1" class="purecounter"></span>
            <p>Clients</p>
          </div>

          <div class="col-lg-3 col-6 text-center">
            <span data-purecounter-start="0" data-purecounter-end="421" data-purecounter-duration="1" class="purecounter"></span>
            <p>Projects</p>
          </div>

          <div class="col-lg-3 col-6 text-center">
            <span data-purecounter-start="0" data-purecounter-end="1453" data-purecounter-duration="1" class="purecounter"></span>
            <p>Hours Of Support</p>
          </div>

          <div class="col-lg-3 col-6 text-center">
            <span data-purecounter-start="0" data-purecounter-end="48" data-purecounter-duration="1" class="purecounter"></span>
            <p>Hard Workers</p>
          </div>

        </div>

      </div>
    </section><!-- End Why Us Section -->
  </main><!-- End #main -->


  <!-- ======= Footer ======= -->
   <footer id="footer" class="section-bg">
     <div class="footer-top">
       <div class="container">

         <div class="row">

           <div class="col-lg-6">

             <div class="row">

               <div class="col-sm-6">

                 <div class="footer-info">
                   <h3>Rapid</h3>
                   <p>Cras fermentum odio eu feugiat lide par naso tierra. Justo eget nada terra videa magna derita valies darta donna mare fermentum iaculis eu non diam phasellus. Scelerisque felis imperdiet proin fermentum leo. Amet volutpat consequat mauris nunc congue.</p>
                 </div>

                 <div class="footer-newsletter">
                   <h4>Our Newsletter</h4>
                   <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna veniam enim veniam illum dolore legam minim quorum culpa amet magna export quem.</p>
                   <form action="" method="post">
                     <input type="email" name="email"><input type="submit" value="Subscribe">
                   </form>
                 </div>

               </div>

               <div class="col-sm-6">
                 <div class="footer-links">
                   <h4>Useful Links</h4>
                   <ul>
                     <li><a href="#">Home</a></li>
                     <li><a href="#about">About us</a></li>
                     <li><a href="#">Services</a></li>
                     <li><a href="#">Terms of service</a></li>
                     <li><a href="#">Privacy policy</a></li>
                   </ul>
                 </div>

                 <div class="footer-links">
                   <h4>Contact Us</h4>
                   <p>
                     A108 Adam Street <br>
                     New York, NY 535022<br>
                     United States <br>
                     <strong>Phone:</strong> +1 5589 55488 55<br>
                     <strong>Email:</strong> info@example.com<br>
                   </p>
                 </div>

                 <div class="social-links">
                   <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
                   <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
                   <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
                   <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
                 </div>

               </div>

             </div>

           </div>

           <div class="col-lg-6">

             <div class="form">

               <h4>Send us a message</h4>
               <p>Eos ipsa est voluptates. Nostrum nam libero ipsa vero. Debitis quasi sit eaque numquam similique commodi harum aut temporibus.</p>

               <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                 <div class="form-group">
                   <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                 </div>
                 <div class="form-group mt-3">
                   <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                 </div>
                 <div class="form-group mt-3">
                   <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
                 </div>
                 <div class="form-group mt-3">
                   <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
                 </div>

                 <div class="my-3">
                   <div class="loading">Loading</div>
                   <div class="error-message"></div>
                   <div class="sent-message">Your message has been sent. Thank you!</div>
                 </div>

                 <div class="text-center"><button type="submit" title="Send Message">Send Message</button></div>
               </form>

             </div>

           </div>

         </div>

       </div>
     </div>

     <div class="container">
       <div class="copyright">
         &copy; Copyright <strong>Rapid</strong>. All Rights Reserved
       </div>
       <div class="credits">
         <!--
         All the links in the footer should remain intact.
         You can delete the links only if you purchased the pro version.
         Licensing information: https://bootstrapmade.com/license/
         Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Rapid
       -->
         Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
       </div>
     </div>
   </footer><!-- End  Footer -->

   <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

 <!-- Vendor JS Files -->
     <script src="{{asset('frontend/vendor/purecounter/purecounter.js')}}"></script>
     <script src="{{asset('frontend/vendor/aos/aos.js')}}"></script>
     <script src="{{asset('frontend/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
     <script src="{{asset('frontend/vendor/glightbox/js/glightbox.min.js')}}"></script>
     <script src="{{asset('frontend/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
     <script src="{{asset('frontend/vendor/swiper/swiper-bundle.min.js')}}"></script>
     <script src="{{asset('frontend/vendor/php-email-form/validate.js')}}"></script>

     <!-- Template Main JS File -->
     <script src="{{asset('frontend/js/main.js')}}"></script>
    </body>
</html>
