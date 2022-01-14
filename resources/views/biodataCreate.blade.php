<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Rapid Bootstrap Template - Index</title>
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
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
  <!-- Template Main CSS File -->
  <link href="{{asset('assets/css/style.css')}}" rel="stylesheet">

  <link href="{{asset('assets/manual/biodata.css')}}" rel="stylesheet" >
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
        .form-flex{
          display:flex;
          flex-direction:row;
          height:30px;!important
        }
        #main{
          margin-top:-5px;
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
        /* number field with textfield */
  </style>
</head>
<body style="margin:0px;padding:0px">
  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center header-transparent" >
    <div class="container d-flex align-items-center">
    <h1 class="logo me-auto"><a href="/">Azwaajun Muthohharoh</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul class="navbar-ul">
          <li class="nav-item"><a class="nav-link scrollto" href="/">Home</a></li>
          <li class="nav-item"><a class="nav-link scrollto" href="goal">Goal</a></li>
          <li class="nav-item"><a class="nav-link scrollto" href="term-condition">Terms&Condition</a></li>
          <li class="nav-item active"><a class="nav-link scrollto" href="bio-dataCreate">Bio-Data</a></li>
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
        <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
        <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
        <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
      </div>
    </div>
  </header><!-- End Header -->


  <main id="main">
    <!-- ======= Features Section ======= -->
    <section id="features biodata-container" class="features" >
      <div class="container " data-aos="fade-up" >
        <div class="row feature-item" >

          <form id="msform" method="POST" action="/biodatainsert" class="msform-general" style="height:600px">
          {{ csrf_field() }}
       <!-- progressbar -->
            <div class="stickyprogress" style="margin-top:110px">
              <ul id="progressbar">
                <li class="active">সাধারণ তথ্য</li>
                <li>শিক্ষাগত তথ্য</li>
                <li>পারিবারিক তথ্য</li>
                <li>ব্যক্তিগত তথ্য</li>
                <li>বিয়ে সংক্রান্ত তথ্য</li>
                <li>পেশাগত তথ্য</li>
                <li>যেমন জীবনসঙ্গী আশা করেন</li>
              </ul>
            </div>
             <!-- fieldsets -->
             <fieldset class="gerenal-fieldset" style="height:440px;margin-top:-10px;">
               <h2 class="fs-title">সাধারণ তথ্য</h2>
               <h3 class="fs-subtitle">আপনার সাধারণ তথ্যাবলী</h3>
                 <div style="overflow:scroll;height:300px;overflow-x: hidden" class="form-flex">
                    <div>
                        <label class="form-label">বায়োডাটার ধরণ:</label>
                        <label class="form-label">বৈবাহিক অবস্থা:</label>
                        <label class="form-label">স্থায়ী ঠিকানা(জেলা):</label>
                        <label class="form-label">স্থায়ী ঠিকানা(উপজেলা):</label>
                        <label class="form-label">স্থায়ী ঠিকানা(রাস্তা ও বাড়ি):</label>
                        <label class="form-label">বর্তমান ঠিকানা(জেলা):</label>
                        <label class="form-label">বর্তমান ঠিকানা(উপজেলা):</label>
                        <label class="form-label">বর্তমান ঠিকানা(রাস্তা ও বাড়ি):</label>
                        <label class="form-label">জাতীয়তা:</label>
                        <label class="form-label">জন্ম তারিখ:</label>
                        <label class="form-label">গাত্রবর্ণ:</label>
                        <label class="form-label">উচ্চতা:</label>
                        
                        <label class="form-label">ওজন:</label>
                        <label class="form-label">রক্তের গ্রুপ:</label>
                        <label class="form-label">পেশার ধরণ:</label>
                        <label class="form-label">পেশা:</label>
                    </div>

                    <div>
                        <select class="form-input" name="bioType" >
                          <option value="" ></option>
                          <option value="পাত্রী">পাত্রী</option>
                          <option value="পাত্র">পাত্র</option>
                        </select>
                        <select class="form-input" name="maritalType">
                          <option value=""></option>
                          <option value="বিবাহিত">বিবাহিত</option>
                          <option value="অবিবাহিত">অবিবাহিত</option>
                          <option value="বিপত্নিক">বিপত্নিক</option>
                          <option value="বিধবা">বিধবা</option>
                        </select>
                        <select class="form-input" name="PadrDist">
                          <option value="" ></option>
                          <option value="চট্টগ্রাম">চট্টগ্রাম</option>
                          <option value="ঢাকা">ঢাকা</option>
                          <option value="খুলনা">খুলনা</option>
                          <option value="বরিশাল">বরিশাল</option>
                          <option value="সিলেট">সিলেট</option>
                          <option value="ময়মনসিংহ">ময়মনসিংহ</option>
                        </select>
                        <select class="form-input" name="PaddUpoz" >
                          <option value="" ></option>
                          <option value="বোয়ালখালী">বোয়ালখালী</option>
                          <option value="সাতকানিয়া">সাতকানিয়া</option>
                          <option value="বাঁশকালী">বাঁশকালী</option>
                          <option value="পটিয়া">পটিয়া</option>
                        </select>
                        <input class="form-input" type="text" name="Padd" placeholder="স্থায়ী ঠিকানা লিখুন(বাড়ি বা রাস্তা)" />
                        <select class="form-input" name="PreAddDis">
                          <option value="" ></option>
                            <option value="চট্টগ্রাম">চট্টগ্রাম</option>
                            <option value="ঢাকা">ঢাকা</option>
                            <option value="খুলনা">খুলনা</option>
                            <option value="বরিশাল">বরিশাল</option>
                            <option value="সিলেট">সিলেট</option>
                            <option value="ময়মনসিংহ">ময়মনসিংহ</option>
                        </select>
                        <select class="form-input" name="PreAddUpoz" placeholder="উপজেলা">
                          <option value="" ></option>
                          <option value="বোয়ালখালী">বোয়ালখালী</option>
                          <option value="সাতকানিয়া">সাতকানিয়া</option>
                          <option value="বাঁশকালী">বাঁশকালী</option>
                          <option value="পটিয়া">পটিয়া</option>
                        </select>
                        <input class="form-input" type="text" name="PreAdd" placeholder="বর্তমান ঠিকানা লিখুন(বাড়ি বা রাস্তা)" />
                        <input class="form-input" type="text" name="nationality" placeholder="জাতীয়তা লিখুন" />
                        <input class="form-input" type="date" name="bDate" placeholder="জন্ম তারিখ দেন" />
                        <select class="form-input" name="color" >
                          <option value="" ></option>
                          <option value="ফর্সা">ফর্সা</option>
                          <option value="শ্যামলা">শ্যামলা</option>
                          <option value="উজ্জ্বল শ্যামলা">উজ্জ্বল শ্যামলা</option>
                          <option value="কালো">কালো</option>
                        </select>
                        <select class="form-input" name="height" >
                          <option value="" ></option>
                          <option value="৪.১০+">৪'১০"+</option>
                          <option value="৪.৫০">৪'৫"</option>
                          <option value="৪.৫০+">৪'৫"+</option>
                          <option value="৫.০০">৫'০০"</option>
                          <option value="৫.০০+">৫'০০"+</option>
                          <option value="৫.৫০">৫'৫০"</option>
                          <option value="৫.৫০+">৫'৫০"+</option>
                          <option value="৫.৯০">৫'৯০"</option>
                        </select>
                        <input class="form-input" type="text" name="weight" placeholder="নিজের ওজন লিখুন" />
                        <select class="form-input" name="bGroup" >
                          <option value="" ></option>
                          <option value="B+">B+</option>
                          <option value="A+">A+</option>
                          <option value="B-">B-</option>
                          <option value="A-">A-</option>
                          <option value="O+">O+</option>
                          <option value="O-">O-</option>
                          <option value="AB-">AB-</option>
                          <option value="AB+">AB+</option>
                        </select>
                        <input class="form-input" type="text" name="profession" placeholder="পেশা লিখুন, যেমনঃ সাংবাদিক বা ছাত্র/ছাত্রী" />
                        <textarea class="form-input" type="textare" name="professDet" placeholder="পেশার বর্ণনা সংক্ষেপে"></textarea>
                       
                    </div>
                 </div>
                 <input id="form-button" type="button" name="next" class="next action-button" value="Next" />
             </fieldset>
             <fieldset class="education-fieldset" style="height:440px;margin-top:-10px;">
               <h2 class="fs-title">শিক্ষাগত তথ্য</h2>
               <h3 class="fs-subtitle">আপনার শিক্ষাগত যোগ্যতা সমূহ লিখুন</h3>
               <div class="form-flex" style="overflow:scroll;height:300px;overflow-x: hidden">
                    <div>
                        <label class="form-label">কোন মাধ্যমে পড়াশোনা করেছেন?:</label>
                        <label class="form-label">শিক্ষা বোর্ড:</label>
                        <label class="form-label">মাধ্যমিক (SSC) / সমমান পাশ করেছেন?:</label>
                        <label class="form-label">মাধ্যমিক (SSC) / সমমান বিভাগ:</label>
                        <label class="form-label">মাধ্যমিক (SSC) / সমমান পাশের সন:</label>
                        <label class="form-label">উচ্চ মাধ্যমিক (HSC) / সমমান পাশ করেছেন?:</label>
                        <label class="form-label">উচ্চ মাধ্যমিক (HSC) / সমমান বিভাগ:</label>
                        <label class="form-label">উচ্চ মাধ্যমিক (HSC) / সমমান পাশের সন:</label>
                        <label class="form-label">স্নাতক/ স্নাতক (সম্মান)/ সমমান শিক্ষাগত যোগ্যতাঃ</label>
                        <label class="form-label">শিক্ষা প্রতিষ্ঠানের নাম:</label>
                        <label class="form-label">স্নাতক/ স্নাতক (সম্মান) / সমমান পাশের সন:</label>
                        <label class="form-label">অন্যান্য শিক্ষাগত যোগ্যতা:</label>
                    </div>
                    <div>
                        <select class="form-input" name="eduType" >
                          <option value="" ></option>
                          <option value="সাধারণ">সাধারণ</option>
                          <option value="মাদ্রাসা">মাদ্রাসা</option>
                          <option value="কারিগরী">কারিগরী</option>
                        </select>
                        <input class="form-input" type="text" name="Eboard" placeholder="শিক্ষা বোর্ড" />
                        <input class="form-input" type="text" name="Spass" placeholder="মাধ্যমিক বা সমমান পাশ" />
                        <select class="form-input" name="Sdep" >
                          <option value="" ></option>
                          <option value="বিজ্ঞান">বিজ্ঞান</option>
                          <option value="ব্যবসায় শিক্ষা">ব্যবসায় শিক্ষা</option>
                          <option value="মানবিক">মানবিক</option>
                        </select>
                        <input class="form-input" type="number" name="Spassyear" placeholder="মাধ্যমিক বা সমমান পাশের সন" />
                        <input class="form-input" type="text" name="Hpass"  placeholder="উচ্চ মাধ্যমিক বা সমমান পাশ" />
                        <select class="form-input" name="Hdep" >
                          <option value="" ></option>
                          <option value="বিজ্ঞান">বিজ্ঞান</option>
                          <option value="ব্যবসায় শিক্ষা">ব্যবসায় শিক্ষা</option>
                          <option value="মানবিক">মানবিক</option>
                        </select>
                        <input class="form-input" type="number" name="Hpassyear" placeholder="উচ্চ মাধ্যমিক বা সমমান পাশের সন" />
                        <input class="form-input" type="text" name="HDegree" placeholder="স্নাতক বা সমমান, স্নাতকোত্তর বা সমমান" />
                        <input class="form-input" type="text" name="HDegreeInst" placeholder="উচ্চ শিক্ষা প্রতিষ্ঠানের নাম" />
                        <input class="form-input" type="number" name="HDegreePssYear" placeholder="স্নাতক বা সমমান শিক্ষা পাশের সন" />
                        <textarea class="form-input" type="text" name="OthersEdu" placeholder="অন্যান্য শিক্ষাগত যোগ্যতা যদি থাকে"></textarea>
                    </div>
                 </div>
                  
                  <input id="form-button-41" type="button" name="previous" class="previous action-button" value="Previous" />
                  <input id="form-button-4" type="button" name="next" class="next action-button" value="Next" />
                 
             </fieldset>
             <fieldset class="family-fieldset" style="height:440px;margin-top:-10px;">
               <h2 class="fs-title">পারিবারিক তথ্য</h2>
               <h3 class="fs-subtitle">আপনার ফেমিলি ডিটেইলস লিখুন</h3>
               <div class="form-flex" style="overflow:scroll;height:300px;overflow-x: hidden">
                    <div>
                        <label class="form-label">পিতার নাম:</label>
                        <label class="form-label">মাতার নাম:</label>
                        <label class="form-label">পিতার পেশা:</label>
                        <label class="form-label">মাতার পেশা:</label>
                        <label class="form-label">ভাই কয়জন?:</label>
                        <label class="form-label">বোন কয়জন?:</label>
                        <label class="form-label">চাচা/মামাদের সম্পর্কে বলুন?:</label>
                        <label class="form-label">পরিবারের অর্থনৈতিক ও সামাজিক অবস্থান:</label>
                       
                    </div>
                    <div>
                        <input class="form-input" type="text" name="fName" placeholder="পিতার নাম" />
                        <input class="form-input" type="text" name="mName" placeholder="মাতার নাম" />
                        <input class="form-input" type="text" name="fProfession" placeholder="পিতার পেশা" />
                        <input class="form-input" type="text" name="mProfession" placeholder="মাতার পেশা" />
                        <input class="form-input" type="text" name="brother" placeholder="ভাই সম্পর্কে লিখুন" />
                        <input class="form-input" type="text" name="sister" placeholder="বোন সম্পর্কে লিখুন" />
                        <input class="form-input" type="text" name="uncle" placeholder="চাচা বা মামাদের সম্পর্কে লিখুন" />
                        <input class="form-input" type="text" name="Estatus" placeholder="নিজের অর্থনৈতিক ও সামাজিক অবস্থান লিখুন" />
                    
                    </div>
                 </div>
               <!--<textarea name="address" placeholder="Address"></textarea>-->
               <input id="form-button-51" type="button" name="previous" class="previous action-button" value="Previous" />
               <input id="form-button-5" type="button" name="next" class="next action-button" value="Next" />
             </fieldset>
             <fieldset class="personalinfo-fieldset" style="height:440px;margin-top:-10px;">
               <h2 class="fs-title">ব্যক্তিগত তথ্য</h2>
               <h3 class="fs-subtitle">আপনার ব্যক্তিগত তথ্য প্রদান করুন এখানে।</h3>
               <div class="form-flex" style="overflow:scroll;height:300px;overflow-x: hidden">
                    <div>
                        <label class="form-label">আপনি কী দাঁড়ি রাখছেন?:</label>
                        <label class="form-label">টাকনুর উপর কাপড় পড়েন কি?:</label>
                        <label class="form-label">পাঁচ ওয়াক্ত সালাত প্রতিদিন পড়েন?:</label>
                        <label class="form-label">জীবনের কখন থেকে সালাত পাঁচ ওয়াক্ত পড়ছেন? :</label>
                        <label class="form-label">মাহরাম/নন-মাহরাম মেনে চলেন?:</label>
                        <label class="form-label">শুদ্ধ উপায়ে কুরআন পড়তে পাড়েন?:</label>
                        <label class="form-label">কোন মাযহাব মেনে চলেন?:</label>
                        <label class="form-label">নাটক / সিনেমা/ সিরিয়াল সমূহ দেখেন কিনা?:</label>
                        <label class="form-label">আপনার পছন্দের দুইটি ইসলামিক বই বলেন</label>
                        <label class="form-label">আপনার অনুসরণকৃত দুইজন আলেমের নাম:</label>
                        <label class="form-label">মাজার বা পীর সম্পর্কে আপনার ধারণা:</label>
                        <label class="form-label">নিজের সম্পর্কে লিখুন:</label>
                    </div>
                    <div>
                        <select class="form-input" name="beard" >
                          <option value="" ></option>
                          <option value="হ্যাঁ, সুন্নতি দাঁড়ি রাখছি">হ্যাঁ, সুন্নতি দাঁড়ি রাখছি</option>
                          <option value="না, দাড়ি নাই">না, দাড়ি নাই</option>
                        </select>
                        <select class="form-input" name="ankleTrouser" >
                          <option value="" ></option>
                          <option value="হ্যাঁ">হ্যাঁ </option>
                          <option value="না">না</option>
                        </select>
                        <select class="form-input" name="namaz" >
                          <option value="" ></option>
                          <option value="হ্যাঁ">হ্যাঁ </option>
                          <option value="না">না</option>
                        </select>
                        <input class="form-input" type="text" name="namazStartTime" placeholder="কখন থেকে সালাত নিয়মিত পড়েন।।" />
                        <select class="form-input" name="Mahram" >
                          <option value="" ></option>
                          <option value="হ্যাঁ">হ্যাঁ </option>
                          <option value="না">না</option>
                        </select>
                        <select class="form-input" name="correctRecitation" >
                          <option value="" ></option>
                          <option value="হ্যাঁ">হ্যাঁ </option>
                          <option value="না">না</option>
                        </select>
                        <input class="form-input" type="text" name="madzhab" placeholder="মাযহাবের অনুসরণ থাকলে লিখুন" />
                        <input class="form-input" type="text" name="film" placeholder="" />
                        <input class="form-input" type="text" name="islamicBook" placeholder="" />
                        <input class="form-input" type="text" name="islamicScholar" placeholder="" />
                        <input class="form-input" type="text" name="mazar" placeholder="" />
                        <textarea class="form-input" type="text" name="yourself" placeholder=""></textarea>
                    </div>
                 </div>
               <input id="form-button-61" type="button" name="previous" class="previous action-button" value="Previous" />
               <input id="form-button-6" type="button" name="next" class="next action-button" value="Next" />
             </fieldset>
             <fieldset class="maritalinfo-fieldset" style="height:440px;margin-top:-10px;">
               <h2 class="fs-title">বিয়ে সক্রান্ত তথ্যাদি</h2>
               <h3 class="fs-subtitle">বিয়ে সম্পর্কে নিচের গুলো লিখুন</h3>
               <div class="form-flex" style="overflow:scroll;height:300px;overflow-x: hidden">
                    <div>
                        <label class="form-label">আপনার অভিভাবক রাজি?:</label>
                        <label class="form-label">আপনি কেন বিয়ে করছেন?:</label>
                        <label class="form-label">স্ত্রীকে পর্দার ব্যবস্থায় রাখতে পারবেন(পুরুষ হলে)?:</label>
                        <label class="form-label">আপনি কি পর্দার বিধান অনুসরণ করবেন(মহিলা হলে)? :</label>
                        <label class="form-label">বিয়ের পর স্ত্রীকে পড়াশুনা চালিয়ে যেতে দিতে চান?:</label>
                        <label class="form-label">বিয়ের পর স্ত্রীকে কোথায় নিয়ে থাকবেন?:</label>
                        <label class="form-label">আপনি কি যৌতুক চান(পুরুষ হলে)?:</label>
                        <label class="form-label">মোহরানা নিয়ে কিছু বলতে চান?:</label>
                    </div>
                    <div>
                        <select class="form-input" name="parentsAgree" >
                          <option value="" ></option>
                          <option value="হ্যাঁ">হ্যাঁ</option>
                          <option value="না">না</option>
                        </select>
                        <textarea class="form-input" type="text" name="whymarrying" placeholder=""></textarea>
                        <input class="form-input" type="text" name="menCurtain" placeholder="" />
                        <input class="form-input" type="text" name="femaleCurtain" placeholder="" />
                        <input class="form-input" type="text" name="studyAfterMarriage" placeholder="" />
                        <input class="form-input" type="text" name="afterMarriageStay" placeholder="" />
                        <input class="form-input" type="text" name="dowry" placeholder="" />
                        <input class="form-input" type="text" name="mohrana" placeholder="" />
                    </div>
                 </div>
               <!--<textarea name="address" placeholder="Address"></textarea>-->
               <input id="form-button-11" type="button" name="previous" class="previous action-button" value="Previous" />
               <input id="form-button-1" type="button" name="next" class="next action-button" value="Next" />
             </fieldset>
             <fieldset class="professional-fieldset" style="height:440px;margin-top:-10px;">
               <h2 class="fs-title">পেশা সক্রান্ত তথ্য</h2>
               <h3 class="fs-subtitle">পেশা বিষয়ক তথ্যদি পূরণ করুন</h3>
               <div class="form-flex" style="overflow:scroll;height:300px;overflow-x: hidden">
                    <div>
                        <label class="form-label">পেশা সম্পর্কিত কিছু বলুন?:</label>
                    </div>
                    <div>
                        <textarea class="form-input" type="text" name="ownProfessoin" placeholder="নিজের পেশার বিস্তারিত বিবরণ"></textarea>
                    </div>
                 </div>
               <!--<textarea name="address" placeholder="Address"></textarea>-->
               <input id="form-button-21" type="button" name="previous" class="previous action-button" value="Previous" />
               <input id="form-button-2" type="button" name="next" class="next action-button" value="Next" />
             </fieldset>
             <fieldset class="prefered-lifepartner-fieldset" style="height:440px;margin-top:-10px;">
               <h2 class="fs-title">যেমন জীবন সঙ্গী চান</h2>
               <h3 class="fs-subtitle">আপনার পছন্দের কাঙ্খিত জীবন সঙ্গীর রর্ণনা দিন</h3>
               <div class="form-flex" style="overflow:scroll;height:300px;overflow-x: hidden">
                    <div>
                        <label class="form-label">সর্বোচ্চ বয়স কত?:</label>
                        <label class="form-label">গাত্রবর্ণ?:</label>
                        <label class="form-label">ন্যূনতম উচ্চতা?:</label>
                        <label class="form-label">ন্যূনতম শিক্ষাগত যোগ্যতা:</label>
                        <label class="form-label">জেলা:</label>
                        <label class="form-label">বৈবাহিক অবস্থা:</label>
                        <label class="form-label">পেশা?:</label>
                        <label class="form-label">অর্থনৈতিক অবস্থা?:</label>
                        <label class="form-label">পারিবারিক অবস্থা:</label>
                        <label class="form-label">সংক্ষেপে জীবন সঙ্গীর কাঙ্ক্ষিত গুণাবলী:</label>
                    </div>
                    <div>
                        <input class="form-input" type="text" name="hAge" placeholder="কাঙ্ক্ষিত সর্বোচ্চ বয়স" />
                        <input class="form-input" type="text" name="sColor" placeholder=" গায়ের বর্ণ" />
                        <input class="form-input" type="text" name="mHeight" placeholder="ন্যূনতম উচ্চতা কত চান" />
                        <input class="form-input" type="text" name="mEducation" placeholder="ন্যূনতম শিক্ষাগত যোগ্যতা" />
                        <input class="form-input" type="text" name="districtName" placeholder="জেলার নাম" />
                        <input class="form-input" type="text" name="maritalstatus" placeholder="বৈবাহিক অবস্থা কেমন চান" />
                        <input class="form-input" type="text" name="demandedProfession" placeholder="পেশা কি হবে চান" />
                        <input class="form-input" type="text" name="economicalStatus" placeholder="অর্থনৈতিক অবস্থা কেমন চান" />
                        <input class="form-input" type="text" name="demandedFamily" placeholder="কাঙ্ক্ষিত পরিবার কেমন চান" />
                        <textarea class="form-input" type="text" name="demandedvitue" placeholder="" ></textarea>
                    </div>
                 </div>
               <!--<textarea name="address" placeholder="Address"></textarea>-->
               <input id="form-button-71" type="button" name="previous" class="previous action-button" value="Previous" />
               <input id="form-button-7" style="background-color:blue" type="submit" name="submit" class="submit action-button" value="Submit" id="form-submit" />
             </fieldset>
           </form>



        </div>
      </div>
    </section><!-- End Features Section -->
  </main><!-- End #main -->

  <!-- jQuery -->
  <script src="{{asset('assets/manual/jquery.min.js')}}" type="text/javascript"></script>
  <!-- jQuery easing plugin -->
  <script src="{{asset('assets/manual/easy.js')}}" type="text/javascript"></script>


    <script>
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
        // return false;
      })
      </script>

 

  
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
  <!-- Vendor JS Files -->
  <script src="{{asset('assets/vendor/purecounter/purecounter.js')}}"></script>
  <script src="{{asset('assets/vendor/aos/aos.js')}}"></script>
  <script src="{{asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('assets/vendor/glightbox/js/glightbox.min.js')}}"></script>
  <script src="{{asset('assets/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
  <script src="{{asset('assets/vendor/swiper/swiper-bundle.min.js')}}"></script>
  <script src="{{asset('assets/vendor/php-email-form/validate.js')}}"></script>
  <!-- Template Main JS File -->
  <script src="{{asset('assets/js/main.js')}}"></script>

  
</body>
</html>
