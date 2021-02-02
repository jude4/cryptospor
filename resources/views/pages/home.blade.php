@section('title', 'Home')
<x-frontend-layout>

@section('header')
        <!-- Hero Area Start -->
        <div id="hero-area" class="hero-area-bg">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7 col-md-12 col-sm-12 col-xs-12 lg:mt-20">
                        <div class="contents">
                            <h2 class="head-title">Largest Bitcoin mining company</h2>
                            <p>Start bitcoin mining today with the best cryptocurrency investment platform</p>
                            @if (!Auth::check())
                            <div class="header-button">
                                <a rel="nofollow" href="{{ route('login') }}" class="btn btn-common">Login</a>
                                <a href="{{ route('register') }}" class="btn btn-border video-popup">Get started</a>
                            </div>
                            @endif
                        </div>
                    </div>
                    <div class="col-lg-5 col-md-12 col-sm-12 col-xs-12">
                        <div class="intro-img">
                            <img class="img-fluid" src="frontend/img/coin.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Hero Area End -->
@endsection

 <!-- About Section start -->
 <div class="about-area section-padding bg-gray">

     <div class="container">
         <div class="row">
             <div class="col-lg-6 col-md-12 col-xs-12 info">
                 <div class="about-wrapper wow fadeInLeft" data-wow-delay="0.3s">
                     <div>
                         <div class="site-heading">
                             <h2 class="section-title">About Cryptospor</h2>
                         </div>
                         <div class="content">
                             <p>
                                 Praesent imperdiet, tellus et euismod euismod, risus lorem euismod erat, at finibus neque odio quis metus. Donec vulputate arcu quam. Morbi quis tincidunt ligula. Sed rutrum tincidunt pretium. Mauris auctor, purus a pulvinar fermentum, odio dui vehicula lorem, nec pharetra justo risus quis mi. Ut ac ex sagittis, viverra nisl vel, rhoncus odio.
                             </p>
                             <a href="{{ route('about-us') }}" class="btn btn-common mt-3">Read More</a>
                         </div>
                     </div>
                 </div>
             </div>
             <div class="col-lg-6 col-md-12 col-xs-12 wow fadeInRight" data-wow-delay="0.3s">
                 <img class="img-fluid" src="frontend/img/about/hgs.png" alt="">
             </div>
         </div>
     </div>
 </div>
 <!-- About Section End -->


 <!-- Services Section Start -->
 <section id="services" class="section-padding">
     <div class="container">
         <div class="section-header text-center">
             <h2 class="section-title wow fadeInDown" data-wow-delay="0.3s">Why Choose Cryptospor</h2>
             <div class="shape wow fadeInDown" data-wow-delay="0.3s"></div>
         </div>
         <div class="row">
             <!-- Services item -->
             <div class="col-md-6 col-lg-4 col-xs-12">
                 <div class="services-item wow fadeInRight" data-wow-delay="0.3s">
                     <div class="icon">
                         <i class="lni-cog"></i>
                     </div>
                     <div class="services-content">
                         <h3><a href="#">Cost Efficiency</a></h3>
                         <p>Reasonable trading fees for takers and all market makers. </p>
                     </div>
                 </div>
             </div>
             <!-- Services item -->
             <div class="col-md-6 col-lg-4 col-xs-12">
                 <div class="services-item wow fadeInRight" data-wow-delay="0.6s">
                     <div class="icon">
                         <i class="lni-stats-up"></i>
                     </div>
                     <div class="services-content">
                         <h3><a href="#">Quick Payout</a></h3>
                         <p>Our financial team work around the clock to ensure your funds are released not more than 24 hours after request. </p>
                     </div>
                 </div>
             </div>
             <!-- Services item -->
             <div class="col-md-6 col-lg-4 col-xs-12">
                 <div class="services-item wow fadeInRight" data-wow-delay="0.9s">
                     <div class="icon">
                         <i class="lni-users"></i>
                     </div>
                     <div class="services-content">
                         <h3><a href="#">100% Secure</a></h3>
                         <p>Protection against DDOS attacks, full data encryption. </p>
                     </div>
                 </div>
             </div>
         </div>
     </div>
 </section>
 <!-- Services Section End -->


<div class="px-4 py-16 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8 lg:py-20">
    <div class="max-w-xl mb-10 md:mx-auto sm:text-center lg:max-w-2xl md:mb-12">
    
        <h2 class="max-w-lg mb-6 font-sans text-3xl font-bold leading-none tracking-tight text-gray-900 sm:text-4xl md:mx-auto">
            <span class="relative inline-block">
                <svg viewBox="0 0 52 24" fill="currentColor" class="absolute top-0 left-0 z-0 hidden w-32 -mt-8 -ml-20 text-blue-gray-100 lg:w-32 lg:-ml-28 lg:-mt-10 sm:block">
                    <defs>
                        <pattern id="679d5905-e08c-4b91-a66c-84aefbb9d2f5" x="0" y="0" width=".135" height=".30">
                            <circle cx="1" cy="1" r=".7"></circle>
                        </pattern>
                    </defs>
                    <rect fill="url(#679d5905-e08c-4b91-a66c-84aefbb9d2f5)" width="52" height="24"></rect>
                </svg>
                <span class="relative">Cryptospor</span>
            </span>
            Video
        </h2>
        <p class="text-base text-gray-700 md:text-lg">
            Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque rem aperiam, eaque ipsa quae.
        </p>
    </div>
    <div class="mx-auto lg:max-w-2xl">
        <div class="relative w-full transition-shadow duration-300 hover:shadow-xl">
            <img class="object-cover w-full h-56 rounded shadow-lg sm:h-64 md:h-80 lg:h-96" src="https://images.pexels.com/photos/927022/pexels-photo-927022.jpeg?auto=compress&amp;cs=tinysrgb&amp;dpr=3&amp;h=750&amp;w=1260" alt="" />
            <a href="/" aria-label="Play Video" class="absolute inset-0 flex items-center justify-center w-full h-full transition-colors duration-300 bg-gray-900 bg-opacity-50 group hover:bg-opacity-25">
                <div class="flex items-center justify-center w-16 h-16 transition duration-300 transform bg-gray-100 rounded-full shadow-2xl group-hover:scale-110">
                    <svg class="w-10 text-gray-900" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M16.53,11.152l-8-5C8.221,5.958,7.833,5.949,7.515,6.125C7.197,6.302,7,6.636,7,7v10 c0,0.364,0.197,0.698,0.515,0.875C7.667,17.958,7.833,18,8,18c0.184,0,0.368-0.051,0.53-0.152l8-5C16.822,12.665,17,12.345,17,12 S16.822,11.335,16.53,11.152z"></path>
                    </svg>
                </div>
            </a>
        </div>
    </div>
</div>

 <!-- Features Section Start -->
 <section id="features" class="section-padding">
     <div class="container">
         <div class="section-header text-center">
             <h2 class="section-title wow fadeInDown" data-wow-delay="0.3s">Awesome Features</h2>
             <div class="shape wow fadeInDown" data-wow-delay="0.3s"></div>
         </div>
         <div class="row">
             <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
                 <div class="content-left">
                     <div class="box-item wow fadeInLeft" data-wow-delay="0.3s">
                         <span class="icon">
                             <i class="lni-rocket"></i>
                         </span>
                         <div class="text">
                             <h4>Bootstrap 4 Based</h4>
                             <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                         </div>
                     </div>
                     <div class="box-item wow fadeInLeft" data-wow-delay="0.6s">
                         <span class="icon">
                             <i class="lni-laptop-phone"></i>
                         </span>
                         <div class="text">
                             <h4>Account privacy</h4>
                             <p>We will never share your private data without your permission.</p>
                         </div>
                     </div>
                     <div class="box-item wow fadeInLeft" data-wow-delay="0.9s">
                         <span class="icon">
                             <i class="lni-cog"></i>
                         </span>
                         <div class="text">
                             <h4>Industry best practices</h4>
                             <p>Cryptospor supports a variety of the most popular digital currencies.</p>
                         </div>
                     </div>
                 </div>
             </div>
             <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
                 <div class="show-box wow fadeInUp" data-wow-delay="0.3s">
                     <img src="frontend/img/feature/intro-mobile.png" alt="">
                 </div>
             </div>
             <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
                 <div class="content-right">
                     <div class="box-item wow fadeInRight" data-wow-delay="0.3s">
                         <span class="icon">
                             <i class="lni-lock"></i>
                         </span>
                         <div class="text">
                             <h4>Secure storage</h4>
                             <p>We store the vast majority of the digital assets in secure offline storage.</p>
                         </div>
                     </div>
                     <div class="box-item wow fadeInRight" data-wow-delay="0.6s">
                         <span class="icon">
                             <i class="lni-layers"></i>
                         </span>
                         <div class="text">
                             <h4>Multi-purpose Template</h4>
                             <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                         </div>
                     </div>
                     <div class="box-item wow fadeInRight" data-wow-delay="0.9s">
                         <span class="icon">
                             <i class="lni-leaf"></i>
                         </span>
                         <div class="text">
                             <h4>Working Contact Form</h4>
                             <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </div>
 </section>
 <!-- Features Section End -->

 <!-- Pricing section Start -->
 <section id="pricing" class="section-padding">
     <div class="container">
         <div class="section-header text-center">
             <h2 class="section-title wow fadeInDown" data-wow-delay="0.3s">Investment plan</h2>
             <div class="shape wow fadeInDown" data-wow-delay="0.3s"></div>
         </div>
         <div class="row">
             <div class="col-lg-3 col-md-6 col-xs-12">
                 <div class="table wow fadeInLeft" data-wow-delay="1.2s">
                     <div class="icon-box">
                         <i class="lni-package"></i>
                     </div>
                     <div class="pricing-header">
                         <p class="price-value">$10 - $499</p>
                     </div>
                     <div class="title">
                         <h3>Basic</h3>
                     </div>
                     <ul class="description">
                         <li>Basic users</li>
                         <li>7.5% Daily Earning for 20 days</li>
                         <li>Unlimited storage</li>
                         <li>24/7 support</li>
                         <li>Lifetime updates</li>

                     </ul>
                     <a href="{{ route('register') }}" class="btn btn-common">Purchase Now</a>
                 </div>
             </div>
             <div class="col-lg-3 col-md-6 col-xs-12">
                 <div class="table wow fadeInUp" data-wow-delay="1.2s">
                     <div class="icon-box">
                         <i class="lni-drop"></i>
                     </div>
                     <div class="pricing-header">
                         <p class="price-value">$500 - $999</p>
                     </div>
                     <div class="title">
                         <h3>Sliver</h3>
                     </div>
                     <ul class="description">
                         <li>Silver users</li>
                         <li>10% Daily Earning for 20 days</li>
                         <li>Unlimited storage</li>
                         <li>24/7 support</li>
                         <li>Lifetime updates</li>
                         <a href="{{ route('register') }}" class="btn btn-common">Purchase Now</a>
                     </ul>
                 </div>
             </div>
             <div class="col-lg-3 col-md-6 col-xs-12">
                 <div class="table wow fadeInRight" data-wow-delay="1.2s">
                     <div class="icon-box">
                         <i class="lni-star"></i>
                     </div>
                     <div class="pricing-header">
                         <p class="price-value">$1,000 - 4,999</p>
                     </div>
                     <div class="title">
                         <h3>Gold</h3>
                     </div>
                     <ul class="description">
                        <li>Gold</li>
                         <li>15% Daily Earning for 20 days</li>
                          <li>Unlimited storage</li>
                          <li>24/7 support</li>
                          <li>Lifetime updates</li>

                     </ul>
                    <a href="{{ route('register') }}" class="btn btn-common">Purchase Now</a>
                 </div>
             </div>
             <div class="col-lg-3 col-md-6 col-xs-12">
                 <div class="table wow fadeInRight" data-wow-delay="1.2s">
                     <div class="icon-box">
                         <i class="lni-layers"></i>
                     </div>
                     <div class="pricing-header">
                         <p class="price-value">$5,000 - $9,999</p>
                     </div>
                     <div class="title">
                         <h3>Diamond</h3>
                     </div>
                     <ul class="description">
                         <li>Diamond users</li>
                         <li>20% Daily Earning for 20 days</li>
                         <li>Unlimited storage</li>
                         <li>24/7 support</li>
                         <li>Lifetime updates</li>
                     </ul>
                     <a href="{{ route('register') }}" class="btn btn-common">Purchase Now</a>
                 </div>
             </div>
         </div>
     </div>
 </section>
 <!-- Pricing Table Section End -->

 <!-- Testimonial Section Start -->
 <section id="testimonial" class="testimonial section-padding">
     <div class="container">
         <div class="row justify-content-center">
             <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                 <div class="px-4 py-16 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8 ">
                     <div class="grid gap-8 sm:grid-cols-2 lg:grid-cols-4">
                         <div class="text-center wow fadeInLeft" data-wow-delay="0.3s"">

                             <div class="flex items-center justify-center w-10 h-10 mx-auto mb-3 rounded-full bg-indigo-50 sm:w-12 sm:h-12">
                                 <svg class="w-8 h-8 text-deep-purple-accent-400 sm:w-10 sm:h-10" stroke="currentColor" viewBox="0 0 52 52">
                                     <polygon stroke-width="3" stroke-linecap="round" stroke-linejoin="round" fill="none" points="29 13 14 29 25 29 23 39 38 23 27 23"></polygon>
                                 </svg>
                             </div>
                             <h6 class="text-4xl font-bold text-white">289K</h6>
                             <p class="mb-2 font-bold text-md text-white">Daily Transaction</p>
                         </div>
                         <div class="text-center wow fadeInLeft" data-wow-delay="0.3s"">

                             <div class="flex items-center justify-center w-10 h-10 mx-auto mb-3 rounded-full bg-indigo-50 sm:w-12 sm:h-12">
                                 <svg class="w-8 h-8 text-deep-purple-accent-400 sm:w-10 sm:h-10" stroke="currentColor" viewBox="0 0 52 52">
                                     <polygon stroke-width="3" stroke-linecap="round" stroke-linejoin="round" fill="none" points="29 13 14 29 25 29 23 39 38 23 27 23"></polygon>
                                 </svg>
                             </div>
                             <h6 class="text-4xl font-bold text-white">$689.54bil</h6>
                             <p class="mb-2 font-bold text-md text-white">Market cap</p>
                         </div>
                         <div class="text-center wow fadeInRight" data-wow-delay="0.3s"">

                             <div class="flex items-center justify-center w-10 h-10 mx-auto mb-3 rounded-full bg-indigo-50 sm:w-12 sm:h-12">
                                 <svg class="w-8 h-8 text-deep-purple-accent-400 sm:w-10 sm:h-10" stroke="currentColor" viewBox="0 0 52 52">
                                     <polygon stroke-width="3" stroke-linecap="round" stroke-linejoin="round" fill="none" points="29 13 14 29 25 29 23 39 38 23 27 23"></polygon>
                                 </svg>
                             </div>
                             <h6 class="text-4xl font-bold text-white">9,400</h6>
                             <p class="mb-2 font-bold text-md text-white">Active Users</p>
                         </div>
                         <div class="text-center wow fadeInRight" data-wow-delay="0.3s"">

                             <div class="flex items-center justify-center w-10 h-10 mx-auto mb-3 rounded-full bg-indigo-50 sm:w-12 sm:h-12">
                                 <svg class="w-8 h-8 text-deep-purple-accent-400 sm:w-10 sm:h-10" stroke="currentColor" viewBox="0 0 52 52">
                                     <polygon stroke-width="3" stroke-linecap="round" stroke-linejoin="round" fill="none" points="29 13 14 29 25 29 23 39 38 23 27 23"></polygon>
                                 </svg>
                             </div>
                             <h6 class="text-4xl font-bold text-white">21345k</h6>
                             <p class="mb-2 font-bold text-md text-white">Subscribers</p>
                            
                         </div>
                     </div>
                 </div>

             </div>
         </div>
     </div>
 </section>


<div class="relative flex flex-col-reverse py-16 lg:py-0 lg:flex-col my-6 " >


    <div class="w-full max-w-xl px-4 mx-auto md:px-0 lg:px-8 lg:py-20 lg:max-w-screen-xl wow fadeInLeft" data-wow-delay=" 0.3s">


        <div class="mb-0 lg:max-w-lg lg:pr-8 xl:pr-6">
            <h2 class="mb-5 font-sans text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl sm:leading-none md:text-center">
               Live cryptocurrency update
                
            </h2>
            <p class="mb-5 text-base text-gray-700 md:text-lg md:text-center">
                We also provide live cryptocurrency update.
            </p>
            <div class="mb-10 text-center md:mb-16 lg:mb-20">
                <a href="/" class="btn btn-common inline-flex items-center justify-center">

                    Get live crypto update here!
                </a>
            </div>
            <div class="flex flex-col items-center">
                <div class="mb-2 text-sm text-gray-600 md:mb-2">Follow us</div>
                <div class="flex items-center space-x-4">
                    <div class="flex items-center">
                        <a href="/" class="text-gray-600 transition-colors duration-300 hover:text-deep-purple-accent-400">
                            <svg viewBox="0 0 24 24" fill="currentColor" class="h-5">
                                <path d="M24,4.6c-0.9,0.4-1.8,0.7-2.8,0.8c1-0.6,1.8-1.6,2.2-2.7c-1,0.6-2,1-3.1,1.2c-0.9-1-2.2-1.6-3.6-1.6 c-2.7,0-4.9,2.2-4.9,4.9c0,0.4,0,0.8,0.1,1.1C7.7,8.1,4.1,6.1,1.7,3.1C1.2,3.9,1,4.7,1,5.6c0,1.7,0.9,3.2,2.2,4.1 C2.4,9.7,1.6,9.5,1,9.1c0,0,0,0,0,0.1c0,2.4,1.7,4.4,3.9,4.8c-0.4,0.1-0.8,0.2-1.3,0.2c-0.3,0-0.6,0-0.9-0.1c0.6,2,2.4,3.4,4.6,3.4 c-1.7,1.3-3.8,2.1-6.1,2.1c-0.4,0-0.8,0-1.2-0.1c2.2,1.4,4.8,2.2,7.5,2.2c9.1,0,14-7.5,14-14c0-0.2,0-0.4,0-0.6 C22.5,6.4,23.3,5.5,24,4.6z"></path>
                            </svg>
                        </a>
                    </div>
                    <div class="flex items-center">
                        <a href="/" class="text-gray-600 transition-colors duration-300 hover:text-deep-purple-accent-400">
                            <svg viewBox="0 0 30 30" fill="currentColor" class="h-6">
                                <circle cx="15" cy="15" r="4"></circle>
                                <path d="M19.999,3h-10C6.14,3,3,6.141,3,10.001v10C3,23.86,6.141,27,10.001,27h10C23.86,27,27,23.859,27,19.999v-10   C27,6.14,23.859,3,19.999,3z M15,21c-3.309,0-6-2.691-6-6s2.691-6,6-6s6,2.691,6,6S18.309,21,15,21z M22,9c-0.552,0-1-0.448-1-1   c0-0.552,0.448-1,1-1s1,0.448,1,1C23,8.552,22.552,9,22,9z"></path>
                            </svg>
                        </a>
                    </div>
                    <div class="flex items-center">
                        <a href="/" class="text-gray-600 transition-colors duration-300 hover:text-deep-purple-accent-400">
                            <svg viewBox="0 0 24 24" fill="currentColor" class="h-5">
                                <path d="M22,0H2C0.895,0,0,0.895,0,2v20c0,1.105,0.895,2,2,2h11v-9h-3v-4h3V8.413c0-3.1,1.893-4.788,4.659-4.788 c1.325,0,2.463,0.099,2.795,0.143v3.24l-1.918,0.001c-1.504,0-1.795,0.715-1.795,1.763V11h4.44l-1,4h-3.44v9H22c1.105,0,2-0.895,2-2 V2C24,0.895,23.105,0,22,0z"></path>
                            </svg>
                        </a>
                    </div>
                    <div class="flex items-center">
                        <a href="/" class="text-gray-600 transition-colors duration-300 hover:text-deep-purple-accent-400">
                            <svg viewBox="0 0 24 24" fill="currentColor" class="h-6">
                                <path d="M23.8,7.2c0,0-0.2-1.7-1-2.4c-0.9-1-1.9-1-2.4-1C17,3.6,12,3.6,12,3.6h0c0,0-5,0-8.4,0.2 c-0.5,0.1-1.5,0.1-2.4,1c-0.7,0.7-1,2.4-1,2.4S0,9.1,0,11.1v1.8c0,1.9,0.2,3.9,0.2,3.9s0.2,1.7,1,2.4c0.9,1,2.1,0.9,2.6,1 c1.9,0.2,8.2,0.2,8.2,0.2s5,0,8.4-0.3c0.5-0.1,1.5-0.1,2.4-1c0.7-0.7,1-2.4,1-2.4s0.2-1.9,0.2-3.9v-1.8C24,9.1,23.8,7.2,23.8,7.2z M9.5,15.1l0-6.7l6.5,3.4L9.5,15.1z"></path>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="inset-y-0 top-0 right-0 w-full max-w-xl px-4 mx-auto mb-6 md:px-0 lg:pl-8 lg:pr-0 lg:mb-0 lg:mx-0 lg:w-1/2 lg:max-w-full lg:absolute xl:px-0 wow fadeInRight" data-wow-delay=" 0.3s">


        <img class="object-cover w-full rounded  lg:rounded-none lg:shadow-none" src="frontend/img/chat.png" alt="" />
    </div>
</div>

</x-frontend-layout>