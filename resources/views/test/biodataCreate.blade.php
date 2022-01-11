<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
    <link rel="stylesheet" href="{{asset('/frontend/manual/biodata.css')}}" />
    <link href="{{asset('frontend/img/favicon.png')}}" rel="icon">
    <link href="{{asset('frontend/img/apple-touch-icon.png')}}" rel="apple-touch-icon">


    <link href="{{asset('frontend/vendor/aos/aos.css')}}" rel="stylesheet">
    <link href="{{asset('frontend/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('frontend/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
    <link href="{{asset('frontend/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
    <link href="{{asset('frontend/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{asset('frontend/css/style.css')}}" rel="stylesheet">
    <title>Document</title>
</head>
<body>

  <header id="header" class="fixed-top d-flex align-items-center header-transparent">
     <div class="container d-flex align-items-center">

       <h1 class="logo me-auto"><a href="index.html">Rapid</a></h1>
       <!-- Uncomment below if you prefer to use an image logo -->
       <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

       <nav id="navbar" class="navbar order-last order-lg-0">
         <ul>
           <li><a class="nav-link scrollto active" href="{{URL::to('/')}}">Home</a></li>
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



    <form id="msform">
        <!-- progressbar -->
        <ul id="progressbar">
          <li class="active">সাধারণ তথ্য</li>
          <li>শিক্ষাগত তথ্য</li>
          <li>পারিবারিক তথ্য</li>
          <li>ব্যক্তিগত তথ্য</li>
          <li>বিয়ে সংক্রান্ত তথ্য</li>
          <li>পেশাগত তথ্য</li>
          <li>যেমন জীবনসঙ্গী আশা করেন</li>
          <li>কর্তৃপক্ষের জিজ্ঞাসা ও যোগাযোগ</li>
        </ul>
        <!-- fieldsets -->
        <fieldset>
          <h2 class="fs-title">Who are you buying for?</h2>
          <h3 class="fs-subtitle">Step 1</h3>
          <input type="text" name="pickup_date" placeholder="Pickup Date" />
          <input type="button" name="next" class="next action-button" value="Next" />
        </fieldset>
        <fieldset>
          <h2 class="fs-title">Choose keg details</h2>
          <h3 class="fs-subtitle">Step 2</h3>
          <select name="keg_type" placeholder="Pickup Date">
            <option value="" disabled selected style="display: none;">Choose Your Beer</option>
            <option value="Budweiser">Budweiser</option>
            <option value="Blue Moon">Blue Moon</option>
          </select>
          <select name="keg_size">
            <option value="" disabled selected style="display: none;">Choose Keg Size</option>
            <option value="1/2">1/2</option>
            <option value="1/6">1/6</option>
          </select>
          <input type="button" name="previous" class="previous action-button" value="Previous" />
          <input type="button" name="next" class="next action-button" value="Next" />
        </fieldset>
        <fieldset>
          <h2 class="fs-title">Personal Details</h2>
          <h3 class="fs-subtitle">Last Step</h3>
          <input type="text" name="fname" placeholder="First Name" />
          <input type="text" name="lname" placeholder="Last Name" />
          <input type="text" name="phone" placeholder="Phone" />
          <input type="text" name="email" placeholder="E-mail" />
          <!--<textarea name="address" placeholder="Address"></textarea>-->
          <input type="button" name="previous" class="previous action-button" value="Previous" />
          <input type="button" name="next" class="next action-button" value="Next" />
        </fieldset>
        <fieldset>
          <h2 class="fs-title">Choose keg details</h2>
          <h3 class="fs-subtitle">Step 2</h3>
          <select name="keg_type" placeholder="Pickup Date">
            <option value="" disabled selected style="display: none;">Choose Your Beer</option>
            <option value="Budweiser">Budweiser</option>
            <option value="Blue Moon">Blue Moon</option>
          </select>
          <select name="keg_size">
            <option value="" disabled selected style="display: none;">Choose Keg Size</option>
            <option value="1/2">1/2</option>
            <option value="1/6">1/6</option>
          </select>
          <select name="keg_size_1">
            <option value="" disabled selected style="display: none;">Choose Keg Size</option>
            <option value="1/2">1/2</option>
            <option value="1/6">1/6</option>
          </select>
          <input type="button" name="previous" class="previous action-button" value="Previous" />
          <input type="button" name="next" class="next action-button" value="Next" />
        </fieldset>
        <fieldset>
          <h2 class="fs-title">Personal Details</h2>
          <h3 class="fs-subtitle">Last Step</h3>
          <input type="text" name="fname" placeholder="First Name" />
          <input type="text" name="lname" placeholder="Last Name" />
          <input type="text" name="phone" placeholder="Phone" />
          <input type="text" name="email" placeholder="E-mail" />
          <!--<textarea name="address" placeholder="Address"></textarea>-->
          <input type="button" name="previous" class="previous action-button" value="Previous" />
          <input type="button" name="next" class="next action-button" value="Next" />
        </fieldset>
        <fieldset>
          <h2 class="fs-title">Personal Details</h2>
          <h3 class="fs-subtitle">Last Step</h3>
          <input type="text" name="fname" placeholder="First Name" />
          <input type="text" name="lname" placeholder="Last Name" />
          <input type="text" name="phone" placeholder="Phone" />
          <input type="text" name="email" placeholder="E-mail" />
          <!--<textarea name="address" placeholder="Address"></textarea>-->
          <input type="button" name="previous" class="previous action-button" value="Previous" />
          <input type="button" name="next" class="next action-button" value="Next" />
        </fieldset>
        <fieldset>
          <h2 class="fs-title">Personal Details</h2>
          <h3 class="fs-subtitle">Last Step</h3>
          <input type="text" name="fname" placeholder="First Name" />
          <input type="text" name="lname" placeholder="Last Name" />
          <input type="text" name="phone" placeholder="Phone" />
          <input type="text" name="email" placeholder="E-mail" />
          <!--<textarea name="address" placeholder="Address"></textarea>-->
          <input type="button" name="previous" class="previous action-button" value="Previous" />
          <input type="button" name="next" class="next action-button" value="Next" />
        </fieldset>
        <fieldset>
          <h2 class="fs-title">Personal Details</h2>
          <h3 class="fs-subtitle">Last Step</h3>
          <input type="text" name="fname" placeholder="First Name" />
          <input type="text" name="lname" placeholder="Last Name" />
          <input type="text" name="phone" placeholder="Phone" />
          <input type="text" name="email" placeholder="E-mail" />
          <!--<textarea name="address" placeholder="Address"></textarea>-->
          <input type="button" name="previous" class="previous action-button" value="Previous" />
          <input type="submit" name="submit" class="submit action-button" value="Submit" id="form-submit" />
        </fieldset>
      </form>

      <!-- jQuery -->
      <script src="http://thecodeplayer.com/uploads/js/jquery-1.9.1.min.js" type="text/javascript"></script>
      <!-- jQuery easing plugin -->
      <script src="http://thecodeplayer.com/uploads/js/jquery.easing.min.js" type="text/javascript"></script>
</body>

    <script>
        /*
Orginal Page: http://thecodeplayer.com/walkthrough/jquery-multi-step-form-with-progress-bar

*/
//jQuery time
var current_fs, next_fs, previous_fs; //fieldsets
var left, opacity, scale; //fieldset properties which we will animate
var animating; //flag to prevent quick multi-click glitches

$(".next").click(function(){
  if(animating) return false;
  animating = true;

  current_fs = $(this).parent();
  next_fs = $(this).parent().next();

  //activate next step on progressbar using the index of next_fs
  $("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");

  //show the next fieldset
  next_fs.show();
  //hide the current fieldset with style
  current_fs.animate({opacity: 0}, {
    step: function(now, mx) {
      //as the opacity of current_fs reduces to 0 - stored in "now"
      //1. scale current_fs down to 80%
      scale = 1 - (1 - now) * 0.2;
      //2. bring next_fs from the right(50%)
      left = (now * 50)+"%";
      //3. increase opacity of next_fs to 1 as it moves in
      opacity = 1 - now;
      current_fs.css({'transform': 'scale('+scale+')'});
      next_fs.css({'left': left, 'opacity': opacity});
    },
    duration: 800,
    complete: function(){
      current_fs.hide();
      animating = false;
    },
    //this comes from the custom easing plugin
    easing: 'easeInOutBack'
  });
});

$(".previous").click(function(){
  if(animating) return false;
  animating = true;

  current_fs = $(this).parent();
  previous_fs = $(this).parent().prev();

  //de-activate current step on progressbar
  $("#progressbar li").eq($("fieldset").index(current_fs)).removeClass("active");

  //show the previous fieldset
  previous_fs.show();
  //hide the current fieldset with style
  current_fs.animate({opacity: 0}, {
    step: function(now, mx) {
      //as the opacity of current_fs reduces to 0 - stored in "now"
      //1. scale previous_fs from 80% to 100%
      scale = 0.8 + (1 - now) * 0.2;
      //2. take current_fs to the right(50%) - from 0%
      left = ((1-now) * 50)+"%";
      //3. increase opacity of previous_fs to 1 as it moves in
      opacity = 1 - now;
      current_fs.css({'left': left});
      previous_fs.css({'transform': 'scale('+scale+')', 'opacity': opacity});
    },
    duration: 800,
    complete: function(){
      current_fs.hide();
      animating = false;
    },
    //this comes from the custom easing plugin
    easing: 'easeInOutBack'
  });
});

$(".submit").click(function(){
  return false;
})
    </script>
</html>
