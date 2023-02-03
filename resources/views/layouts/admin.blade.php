<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <title>@yield('title')</title>
    @stack('prepend-style')
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" crossorigin="anonymous" />
    <link href={{asset("/style/main.css")}} rel="stylesheet" crossorigin="anonymous"/>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/dt-1.13.2/datatables.min.css" crossorigin="anonymous"/>
 
    @stack('addon-style')
  </head>

  <body>
    <div class="page-dashboard">
      <div class="d-flex" id="wrapper" data-aos="fade-right">
        <!-- Sidebar -->
        <div class="border-right" id="sidebar-wrapper">
          <div class="sidebar-heading text-center">
            <a href="{{route('admin-dashboard')}}"><img src="/images/admin.png" style="max-width: 150px" class="my-4" alt=""></a>
          </div>
          <div class="list-group list-group-flush">
            <a href="{{route('admin-dashboard')}}" 
            class="list-group-item list-group-item-action ">
              Dashboard
            </a>
            <a href="#" 
            class="list-group-item list-group-item-action">
              Products
            </a>
            <a href="{{route('category.index')}}" 
            class="list-group-item list-group-item-action {{ (request()->is('admin/categories')) ? 'active' : '' }}">
              Categories
            </a>
            <a href="#" 
            class="list-group-item list-group-item-action">
              Transactions
            </a>
            <a href="#" 
            class="list-group-item list-group-item-action">
              Users
            </a>
            <a href="/index.html" 
            class="list-group-item list-group-item-action">
              Sign Out
            </a>
          </div>
        </div>
      
      <!-- Navbar -->
      <div id="page-content-wrapper">
        <nav class="navbar navbar-expand-lg navbar-light navbar-store fixed-top"
        data-aos="fade-down"
          >
            <div class="container-fluid">
              <button class="btn btn-secondary d-md-none mr-auto mr-2" id="menu-toggle">
                &laquo; Menu
              </button>
              <button 
              class="navbar-toggler" 
              type="button" 
              data-toggle="collapse" 
              data-target="#navbarSupportedContent">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                <!-- Desktop Menu -->
                <ul class="navbar-nav d-none d-lg-flex ml-auto">
                  <li class="nav-item dropdown">
                    <a href="" class="nav-link" id="navbarDropdown" role="button" data-toggle="dropdown" >
                      <img src="/bwa-icon/icon-user.png" alt="" class="rounded-circle mr-2 profile-picture">
                      Hi, Angga
                    </a>
                    <div class="dropdown-menu">
                      <a href="/dashboard.html" class="dropdown-item">Dashboard</a>
                      <a href="/dashboard-account.html" class="dropdown-item">Setting</a>
                      <div class="dropdown-divider"></div>
                      <a href="/" class="dropdown-item">Logout</a>
                    </div>
                  </li>
                  <li class="nav-item">
                    <a href="#" class="nav-link inline-block mt-2">
                      <img src="/bwa-icon/icon-cart.png" alt="">
                      <div class="card-badge">3</div>
                    </a>
                  </li>
                </ul>
                <!-- Mobile Menu -->
                <ul class="navbar-nav d-block d-lg-none">
                  <li class="nav-item">
                    <a href="#" class="nav-link">
                      Hi, Angga
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="#" class="nav-link d-inline-block">
                      Cart
                    </a>
                  </li>
                </ul>
            </div>
          </div>
        </nav>
        <!-- Section Content -->
        @yield('content')
      </div>
    </div>
  </div>


    <!-- Bootstrap core JavaScript -->
    @stack('prepend-script')
    <script src="/vendor/jquery/jquery.min.js"></script>
    <script src="/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/v/bs4/dt-1.13.2/datatables.min.js"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
      AOS.init();
    </script>
    <script>
      $('#menu-toggle').click(function(e) {
        e.preventDefault();
        $('#wrapper').toggleClass('toggled');
      })
    </script>
    @stack('addon-script')
  </body>
</html>


