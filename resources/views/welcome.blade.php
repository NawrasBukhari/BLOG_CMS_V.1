<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
   <head>
      @foreach ($settings as $setting)
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>{{ $setting->title }}</title>
      <meta name="keywords" content="">
      <meta name="description" content="{{ $setting->description }}">
      <meta name="author" content="{{ $setting->author }}">
      <!-- bootstrap css -->
      <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
      <!-- style css -->
      <link rel="stylesheet" href="{{asset('css/style.css')}}">
      <!-- Responsive-->
      <link rel="stylesheet" href="{{asset('css/responsive.css')}}">
      <!-- fevicon -->
      <link rel="icon" href="{{asset('images/fevicon.png')}}" type="image/gif" />
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="{{asset('css/jquery.mCustomScrollbar.min.css')}}">
      <!-- Tweaks for older IEs-->
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
   </head>
   <!-- body -->
   <body class="main-layout">
      <!-- loader  -->
      <div class="loader_bg">
         <div class="loader"><img src="{{asset('images/loading.gif')}}" alt="#" /></div>
      </div>
      <!-- end loader -->
      <!-- header -->
      @include('includes.header')
      <!-- end header -->
      <!-- banner -->
      <section class="banner_main">
         <div class="container">
            <div class="row d_flex">
               <div class="col-md-5">
                  <div class="text-bg">
                     <h1>{{ $setting-> section_1_title }}<br> Web Hosting</h1>
                     <span>{{ $setting-> section_1_span }}</span>
                     <p>{{ $setting-> section_1_paragraph }}</p>
                     <a href="#">Get Started</a>
                  </div>
               </div>
               <div class="col-md-7">
                  <div class="text-img">
                     <figure><img src="{{asset('images/img.png')}}" /></figure>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- end banner -->
      <!-- Hosting -->
      <div id="" class="hosting">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="titlepage">
                     <h2>{{ $setting-> section_2_title }}</h2>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-md-12">
                  <div class="web_hosting">
                     <figure><img  src="{{asset('images/web.jpg')}}" alt="#"/></figure>
                     <p>{{ $setting-> section_2_paragraph }}</p>
                     <a href="#">Read more</a>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- end Hosting -->
      <!-- Services  -->
      <div id="service" class="Services">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="titlepage">
                     <h2>{{ $setting-> section_3_title }}</h2>
                     <p>{{ $setting-> section_3_paragraph }}</p>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                  <div class="Services-box">
                     <i><img src="{{asset('images/service1.png')}}" alt="#" /></i>
                     <h3>{{ $setting-> section_3_card_1 }}</h3>
                     <p>{{ $setting-> section_3_card_1_p1 }}</p>
                  </div>
               </div>
               <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                  <div class="Services-box">
                     <i><img src="{{asset('images/service2.png')}}" alt="#" /></i>
                     <h3>{{ $setting-> section_3_card_2}}</h3>
                     <p>{{ $setting-> section_3_card_2_p2 }}</p>
                  </div>
               </div>
               <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                  <div class="Services-box">
                     <i><img src="{{asset('images/service3.png')}}" alt="#" /></i>
                     <h3>{{ $setting-> section_3_card_3 }}</h3>
                     <p>{{ $setting->  section_3_card_3_p3 }}</p>
                  </div>
               </div>
               <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                  <div class="Services-box">
                     <i><img src="{{asset('images/service4.png')}}" alt="#" /></i>
                     <h3>{{ $setting->  section_3_card_4 }}</h3>
                     <p>{{ $setting->  section_3_card_4_p4}}</p>
                  </div>
               </div>
               <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                  <div class="Services-box">
                     <i><img src="{{asset('images/service5.png')}}" alt="#" /></i>
                     <h3>{{ $setting->  section_3_card_5 }}</h3>
                     <p>{{ $setting->  section_3_card_5_p5}}</p>
                  </div>
               </div>
               <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                  <div class="Services-box">
                     <i><img src="{{asset('images/service6.png')}}" alt="#" /></i>
                     <h3>{{ $setting->  section_3_card_6}}</h3>
                     <p>{{ $setting->  section_3_card_6_p6 }}</p>
                  </div>
               </div>
               <a class="read_more" href="#">Read More</a>
            </div>
         </div>
      </div>
      <!-- end Servicess -->
      <!-- why -->
      <div id="why" class="why">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="titlepage">
                     <h2>{{ $setting-> section_4_title }} </h2>
                     <p>{{ $setting->  section_4_paragraph }}</p>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                  <div id="box_ho" class="why-box">
                     <i><img src="{{asset('images/why1.png')}}" alt="#" /></i>
                     <h3>{{ $setting-> section_4_card_1_title }}</h3>
                     <p>{{ $setting-> section_4_card_1_paragraph }}</p>
                  </div>
                  <a class="read_more bg" href="#">Read More</a>
               </div>
               <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                  <div class="why-box">
                     <i><img src="{{asset('images/why2.png')}}" alt="#" /></i>
                     <h3>{{ $setting-> section_4_card_2_title }}</h3>
                     <p>{{ $setting-> section_4_card_2_paragraph }}</p>
                  </div>
                  <a class="read_more bg" href="#">Read More</a>
               </div>
               <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                  <div class="why-box">
                     <i><img src="{{asset('images/why3.png')}}" alt="#" /></i>
                     <h3>{{ $setting-> section_4_card_3_title }}</h3>
                     <p>{{ $setting-> section_4_card_3_paragraph }} </p>
                  </div>
                  <a class="read_more bg" href="#">Read More</a>
               </div>
            </div>
         </div>
      </div>
      <!-- end why -->
      <!-- contact -->
      <div id="contact" class="contact">
         <div class="container">
            <div class="row">
               <div class="col-md-6 offset-md-3 ">
                  <form class="main_form">
                     <div class="row">
                        <div class="col-sm-12">
                           <input class="contactus" placeholder="Name" type="text" name="Name">
                        </div>
                        <div class="col-sm-12">
                           <input class="contactus" placeholder="Email" type="text" name=" Email">
                        </div>
                        <div class="col-sm-12">
                           <input class="contactus" placeholder="Phone" type="text" name="Phone">
                        </div>
                        <div class="col-sm-12">
                           <textarea class="textarea" placeholder="Message" type="text" name="Message"></textarea>
                        </div>
                        <div class="col-sm-12">
                           <button class="send">Send</button>
                        </div>
                     </div>
                  </form>
               </div>
            </div>
         </div>
      </div>

      <!-- end contact -->
      <!-- Here where we include footer -->
      @include('includes.footer')
      <!-- Here where we finsihed including header -->
      
      @endforeach
      <!-- end footer -->
      <!-- Javascript files-->
      <script src="{{asset('js/jquery.min.js')}}"></script>
      <script src="{{asset('js/popper.min.js')}}"></script>
      <script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>
      <script src="{{asset('js/jquery-3.0.0.min.js')}}"></script>
      <script src="{{asset('js/plugin.js')}}"></script>
      <!-- sidebar -->
      <script src="{{asset('js/jquery.mCustomScrollbar.concat.min.js')}}"></script>
      <script src="{{asset('js/custom.js')}}"></script>
      <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
   </body>
</html>
