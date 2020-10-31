@foreach($setting as $settings)
<html>
<head>

<title>@yield('title')</title>

<!-- LINK -->
<link href="{{ url('tmp/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
<link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
<link href="{{ url('tmp/css/sb-admin-2.min.css')}}" rel="stylesheet">

</head>

<body id="page-top">

<!-- Page Wrapper -->
<div id="wrapper">


<ul class="navbar-nav bg-dark sidebar sidebar-dark accordion" id="accordionSidebar">

<!-- Sidebar - Brand -->
<a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{url('/')}}">

  <div class="sidebar-brand-text mx-3">@foreach($setting as $settings){{$settings->app_title}}@endforeach</div>
</a>

<!-- Divider -->
<hr class="sidebar-divider my-0">

<!-- Nav Item - Dashboard -->
<li class="nav-item active">
  <a class="nav-link" href="{{url('/admin/dashboard')}}">
    <i class="fas fa-fw fa-tachometer-alt"></i>
    <span>
      @if($settings->lang === "en")@lang('lang.en.dashboard')
          @elseif($settings->lang === "id")@lang('lang.id.dashboard')
          @elseif($settings->lang === "jp")@lang('lang.jp.dashboard')
          @else Dashboard
          @endif
          </span></a>
</li>
<!-- Divider -->
<hr class="sidebar-divider">

<!-- Nav Item - Pages Collapse Menu -->
<li class="nav-item">
  <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
  <i class="fas fa-barcode"></i>
    <span>
      @if($settings->lang === "en")@lang('lang.en.adminsetting')
          @elseif($settings->lang === "id")@lang('lang.id.adminsetting')
          @elseif($settings->lang === "jp")@lang('lang.jp.adminsetting')
          @else Admin Setting
          @endif
          </span>
  </a>
  <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
    <div class="bg-white py-2 collapse-inner rounded">
      <h6 class="collapse-header"></h6>
      <a class="collapse-item" href="{{url('/admin/admin/setting')}}">
        @if($settings->lang === "en")@lang('lang.en.adminsetting')
          @elseif($settings->lang === "id")@lang('lang.id.adminsetting')
          @elseif($settings->lang === "jp")@lang('lang.jp.adminsetting')
          @else Admin Setting
          @endif
          </a>

      <h6 class="collapse-header"></h6>
      <a class="collapse-item" href="{{url('/admin/user/setting')}}">
        @if($settings->lang === "en")@lang('lang.en.usersetting')
          @elseif($settings->lang === "id")@lang('lang.id.usersetting')
          @elseif($settings->lang === "jp")@lang('lang.jp.usersetting')
          @else User Setting
          @endif </a>
    </div>
  </div>
</li>

<li class="nav-item">
  <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseUtilities">
  <i class="fas fa-barcode"></i>
    <span>
      @if($settings->lang === "en")@lang('lang.en.datasetting')
          @elseif($settings->lang === "id")@lang('lang.id.datasetting')
          @elseif($settings->lang === "jp")@lang('lang.jp.datasetting')
          @else Data Setting
          @endif
          </span>
  </a>
  <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
    
    <div class="bg-white py-2 collapse-inner rounded">

      <h6 class="collapse-header"></h6>
      <a class="collapse-item" href="{{url('/admin/coa')}}">
        @if($settings->lang === "en")@lang('lang.en.coa')
          @elseif($settings->lang === "id")@lang('lang.id.coa')
          @elseif($settings->lang === "jp")@lang('lang.jp.coa')
          @else Coa [Chart Of Account]
          @endif
          </a>

      <h6 class="collapse-header"></h6>
      <a class="collapse-item" href="{{url('/admin/dictionary')}}">
        @if($settings->lang === "en")@lang('lang.en.dictionary')
          @elseif($settings->lang === "id")@lang('lang.id.dictionary')
          @elseif($settings->lang === "jp")@lang('lang.jp.dictionary')
          @else Dictionary
          @endif
          </a>

      <h6 class="collapse-header"></h6>
      <a class="collapse-item" href="{{url('/admin/journal')}}">
        @if($settings->lang === "en")@lang('lang.en.journal')
          @elseif($settings->lang === "id")@lang('lang.id.journal')
          @elseif($settings->lang === "jp")@lang('lang.jp.journal')
          @else Journal
          @endif
          </a>

      <h6 class="collapse-header"></h6>
      <a class="collapse-item" href="{{url('/admin/system-log')}}">
        @if($settings->lang === "en")@lang('lang.en.systemlog')
          @elseif($settings->lang === "id")@lang('lang.id.systemlog')
          @elseif($settings->lang === "jp")@lang('lang.jp.systemlog')
          @else System Log
          @endif
          </a>

      <h6 class="collapse-header"></h6>
      <a class="collapse-item" href="{{url('/admin/post')}}">
        @if($settings->lang === "en")@lang('lang.en.post')
          @elseif($settings->lang === "id")@lang('lang.id.post')
          @elseif($settings->lang === "jp")@lang('lang.jp.post')
          @else Post
          @endif
          </a>

      <h6 class="collapse-header"></h6>
      <a class="collapse-item" href="{{url('/admin/transaction')}}">
        @if($settings->lang === "en")@lang('lang.en.transaction')
          @elseif($settings->lang === "id")@lang('lang.id.transaction')
          @elseif($settings->lang === "jp")@lang('lang.jp.transaction')
          @else transaction
          @endif
          </a>
    </div>

  </div>
</li>

<li class="nav-item">
  <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseThree" aria-expanded="true" aria-controls="collapseUtilities">
  <i class="fas fa-barcode"></i>
    <span>
      @if($settings->lang === "en")@lang('lang.en.userpage')
          @elseif($settings->lang === "id")@lang('lang.id.userpage')
          @elseif($settings->lang === "jp")@lang('lang.jp.userpage')
          @else User Page
          @endif
          </span>
  </a>
  
  <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionSidebar">
    
    <div class="bg-white py-2 collapse-inner rounded">
      <h6 class="collapse-header"></h6>
      <a class="collapse-item" href="{{url('/user/dashboard')}}">
        @if($settings->lang === "en")@lang('lang.en.dashboard')
          @elseif($settings->lang === "id")@lang('lang.id.dashboard')
          @elseif($settings->lang === "jp")@lang('lang.jp.dashboard')
          @else Dashboard
          @endif
           </a>

           <h6 class="collapse-header"></h6>
           <a class="collapse-item" href="{{url('/user/coa')}}">
            @if($settings->lang === "en")@lang('lang.en.coa')
            @elseif($settings->lang === "id")@lang('lang.id.coa')
            @elseif($settings->lang === "jp")@lang('lang.jp.coa')
            @else Coa[Chart Of Account]
            @endif
          </a>

          <h6 class="collapse-header"></h6>
          <a class="collapse-item" href="{{url('/user/post')}}">
            @if($settings->lang === "en")@lang('lang.en.post')
            @elseif($settings->lang === "id")@lang('lang.id.post')
            @elseif($settings->lang === "jp")@lang('lang.jp.post')
            @else Posting
            @endif
          </a>

          <h6 class="collapse-header"></h6>
          <a class="collapse-item" href="{{url('/user/transaction')}}">
            @if($settings->lang === "en")@lang('lang.en.transaction')
            @elseif($settings->lang === "id")@lang('lang.id.transaction')
            @elseif($settings->lang === "jp")@lang('lang.jp.transaction')
            @else Transaction
            @endif
          </a>

      <h6 class="collapse-header"></h6>
      <a class="collapse-item" href="{{url('/user/dictionary')}}">
        @if($settings->lang === "en")@lang('lang.en.dictionary')
          @elseif($settings->lang === "id")@lang('lang.id.dictionary')
          @elseif($settings->lang === "jp")@lang('lang.jp.dictionary')
          @else Dictionary
          @endif
          </a>

      <h6 class="collapse-header"></h6>
      <a class="collapse-item" href="{{url('/user/journal')}}">
        @if($settings->lang === "en")@lang('lang.en.journal')
          @elseif($settings->lang === "id")@lang('lang.id.journal')
          @elseif($settings->lang === "jp")@lang('lang.jp.journal')
          @else Journal
          @endif
          </a>

          <h6 class="collapse-header"></h6>
          <a class="collapse-item" href="{{url('/user/system-log')}}">
            @if($settings->lang === "en")@lang('lang.en.systemlog')
            @elseif($settings->lang === "id")@lang('lang.id.systemlog')
            @elseif($settings->lang === "jp")@lang('lang.jp.systemlog')
            @else System Log
            @endif
          </a>

      <h6 class="collapse-header"></h6>
      <a class="collapse-item" href="{{url('/user/profile')}}">
        @if($settings->lang === "en")@lang('lang.en.profile')
          @elseif($settings->lang === "id")@lang('lang.id.profile')
          @elseif($settings->lang === "jp")@lang('lang.jp.profile')
          @else Profile
          @endif
          </a>
    </div>

  </div>
</li>

<!-- Divider -->
<hr class="sidebar-divider d-none d-md-block">
<!-- Sidebar Toggler (Sidebar) -->
<div class="text-center d-none d-md-inline">
  <button class="rounded-circle border-0" id="sidebarToggle"></button>
</div>

</ul>

<div id="content-wrapper" class="d-flex flex-column">

<div id="content">
  
  <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

    <div class="container">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="collapsibleNavbar">

      <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>

          <ul class="navbar-nav ml-auto ">
            <div class="topbar-divider d-none d-sm-block"></div>

            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small"></span>
                {{$user->username}}
              </a>

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
  
  <div class="container-fluid">
  @yield('container')
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

  <!-- SCRIPT -->
  <script src="{{ url('tmp/vendor/jquery/jquery.min.js') }}"></script>
  <script src="{{ url('tmp/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

  <!-- Core plugin JavaScript-->
  <script src="{{ url('tmp/vendor/jquery-easing/jquery.easing.min.js') }}"></script>

  <!-- Custom scripts for all pages-->
  <script src="{{ url('tmp/js/sb-admin-2.min.js') }}"></script>

  <!-- Page level plugins -->
  <script src="{{ url('tmp/vendorchart.js/Chart.min.js') }}"></script>

  <!-- Page level custom scripts -->
  <script src="{{ url('tmp/js/demo/chart-area-demo.js') }}"></script>
  <script src="{{ url('tmp/js/demo/chart-pie-demo.js') }}"></script>
  </body>
  </html>
  @endforeach

  