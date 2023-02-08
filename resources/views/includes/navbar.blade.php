<nav class="navbar navbar-expand-lg navbar-light navbar-store fixed-top navbar-fixed-top"
    data-aos="fade-down"
    >
    <div class="container">
      <a href="{{url('/')}}" class="navbar-brand">
        <img src="/bwa-icon/logo.svg" alt="logo">
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item ">
            <a href="{{ url('/') }}" class="nav-link ">Home</a>
          </li>
          <li class="nav-item ">
            <a href="{{ url('/categories') }}" class="nav-link">Categories</a>
          </li>
          <li class="nav-item ">
            <a href="/rewards.html" class="nav-link">Rewards</a>
          </li>
          @guest
          <li class="nav-item ">
            <a href="{{route('register')}}" class="nav-link">Sign Up</a>
          </li>
          <li class="nav-item ">
            <a href="{{route('login')}}" class="nav-link btn btn-success px-4 text-white">Sign In</a>
          </li>
          @endguest
        </ul>
        @auth
          <!-- Desktop Menu -->
         <ul class="navbar-nav d-none d-lg-flex">
          <li class="nav-item dropdown">
            <a href="{{url('/')}}" class="nav-link" id="navbarDropdown" role="button" data-toggle="dropdown" >
              <img src="/bwa-icon/icon-user.png" alt="" class="rounded-circle mr-2 profile-picture">
              Hi, {{Auth::user()->name}}
            </a>
            <div class="dropdown-menu">
              <a href="{{route('dashboard')}}" class="dropdown-item">Dashboard</a>
              <a href="{{route('dashboard-settings-account')}}" class="dropdown-item">Setting</a>
              <div class="dropdown-divider"></div>
                <a href="{{ route('logout') }}" 
                class="dropdown-item" 
                onclick="event.preventDefault();
                document.getElementById('logout-form').submit();"
                >Logout
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                  @csrf
                </form>
              </div>
          </li>
          <li class="nav-item">
            <a href="{{route('cart')}}" class="nav-link inline-block mt-2">
              @php
                $carts = \App\Models\Cart::where('users_id', Auth::user()->id)->count()  
              @endphp
              @if($carts > 0)
                <img src="/images/icon-cart-filled.svg" alt="">
                <div class="card-badge">{{$carts}}</div>
              @else
                <img src="/bwa-icon/icon-cart-empty.png" alt="">
              @endif
            </a>
          </li>
        </ul>

        <!-- Mobile Menu -->
        <ul class="navbar-nav d-block d-lg-none">
          <li class="nav-item">
            <a href="#" class="nav-link">
              Hi, {{Auth::user()->name}}
            </a>
          </li>
          <li class="nav-item">
            <a href="{{route('cart')}}" class="nav-link d-inline-block">
              Cart
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('logout') }}" 
                class="nav-link btn btn-danger text-white"
                onclick="event.preventDefault();
                document.getElementById('logout-form').submit();"
            >Logout
          </a>
          </li>
        </ul>
        @endauth
      </div>
    </div>
    </nav>