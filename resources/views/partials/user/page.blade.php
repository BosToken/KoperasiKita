<!-- FITUR -->
@foreach($setting as $settings)
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<html>
<head> 

<title>@yield('title')</title>
<!-- CSS -->
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
		
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="{{ url('tes/css/style.css')}}">
</head>
<body>
<div class="wrapper d-flex align-items-stretch">
			<nav id="sidebar">
				<div class="p-4 pt-5">
          <a href="#"><img src="{{$user->img_url}}" class="img logo rounded-circle mb-5" width="200" height="200" alt=""></a>
          <h5 class="card-text text-center">{{$user->username}}</h5>
          <p class="card-text text-center">
            @if($settings->lang === "en")@lang('lang.en.joinedat')
                  @elseif($settings->lang === "id")@lang('lang.id.joinedat')
                  @elseif($settings->lang === "jp")@lang('lang.jp.joinedat')
                  @else Joined At :
                  @endif {{$user->created_at}}</p>
	        <ul class="list-unstyled components mb-3">
            <li>
              <a href="{{url('/user/dashboard')}}">
                  @if($settings->lang === "en")@lang('lang.en.dashboard')
                  @elseif($settings->lang === "id")@lang('lang.id.dashboard')
                  @elseif($settings->lang === "jp")@lang('lang.jp.dashboard')
                  @else Dashboard
                  @endif
                </a>
	          </li>
          <li>
              <a href="{{url('/user/coa')}}">
                @if($settings->lang === "en")@lang('lang.en.coa')
                @elseif($settings->lang === "id")@lang('lang.id.coa')
                @elseif($settings->lang === "jp")@lang('lang.jp.coa')
                @else Coa[Chart Of Account]
                @endif
              </a>
          </li>
          <li>
            <a href="{{url('/user/post')}}">
              @if($settings->lang === "en")@lang('lang.en.post')
              @elseif($settings->lang === "id")@lang('lang.id.post')
              @elseif($settings->lang === "jp")@lang('lang.jp.post')
              @else Posting
              @endif
            </a>
          </li>
          <li>
            <a href="{{url('/user/transaction')}}">
              @if($settings->lang === "en")@lang('lang.en.transaction')
              @elseif($settings->lang === "id")@lang('lang.id.transaction')
              @elseif($settings->lang === "jp")@lang('lang.jp.transaction')
              @else Transaction
              @endif
            </a>
          </li>
	          <li>
                <a href="{{url('/user/dictionary')}}">
                  @if($settings->lang === "en")@lang('lang.en.dictionary')
                  @elseif($settings->lang === "id")@lang('lang.id.dictionary')
                  @elseif($settings->lang === "jp")@lang('lang.jp.dictionary')
                  @else Dictionary
                  @endif
                </a>
	          </li>
	          <li>
              <a href="{{url('/user/journal')}}">
                  @if($settings->lang === "en")@lang('lang.en.journal')
                  @elseif($settings->lang === "id")@lang('lang.id.journal')
                  @elseif($settings->lang === "jp")@lang('lang.jp.journal')
                  @else Journal
                  @endif</a>
	          </li>
            <li>
              <a href="{{url('/user/system-log')}}">
                @if($settings->lang === "en")@lang('lang.en.systemlog')
                @elseif($settings->lang === "id")@lang('lang.id.systemlog')
                @elseif($settings->lang === "jp")@lang('lang.jp.systemlog')
                @else System Log
                @endif
              </a>
            </li>
	          <li>
              <a href="{{url('/user/profile')}}">
                  @if($settings->lang === "en")@lang('lang.en.profile')
                  @elseif($settings->lang === "id")@lang('lang.id.profile')
                  @elseif($settings->lang === "jp")@lang('lang.jp.profile')
                  @else Profile
                  @endif</a>
	          </li>
	        </ul>
	      </div>
    	</nav>

        <!-- Page Content  -->
      <div id="content" class="p-4 p-md-5">
      @if($user->role_id === "1")
    <nav class="navbar navbar-expand navbar-light topbar mb-4 static-top shadow">
    <!-- Brand/logo -->
    <div class="container">
          <button type="button" id="sidebarCollapse" class="btn btn-primary" style="padding-left: 10px;">
              <i class="fa fa-bars"></i>
              <span class="sr-only">Toggle Menu</span>
            </button> 
    <a class="navbar-brand" href="{{url('/')}}" style="padding-left: 80px;">{{$settings->app_title}}</a>
    
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="collapsibleNavbar">
      <!-- Links -->
      <ul class="navbar-nav ml-auto" style="font-family: Arial, Helvetica, sans-serif; font-size: larger;">
        <li class="nav-item">
          <a class="nav-link active" href="{{url('/')}}">
                  @if($settings->lang === "en")@lang('lang.en.home')
                  @elseif($settings->lang === "id")@lang('lang.id.home')
                  @elseif($settings->lang === "jp")@lang('lang.jp.home')
                  @else Home
                  @endif
                </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{url('/login')}}">
                  @if($settings->lang === "en")@lang('lang.en.login')
                  @elseif($settings->lang === "id")@lang('lang.id.login')
                  @elseif($settings->lang === "jp")@lang('lang.jp.login')
                  @else Login
                  @endif
                </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{url('/knowledge')}}">
                  @if($settings->lang === "en")@lang('lang.en.knowledge')
                  @elseif($settings->lang === "id")@lang('lang.id.knowledge')
                  @elseif($settings->lang === "jp")@lang('lang.jp.knowledge')
                  @else Knowledge
                  @endif
                </a>
        </li>
      </ul>
      <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>

          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">
            <div class="topbar-divider d-none d-sm-block"></div>
            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small"></span>
                <img src="{{$user->img_url}}" width="40" height="40" class="rounded-circle" alt=""/> 
              </a>
              <!-- Dropdown - User Information -->
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                  <span class="dropdown-item ">{{$user->username}}</span>
                  <a class="dropdown-item" href="{{url('/admin/dashboard')}}"><i class="icon-envelope"></i>
                    @if($settings->lang === "en")@lang('lang.en.adminpanel')
                  @elseif($settings->lang === "id")@lang('lang.id.adminpanel')
                  @elseif($settings->lang === "jp")@lang('lang.jp.adminpanel')
                  @else Admin Panel
                  @endif</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="{{url('/logout')}}" data-toggle="modal" data-target="#logoutModal">
                  
                  @if($settings->lang === "en")@lang('lang.en.logout')
                  @elseif($settings->lang === "id")@lang('lang.id.logout')
                  @elseif($settings->lang === "jp")@lang('lang.jp.logout')
                  @else Logout
                  @endif
                </a>
              </div>
            </li>

          </ul>
    </div>
  </div>
  </nav>

  @else
  <nav class="navbar navbar-expand navbar-light topbar mb-4 static-top shadow">
  <!-- Brand/logo -->
  <div class="container">
            <button type="button" id="sidebarCollapse" class="btn btn-primary">
              <i class="fa fa-bars"></i>
              <span class="sr-only">Toggle Menu</span>
            </button>
  <a class="navbar-brand" href="{{url('/')}}">@foreach($setting as $settings){{$settings->app_title}}@endforeach</a>
  
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <!-- Links -->
    <ul class="navbar-nav ml-auto" style="font-family: Arial, Helvetica, sans-serif; font-size: larger;">
      <li class="nav-item">
        <a class="nav-link active" href="{{url('/')}}">
          @if($settings->lang === "en")@lang('lang.en.home')
          @elseif($settings->lang === "id")@lang('lang.id.home')
          @elseif($settings->lang === "jp")@lang('lang.jp.home')
          @else home
          @endif</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{url('/login')}}">
          @if($settings->lang === "en")@lang('lang.en.login')
          @elseif($settings->lang === "id")@lang('lang.id.login')
          @elseif($settings->lang === "jp")@lang('lang.jp.login')
          @else Login
          @endif
          </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{url('/knowledge')}}">
          @if($settings->lang === "en")@lang('lang.en.knowledge')
          @elseif($settings->lang === "id")@lang('lang.id.knowledge')
          @elseif($settings->lang === "jp")@lang('lang.jp.knowledge')
          @else Knowledge
          @endif
          </a>
      </li>
    </ul>
    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
          <i class="fa fa-bars"></i>
        </button>

        <!-- Topbar Navbar -->
        <ul class="navbar-nav ml-auto">
          <div class="topbar-divider d-none d-sm-block"></div>
          <a class="navbar-brand" href="#">
         <img src="{{$user->img_url}}" width="40" height="40" class="rounded-circle" alt=""/> 
          </a>

          <!-- Nav Item - User Information -->
          <li class="nav-item dropdown no-arrow">
            <a class="nav-link" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <span class="mr-2 d-none d-lg-inline text-gray-600 small"></span>
              {{$user->username}}
            </a>
            <!-- Dropdown - User Information -->
            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
              <a class="dropdown-item" href="{{url('/logout')}}" data-toggle="modal" data-target="#logoutModal">
                @if($settings->lang === "en")@lang('lang.en.logout')
          @elseif($settings->lang === "id")@lang('lang.id.logout')
          @elseif($settings->lang === "jp")@lang('lang.jp.logout')
          @else Logout
          @endif
          
              </a>
            </div>
          </li>

        </ul>
  </div>
</div>
</nav>
  @endif

  <div class="container-fluid">
  <div class="row">
  @yield('container')
  </div>
  </div>

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
    </div>
		</div>



  <!-- CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

  <!-- jQuery and JS bundle w/ Popper.js -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap"></script>

  
    <script src="{{ url('tes/js/jquery.min.js')}}"></script>
    <script src="{{ url('tes/js/popper.js')}}"></script>
    <script src="{{ url('tes/js/bootstrap.min.js')}}"></script>
    <script src="{{ url('tes/js/main.js')}}"></script>

</body>
</html>
@endforeach