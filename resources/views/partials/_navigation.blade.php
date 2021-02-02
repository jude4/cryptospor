 <nav class="navbar navbar-expand-md bg-inverse fixed-top scrolling-navbar">
     <div class="container">
         <!-- Brand and toggle get grouped for better mobile display -->
         <a href="index.html" class="navbar-brand">
         <img src="" alt="Cryptospor">
         </a>
         <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
             <i class="lni-menu"></i>
         </button>
         <div class="collapse navbar-collapse" id="navbarCollapse">
             <ul class="navbar-nav mr-auto w-100 justify-content-end clearfix">
                 <li class="nav-item">
                     <a class="nav-link {{ Request::is('/') ? 'active' : '' }}" href="{{ route('home') }}">
                         Home
                     </a>
                 </li>
                 <li class="nav-item">
                     <a class="nav-link {{ Request::is('about-us') ? 'active' : '' }}" href="{{ route('about-us') }}">

                         About us
                     </a>
                 </li>
                  <li class="nav-item">
                      <a class="nav-link {{ Request::is('events.*') ? 'active' : '' }}" href="/events">
                          Events
                      </a>
                  </li>

                 <li class="nav-item">
                     <a class="nav-link {{ Request::is('faq') ? 'active' : '' }}" href="{{ route('faq') }}">
                         FAQ
                     </a>
                 </li>
                
                 <li class="nav-item">
                     <a class="nav-link {{ Request::is('contact-us') ? 'active' : '' }}" href="{{ route('contact-us') }}">

                         Contact
                     </a>
                 </li>
                 @guest
                        <li class="nav-item">
                            <a class="nav-link {{ Request::is('login') ? 'active' : '' }}" href="{{ route('login') }}">

                                Login
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link {{ Request::is('register') ? 'active' : '' }}" href="{{ route('register') }}">
                                Register
                            </a>
                        </li>
                     @else
                        @if(Auth::user()->role() == 'admin')
                         <li class="nav-item">
                             <a class="nav-link {{ Request::is('dashboard') ? 'active' : '' }}" href="{{ route('admin.dashboard') }}">
                                Dashboard
                             </a>
                         </li>
                            @else
                            <li class="nav-item">
                                <a class="nav-link {{ Request::is('dashboard') ? 'active' : '' }}" href="{{ route('users.dashboard') }}">
                                    Dashboard
                                </a>
                            </li>

                        @endif

                 @endguest

             </ul>
         </div>
     </div>
 </nav>
