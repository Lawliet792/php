
<!DOCTYPE html>
<html>
   <head>
      <!-- Basic -->
      <meta charset="utf-8" />
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <!-- Mobile Metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
      <!-- Site Metas -->
      <meta name="keywords" content="" />
      <meta name="description" content="" />
      <meta name="author" content="" />
      <link rel="shortcut icon" href="images/favicon.png" type="">
      <title>ONESHOP</title>
      <!-- bootstrap core css -->
      <link rel="stylesheet" type="text/css" href="{{asset('template-beranda/css/bootstrap.css')}}" />
      <!-- font awesome style -->
      <link href="{{asset('template-beranda/css/font-awesome.min.css')}}" rel="stylesheet" />
      <!-- Custom styles for this template -->
      <link href="{{asset('template-beranda/css/style.css')}}" rel="stylesheet" />
      <!-- responsive style -->
      <link href="{{asset('template-beranda/css/responsive.css')}}" rel="stylesheet" />
   </head>
   <body>
      <div class="hero_area">
         <!-- header section strats -->
         <header class="header_section">
            <div class="container">
               <nav class="navbar navbar-expand-lg custom_nav-container ">
                  <a class="navbar-brand" href="index.html"><h3>ONE <span class="text-danger">Shop</span> </h3></a>
                  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <span class=""> </span>
                  </button>
                  <div class="collapse navbar-collapse" id="navbarSupportedContent">
                     <ul class="navbar-nav">
                        <li class="nav-item ">
                           <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
                        </li>

                        <li class="nav-item">
                           <a class="nav-link" href="{{route('beranda.produk')}}">Produk<span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link" href="{{route('beranda.about')}}">Tentang</a>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link" href="/login">Login</a>
                        </li>

                     </ul>
                  </div>
               </nav>
            </div>
         </header>
         <!-- end header section -->
        @yield('content')
      <!-- footer start -->

      <!-- footer end -->
      <div class="cpy_">
         <p>ONE <a href="">Shop</a></p>
      </div>
      <!-- jQery -->
      <script src="{{asset('template-beranda/js/jquery-3.4.1.min.js')}}"></script>
      <!-- popper js -->
      <script src="{{asset('template-beranda/js/popper.min.js')}}"></script>
      <!-- bootstrap js -->
      <script src="{{asset('template-beranda/js/bootstrap.js')}}"></script>
      <!-- custom js -->
      <script src="{{asset('template-beranda/js/custom.js')}}"></script>
   </body>
</html>
