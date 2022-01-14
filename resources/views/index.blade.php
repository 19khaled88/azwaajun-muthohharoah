<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>AzwaajunM.</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{asset('assets/img/favicon.png')}}" rel="icon">
  <link href="{{asset('assets/img/apple-touch-icon.png')}}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Montserrat:300,400,500,600,700" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{asset('assets/vendor/aos/aos.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{asset('assets/css/style.css')}}" rel="stylesheet">
  <style>
    .nav-link {
            color: green;
        }
  
        .nav-item>a:hover {
            color: green;
        }
  
        /*code to change background color*/
        .navbar-ul>.active>a {
            background-color: #C0C0C0;
            color: green;
        }
        /* number field with textfield */
        input[type="number"]{
          -moz-appearnce:textfield;
        }
        input[type="number"]::-webkit-inner-spin-button, 
        input[type="number"]::-webkit-outer-spin-button { 
          -webkit-appearance: none; 
          margin: 0; 
        }
        .footer-links>ul>li>a{
          padding-bottom:0px;
          padding-top:0px
        }
        /* number field with textfield */

  </style>
  
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center header-transparent">
    <div class="container d-flex align-items-center">

      <h1 class="logo me-auto siteName"><a href="/" style="font-size:18px">Azwaajun Muthohharoh</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul class="navbar-ul">
          <li class="nav-item active "><a class="nav-link scrollto" href="/">Home</a></li>
          <li class="nav-item"><a class="nav-link scrollto" href="goal">Goal</a></li>
          <li class="nav-item"><a class="nav-link scrollto" href="term-condition">Terms&Condition</a></li>
          <li class="nav-item"><a class="nav-link scrollto" href="bio-dataCreate">Bio-Data</a></li>
          <li class="dropdown"><a href="#"><span>User</span> <i class="bi bi-chevron-down"></i></a>
            <ul style="width:120px;height:110px;border-radius:5px">
              <li style="padding-left:10px;border-radius:5px;padding-bottom:8px;margin-top:10px"><a style="background-color:skyblue;width:100px;border-radius:5px;height:30px" href="{{url('/login/login')}}">Login</a></li>
              <li style="padding-left:10px;border-radius:5px;display:none"><a style="background-color:skyblue;;width:100px;border-radius:5px;height:30px" href="#">Register</a></li>
              
            </ul>
          </li>
          <!-- <li><a class="nav-link scrollto" href="#footer">Contact</a></li> -->
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

      <div class="social-links">
        <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
        <a href="https://www.facebook.com/Azwaajum-Muthohharoh-%E0%A6%AA%E0%A6%AC%E0%A6%BF%E0%A6%A4%E0%A7%8D%E0%A6%B0-%E0%A6%B8%E0%A6%99%E0%A7%8D%E0%A6%97%E0%A7%80-890949244274398" class="facebook"><i class="bi bi-facebook"></i></a>
        <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
        <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
      </div>

    </div>
  </header><!-- End Header -->

    <!-- ======= Hero Section ======= -->
    <section id="hero" class="clearfix">
    <div class="container d-flex h-100">
      <div class="row justify-content-center align-self-center" style="height:100%" data-aos="fade-up">
        <div style="margin:0px;padding:0px" class="col-lg-6 intro-info order-lg-first order-last" data-aos="zoom-in" data-aos-delay="100">
          <h2 >Azwaajun Muthohharoh<br>
            <span style="font-size:20px;color:tomato">A Dedicated Site</span>, <span style="font-size:20px">Nikkha for muslim </span><br>
        </h2>
        </div>

        <div class="col-lg-6  order-lg-last order-first" data-aos="zoom-out" data-aos-delay="200">
                <section style="height:320px;border-radius:10px;padding-top:20px" id="services" class="services section-bg">
                  <div class="container"  data-aos="fade-up">
                    <div class="row" style="height:400px">
                      <div class="col-md-6 col-lg-4 wow bounceInUp" style="width:550px;" data-aos="zoom-in" data-aos-delay="100">
                        <div class="box" style="height:280px;">
                          <div class="icon" style="background: #fceef3;"><i class="bi bi-search" style="color: #ff689b;"></i></div>
                            <div style="display:flex">
                              <div style="text-align:left; padding-right: 25px">
                                <label>Bio-data Number:</label><br>
                                <label>Groom/Bride:</label><br>
                                <label>Location:</label><br>
                                <label>Profession:</label>
                              </div>
                              <div>
                                <input type="number" name="cars" id="cars" style="border:1px solid orange;border-radius:5px;width:200px;margin-bottom:4px;margin-top:4px" placeholder="Biodata number"/>
                                      
                                   <br>
                                    <select name="cars" id="cars" style="border:1px solid orange;border-radius:5px;width:200px;margin-bottom:4px">
                                      <option value="volvo" style="border-radius:5px"></option>
                                      <option value="saab">Saab</option>
                                      <option value="mercedes">Mercedes</option>
                                      <option value="audi">Audi</option>
                                    </select><br>
                                    <select name="cars" id="cars" style="border:1px solid orange;border-radius:5px;width:200px;margin-bottom:4px">
                                      <option value="volvo"></option>
                                      <option value="saab">Saab</option>
                                      <option value="mercedes">Mercedes</option>
                                      <option value="audi">Audi</option>
                                    </select><br>
                                    <select name="cars" id="cars" style="border:1px solid orange;border-radius:5px;width:200px;margin-bottom:10px;">
                                      <option value="volvo"></option>
                                      <option value="saab">Saab</option>
                                      <option value="mercedes">Mercedes</option>
                                      <option value="audi">Audi</option>
                                    </select>
                                    <button type="submit" value="Submit" style="border:1px solid orange;border:0px solid; background-color: skyblue; border-radius:5px;width:100px;">Submit</button>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </section>
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
          <h3>Over View in Current time</h3>
       
        </header>
      </div>

      <div class="container" id="counter-bar">
        <div class="row counters" data-aos="fade-up" data-aos-delay="100">

          <div class="col-lg-3 col-6 text-center text-center-counter" >
            <div style="padding-top:50px">
              <span data-purecounter-start="0" data-purecounter-end="232" data-purecounter-duration="1" class="purecounter"></span>
              <p>Clients</p>
            </div>
          </div>

          <div class="col-lg-3 col-6 text-center text-center-counter">
          <div style="padding-top:50px">
            <span data-purecounter-start="0" data-purecounter-end="421" data-purecounter-duration="1" class="purecounter"></span>
            <p>Projects</p>
            </div>
          </div>

          <div class="col-lg-3 col-6 text-center text-center-counter">
          <div style="padding-top:50px">
            <span data-purecounter-start="0" data-purecounter-end="1453" data-purecounter-duration="1" class="purecounter"></span>
            <p>Hours Of Support</p>
            </div>
          </div>

          <div class="col-lg-3 col-6 text-center text-center-counter">
          <div style="padding-top:50px">
            <span data-purecounter-start="0" data-purecounter-end="48" data-purecounter-duration="1" class="purecounter"></span>
            <p>Hard Workers</p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Why Us Section -->

   

    <!-- ======= Features Section ======= -->
    <section id="features" class="features">
      <div class="container" data-aos="fade-up">

        <div class="row feature-item">
          <div class="col-lg-6" data-aos="fade-right" data-aos-delay="100">
            <!-- <img src="assets/img/features-1.svg" class="img-fluid" alt=""> -->
          </div>
          <div class="col-lg-6 wow fadeInUp pt-5 pt-lg-0" data-aos="fade-left" data-aos-delay="150">
            <h4>Voluptatem dignissimos provident quasi corporis voluptates sit assumenda.</h4>
            <p>
              Ipsum in aspernatur ut possimus sint. Quia omnis est occaecati possimus ea. Quas molestiae perspiciatis occaecati qui rerum. Deleniti quod porro sed quisquam saepe. Numquam mollitia recusandae non ad at et a.
            </p>
            <p>
              Ad vitae recusandae odit possimus. Quaerat cum ipsum corrupti. Odit qui asperiores ea corporis deserunt veritatis quidem expedita perferendis. Qui rerum eligendi ex doloribus quia sit. Porro rerum eum eum.
            </p>
          </div>
        </div>

        <div class="row feature-item mt-5 pt-5">
          <div class="col-lg-6 wow fadeInUp order-1 order-lg-2" data-aos="fade-left" data-aos-delay="100">
            <img src="assets/img/features-2.svg" class="img-fluid" alt="">
          </div>

          <div class="col-lg-6 wow fadeInUp pt-4 pt-lg-0 order-2 order-lg-1" data-aos="fade-right" data-aos-delay="150">
            <h4>Neque saepe temporibus repellat ea ipsum et. Id vel et quia tempora facere reprehenderit.</h4>
            <p>
              Delectus alias ut incidunt delectus nam placeat in consequatur. Sed cupiditate quia ea quis. Voluptas nemo qui aut distinctio. Cumque fugit earum est quam officiis numquam. Ducimus corporis autem at blanditiis beatae incidunt sunt.
            </p>
            <p>
              Voluptas saepe natus quidem blanditiis. Non sunt impedit voluptas mollitia beatae. Qui esse molestias. Laudantium libero nisi vitae debitis. Dolorem cupiditate est perferendis iusto.
            </p>
            <p>
              Eum quia in. Magni quas ipsum a. Quis ex voluptatem inventore sint quia modi. Numquam est aut fuga mollitia exercitationem nam accusantium provident quia.
            </p>
          </div>

        </div>

      </div>
    </section><!-- End Features Section -->

   

   

    

   

   

    <!-- ======= F.A.Q Section ======= -->
    <section id="faq" class="faq">
      <div class="container" data-aos="fade-up">
        <header class="section-header">
          <h3>Frequently Asked Questions</h3>
          <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque</p>
        </header>

        <ul class="faq-list" data-aso="fade-up" data-aos-delay="100">

          <li>
            <div data-bs-toggle="collapse" class="collapsed question" href="#faq1">Non consectetur a erat nam at lectus urna duis? <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
            <div id="faq1" class="collapse" data-bs-parent=".faq-list">
              <p>
                Feugiat pretium nibh ipsum consequat. Tempus iaculis urna id volutpat lacus laoreet non curabitur gravida. Venenatis lectus magna fringilla urna porttitor rhoncus dolor purus non.
              </p>
            </div>
          </li>

          <li>
            <div data-bs-toggle="collapse" href="#faq2" class="collapsed question">Feugiat scelerisque varius morbi enim nunc faucibus a pellentesque? <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
            <div id="faq2" class="collapse" data-bs-parent=".faq-list">
              <p>
                Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper dignissim. Mauris ultrices eros in cursus turpis massa tincidunt dui.
              </p>
            </div>
          </li>

          <li>
            <div data-bs-toggle="collapse" href="#faq3" class="collapsed question">Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi? <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
            <div id="faq3" class="collapse" data-bs-parent=".faq-list">
              <p>
                Eleifend mi in nulla posuere sollicitudin aliquam ultrices sagittis orci. Faucibus pulvinar elementum integer enim. Sem nulla pharetra diam sit amet nisl suscipit. Rutrum tellus pellentesque eu tincidunt. Lectus urna duis convallis convallis tellus. Urna molestie at elementum eu facilisis sed odio morbi quis
              </p>
            </div>
          </li>

          <li>
            <div data-bs-toggle="collapse" href="#faq4" class="collapsed question">Ac odio tempor orci dapibus. Aliquam eleifend mi in nulla? <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
            <div id="faq4" class="collapse" data-bs-parent=".faq-list">
              <p>
                Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper dignissim. Mauris ultrices eros in cursus turpis massa tincidunt dui.
              </p>
            </div>
          </li>

          <li>
            <div data-bs-toggle="collapse" href="#faq5" class="collapsed question">Tempus quam pellentesque nec nam aliquam sem et tortor consequat? <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
            <div id="faq5" class="collapse" data-bs-parent=".faq-list">
              <p>
                Molestie a iaculis at erat pellentesque adipiscing commodo. Dignissim suspendisse in est ante in. Nunc vel risus commodo viverra maecenas accumsan. Sit amet nisl suscipit adipiscing bibendum est. Purus gravida quis blandit turpis cursus in
              </p>
            </div>
          </li>

          <li>
            <div data-bs-toggle="collapse" href="#faq6" class="collapsed question">Tortor vitae purus faucibus ornare. Varius vel pharetra vel turpis nunc eget lorem dolor? <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
            <div id="faq6" class="collapse" data-bs-parent=".faq-list">
              <p>
                Laoreet sit amet cursus sit amet dictum sit amet justo. Mauris vitae ultricies leo integer malesuada nunc vel. Tincidunt eget nullam non nisi est sit amet. Turpis nunc eget lorem dolor sed. Ut venenatis tellus in metus vulputate eu scelerisque. Pellentesque diam volutpat commodo sed egestas egestas fringilla phasellus faucibus. Nibh tellus molestie nunc non blandit massa enim nec.
              </p>
            </div>
          </li>

        </ul>

      </div>
    </section><!-- End F.A.Q Section -->

  </main><!-- End #main -->

  <footer id="footer" class="section-bg" style="padding-bottom:0px;margin-bottom:0px">
    <div class="footer-top">
      <div class="container">

        <div class="row">

          <div class="col-lg-6">

            <div class="row">

              <div class="col-sm-8">

                <div class="footer-info" >
                  <div style="display:flex">
                    <img style="margin-right:10px;margin-top:2px;width:60px; height:60px;border-radius:50%" src="{{asset('assets/img/azwaajumMuthohharoa.jpg')}}" alt="" />
                    <h3 style="color:tomato;font-size:30px">Azwaajun Muthohharoh</h3>
                  </div>
                  <p style=" text-align: justify;">Cras fermentum odio eu feugiat lide par naso tierra. Justo eget nada terra videa magna derita valies darta donna mare fermentum iaculis eu non diam phasellus. Scelerisque felis imperdiet proin fermentum leo. Amet volutpat consequat mauris nunc congue.</p>
                </div>

               

              </div>

              <div style="padding-left:5px;padding-right:0px" class="col-sm-4">
                <div  class="footer-links" style="margin-bottom:7px">
                  <h4 style="margin-bottom:2px;" >Useful Links</h4>
                  <ul>
                    <li style="padding-bottom:1px;padding-top:1px"><a href="#">Home</a></li>
                    <li style="padding-bottom:1px;padding-top:1px"><a href="#">About us</a></li>
                    <li style="padding-bottom:1px;padding-top:1px"><a href="#">Services</a></li>
                  </ul>
                </div>

                <div class="footer-links">
                  <h4 style="margin-bottom:2px;">Contact Us</h4>
                  <p >
                    রাহাত্তার পুল, <br>
                    চকবাজার,<br>
                    চট্টগ্রাম। <br>
                    <strong>Phone:</strong> +880 187 52340 41<br>
                    <strong>Email:</strong> minhaz@gmail.com<br>
                  </p>
                </div>

                <div class="social-links">
                  <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
                  <a href="https://www.facebook.com/Azwaajum-Muthohharoh-%E0%A6%AA%E0%A6%AC%E0%A6%BF%E0%A6%A4%E0%A7%8D%E0%A6%B0-%E0%A6%B8%E0%A6%99%E0%A7%8D%E0%A6%97%E0%A7%80-890949244274398" class="facebook"><i class="bi bi-facebook"></i></a>
                  <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
                  <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
                </div>

              </div>

            </div>

          </div>

          <div class="col-lg-6">
            <div class="form">
              <h4>Send us a message</h4>

              <form action="/message" method="post">
                    {{ csrf_field() }}
                    <div class="form-group">
                      <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                    </div>
                    <div class="form-group mt-3">
                      <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                    </div>
                    <div class="form-group mt-3">
                      <textarea style="height:110px" class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
                    </div>
                    <div style="float:right;margin-top:10px;" class="text-center">
                      <input style="width:200px;height:30px;border-radius:5px;border:0px solid;background-color:skyblue" type="submit" title="Send Message" value="Submit">
                    </div>
              </form>

              <!-- <form  method="POST" action="/message" role="form" class="php-email-form">
              {{ csrf_field() }}
                <div class="form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                </div>
                <div class="form-group mt-3">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                </div>
                <div class="form-group mt-3">
                  <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
                </div>
                <div class="my-3">
                  <div class="loading">Loading</div>
                  <div class="error-message"></div>
                  <div class="sent-message">Your message has been sent. Thank you!</div>
                </div>
                <div style="float:right" class="text-center"><button style="width:200px" type="submit" name="submit" title="Send Message" class="submit action-button">Send Message</button></div>
              </form> -->
            </div>

          </div>

        </div>

      </div>
    </div>

    <div style="padding:0px;margin:0px;height:100px;background-color:rgb(248, 240, 227)">
      <div class="copyright">
        &copy; Copyright <strong>Azwaajun Muthohharoh</strong>. All Rights Reserved, 2022.
      </div>
      <div class="credits">
       
      
      </div>
    </div>
  </footer><!-- End  Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>



  <script>
        $(document).ready(function () {
  
            $('ul.navbar-ul > li')
                    .click(function (e) {
                $('ul.navbar-ul > li')
                    .removeClass('active');
                $(this).addClass('active');
            });
        });

        $(".submit").click(function(){
        // return false;
        alert('clicked')
      })
    </script>



  <!-- Vendor JS Files -->
  <script src="{{asset('assets/vendor/purecounter/purecounter.js')}}"></script>
  <script src="{{asset('assets/vendor/aos/aos.js')}}"></script>
  <script src="{{asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('assets/vendor/glightbox/js/glightbox.min.js')}}"></script>
  <script src="{{asset('assets/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
  <script src="{{asset('assets/vendor/swiper/swiper-bundle.min.js')}}"></script>
  <script src="{{asset('assets/vendor/php-email-form/validate.js')}}"></script>


  <!-- external -->

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js">
    </script>
    <script src="https://npmcdn.com/tether@1.2.4/dist/js/tether.min.js">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha.6/js/bootstrap.min.js">
    </script>
  <!-- external -->

  <!-- Template Main JS File -->
  <script src="{{asset('assets/js/main.js')}}"></script>

</body>

</html>
