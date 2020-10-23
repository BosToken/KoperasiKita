<html>
<head>
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
        <!-- CSS only -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.1/css/bootstrap.min.css" integrity="sha384-VCmXjywReHh4PwowAiWNagnWcLhlEJLA5buUprzK8rxFgeH0kww/aWY76TfkUoSX" crossorigin="anonymous">
  <link rel="stylesheet" href="bootsnav.css">
  <script src="bootsnav.js"></script>
  <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
  <script type="text/javascript" src="js/jquery.js"></script>
  <script type="text/javascript" src="js/bootstrap.js"></script>

  <!-- JS, Popper.js, and jQuery -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.1/js/bootstrap.min.js" integrity="sha384-XEerZL0cuoUbHE4nZReLT7nx9gQrQreJekYhJD9WNWhH8nEW+0c5qq7aIo2Wl30J" crossorigin="anonymous"></script>
</head>

<body>
@if($user->role_id === "1")
    <title>@yield('title')</title>
    <nav class="navbar navbar-expand navbar-light bg-dark topbar mb-4 static-top shadow">
    <!-- Brand/logo -->
    <div class="container">
    <a class="navbar-brand" href="/">App Title</a>
    
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="collapsibleNavbar">
      <!-- Links -->
      <ul class="navbar-nav ml-auto" style="font-family: Arial, Helvetica, sans-serif; font-size: larger; color:white;">
        <li class="nav-item">
          <a class="nav-link active" href="{{url('/knowledge')}}">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{url('/knowledge')}}">Login</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{url('/knowledge')}}">Knowledge</a>
        </li>
      </ul>
      <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>

          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">
            <div class="topbar-divider d-none d-sm-block"></div>
            <img src="{{$user->img_url}}" alt="{{$user->img_url}}" style="width: 50px; height: 50px;"></i>

            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small"></span>
                {{$user->username}}
              </a>
              <!-- Dropdown - User Information -->
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                  <a class="dropdown-item" href="{{url('/admin/dashboard')}}"><i class="icon-envelope"></i> Admin Panel</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="{{url('/logout')}}" data-toggle="modal" data-target="#logoutModal">
                  Logout
                </a>
              </div>
            </li>

          </ul>
    </div>
  </div>
  </nav>
  
        <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Bersedia untuk keluar ?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Apakah Anda ingin keluar?</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="{{url('/logout')}}">Logout</a>
        </div>
      </div>
    </div>
  </div>
     <!-- <mdb-navbar-nav right>

        <mdb-dropdown>
            <mdb-dropdown-toggle slot="toggle" navlink tag="li" class="nav-item avatar" waves-fixed>
                <mdb-icon icon="user-circle" v-if="!loggedIn"/>
                <mdb-avatar v-else>
                    <img alt="{{$user->img_url}}" class="rounded-circle" src="{{$user->img_url}}" style="width: 45px;"/>
                </mdb-avatar>
            </mdb-dropdown-toggle>
            <mdb-dropdown-menu>
                <mdb-dropdown-item :to="{ name: 'profile' }" v-if="loggedIn">{{$user->username}}</mdb-dropdown-item>
                <a href="{{url('/admin/dashboard')}}" class="btn btn-success">ADMIN PANEL</a>
                <a href="{{url('/logout')}}" class="btn btn-danger">LOG OUT</a>

            </mdb-dropdown-menu>
        </mdb-dropdown>

    </mdb-navbar-nav> -->

  
  @else
  <title>@yield('title')</title>
  <nav class="navbar navbar-expand navbar-light bg-dark topbar mb-4 static-top shadow">
  <!-- Brand/logo -->
  <div class="container">
  <a class="navbar-brand" href="/">App Title</a>
  
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <!-- Links -->
    <ul class="navbar-nav ml-auto" style="font-family: Arial, Helvetica, sans-serif; font-size: larger; color:white;">
      <li class="nav-item">
        <a class="nav-link active" href="{{url('/knowledge')}}">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{url('/knowledge')}}">Login</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{url('/knowledge')}}">Knowledge</a>
      </li>
    </ul>
    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
          <i class="fa fa-bars"></i>
        </button>

        <!-- Topbar Navbar -->
        <ul class="navbar-nav ml-auto">
          <div class="topbar-divider d-none d-sm-block"></div>
          <img src="{{$user->img_url}}" alt="{{$user->img_url}}" style="width: 50px; height: 50px;"></i>

          <!-- Nav Item - User Information -->
          <li class="nav-item dropdown no-arrow">
            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <span class="mr-2 d-none d-lg-inline text-gray-600 small"></span>
              {{$user->username}}
            </a>
            <!-- Dropdown - User Information -->
            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
              <a class="dropdown-item" href="{{url('/logout')}}" data-toggle="modal" data-target="#logoutModal">
                Logout
              </a>
            </div>
          </li>

        </ul>
  </div>
</div>
</nav>

      <!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Bersedia untuk keluar ?</h5>
        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body">Apakah Anda ingin keluar?</div>
      <div class="modal-footer">
        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
        <a class="btn btn-primary" href="{{url('/logout')}}">Logout</a>
      </div>
    </div>
  </div>
</div>
   <!-- <mdb-navbar-nav right>

      <mdb-dropdown>
          <mdb-dropdown-toggle slot="toggle" navlink tag="li" class="nav-item avatar" waves-fixed>
              <mdb-icon icon="user-circle" v-if="!loggedIn"/>
              <mdb-avatar v-else>
                  <img alt="{{$user->img_url}}" class="rounded-circle" src="{{$user->img_url}}" style="width: 45px;"/>
              </mdb-avatar>
          </mdb-dropdown-toggle>
          <mdb-dropdown-menu>
              <mdb-dropdown-item :to="{ name: 'profile' }" v-if="loggedIn">{{$user->username}}</mdb-dropdown-item>
              <a href="{{url('/admin/dashboard')}}" class="btn btn-success">ADMIN PANEL</a>
              <a href="{{url('/logout')}}" class="btn btn-danger">LOG OUT</a>

          </mdb-dropdown-menu>
      </mdb-dropdown>

  </mdb-navbar-nav> -->

  
  @endif

  @yield('content')
  <!-- CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

<!-- jQuery and JS bundle w/ Popper.js -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap"></script>
<script type="text/javascript">
    $(document).ready(function(){
          $('ul li a').click(function(){
            $('li a').removeClass("active");
            $(this).addClass("active");
        });
    });
</script>


</html>