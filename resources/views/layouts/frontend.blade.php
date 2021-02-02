 <!DOCTYPE html>
 <html :class="{ 'theme-dark': dark }" x-data="data()" lang="en" lang="en">

 <head>
     <!-- Required meta tags -->
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

     <title>@yield('title')- Cryptospor</title>

     <!-- Bootstrap CSS -->
     <link rel="stylesheet" href="frontend/css/bootstrap.min.css">
     <!-- Icon -->
     <link rel="stylesheet" href="frontend/fonts/line-icons.css">
     <!-- Owl carousel -->
     <link rel="stylesheet" href="frontend/css/owl.carousel.min.css">
     <link rel="stylesheet" href="frontend/css/owl.theme.css">

     <link rel="stylesheet" href="frontend/css/magnific-popup.css">
     <link rel="stylesheet" href="frontend/css/nivo-lightbox.css">
     <!-- Animate -->
     <link rel="stylesheet" href="frontend/css/animate.css">
     <!-- Main Style -->
     <link rel="stylesheet" href="frontend/css/main.css">
     <!-- Responsive Style -->
     <link rel="stylesheet" href="frontend/css/responsive.css">

     <link rel="stylesheet" href="css/app.css">
     <script src="{{asset('js/app.js')}}"></script>
     <script src="{{asset('assets/js/init-alpine.js')}}"></script>



     <style>
         body {
             background-color: #ffffff;
             background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 1600 900'%3E%3Cdefs%3E%3ClinearGradient id='a' x1='0' x2='0' y1='1' y2='0'%3E%3Cstop offset='0' stop-color='%230FF'/%3E%3Cstop offset='1' stop-color='%23CF6'/%3E%3C/linearGradient%3E%3ClinearGradient id='b' x1='0' x2='0' y1='0' y2='1' gradientTransform='rotate(0,0.5,0.5)'%3E%3Cstop offset='0' stop-color='%23F00'/%3E%3Cstop offset='1' stop-color='%23FC0'/%3E%3C/linearGradient%3E%3C/defs%3E%3Cg fill='%23FFF' fill-opacity='0' stroke-miterlimit='10'%3E%3Cg stroke='url(%23a)' stroke-width='3.3'%3E%3Cpath d='M1409 581 1450.35 511 1490 581z'/%3E%3Ccircle stroke-width='1.1' transform='' cx='500' cy='100' r='40'/%3E%3Cpath transform='' d='M400.86 735.5h-83.73c0-23.12 18.74-41.87 41.87-41.87S400.86 712.38 400.86 735.5z'/%3E%3C/g%3E%3Cg stroke='url(%23b)' stroke-width='1'%3E%3Cpath transform='' d='M149.8 345.2 118.4 389.8 149.8 434.4 181.2 389.8z'/%3E%3Crect stroke-width='2.2' transform='' x='1039' y='709' width='100' height='100'/%3E%3Cpath transform='' d='M1426.8 132.4 1405.7 168.8 1363.7 168.8 1342.7 132.4 1363.7 96 1405.7 96z'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E");
             background-attachment: fixed;
             background-size: cover;
         }

     </style>
 </head>
 <body class="dark:bg-gray-900">


     <!-- Header Area wrapper Starts -->
        @include('partials._header')
     <!-- Header Area wrapper End -->

        <main>
            {{ $slot }}
        </main>
     <!-- Footer Section Start -->
        @include('partials._footer')
     <!-- Footer Section End -->

     <!-- Go to Top Link -->
     <a href="#" class="back-to-top">
         <i class="lni-arrow-up"></i>
     </a>

     <!-- Preloader -->
     <div id="preloader">
         <div class="loader" id="loader-1"></div>
     </div>
     <!-- End Preloader -->

     <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    @include('partials._scripts')
<script>
    AOS.init();

</script>

 </body>
 </html>

