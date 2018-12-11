  <nav class="navbar navbar-expand-lg navbar-light bg-light cent">
  <a class="navbar-brand" href="/">LaravelHotel</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button> 
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item {{ Request::is('rooms') ? 'active' : '' }}"> {{-- podesavanje active klase za trenutnu stranicu na osnovu url-a (ternary php sintaksa) --}}
        <a class="nav-link" href="/rooms">Rooms</a>
      </li>
      <li class="nav-item {{ Request::is('about') ? 'active' : '' }}">
        <a class="nav-link" href="/about">About Us</a>
      </li>
      <li class="nav-item {{ Request::is('news') ? 'active' : '' }}">
        <a class="nav-link" href="/news">News</a>
      </li>
      <li class="nav-item {{ Request::is('contact') ? 'active' : '' }}">
        <a class="nav-link" href="/contact">Contact</a>
      </li>
      {{-- <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Dropdown
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li> --}}
      {{-- <li class="nav-item">
        <a class="nav-link disabled" href="#">Disabled</a>
      </li> --}}
    </ul>
    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
            
                        

                        {{-- @auth(!'user') 

                         <li class="nav-item {{ Request::is('home') ? 'active' : '' }}">
                            <a class="nav-link" href="/home">Your dashboard</a>
                        </li>
                        @endauth --}}
                        
                        
                        
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            <li class="nav-item">
                                @if (Route::has('register'))
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                @endif
                            </li>
                        @endguest 
                      
                         @auth(!'user')
                        
                            <li class="nav-item {{ Request::is('dashboard') ? 'active' : '' }}">
                              <a class="nav-link" href="/dashboard">Dashboard</a>
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                  {{--  @if (!session()->has('admin'))
                                   {{Session::save()}} --}}
{{--                                   @if (Auth::guard('admin'))
 --}}                                    {{-- {{ Auth::user()->name }}<span class="caret"></span> --}}
                                  {{-- @else  --}}
                                  
                                  {{ Auth::user()->name }} <span class="caret"></span>
                                 {{--  @endif --}}
                                </a>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                                
                            </li>
                        @endauth
                        
      </ul>

    <!-- <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form> -->
  </div>
</nav>
        {{-- @if (Request::is('/'))
            <div class="container justify-content-center">
        <div class="row">
          <div class="col-lg-12 col-md-12 col-sm-12">
            <img class="mySlides slider_images" src="images/hotel_header.jpg">
            <img class="mySlides slider_images" src="images/hotel_header1.jpg">
            <img class="mySlides slider_images" src="images/hotel_header2.jpg">
            <img class="mySlides slider_images" src="images/hotel_header3.jpg">

            <button class="w3-button w3-display-left" onclick="plusDivs(-1)">&#10094;</button>
            <button class="w3-button w3-display-right" onclick="plusDivs(+1)">&#10095;</button>
          </div>
        </div>  
      </div>

      <script src="{{ asset('js/js-image-slider')}} "></script>

<script>
var myIndex = 0;
carousel();

function carousel() {
    var i;
    var x = document.getElementsByClassName("mySlides");
    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none"; 
    }
    myIndex++;
    if (myIndex > x.length) {myIndex = 1}    
    x[myIndex-1].style.display = "block";  
    setTimeout(carousel, 4000); // Change image every 4 seconds
}
</script>

      @endif   UGASEN SLIDER  --}}  
