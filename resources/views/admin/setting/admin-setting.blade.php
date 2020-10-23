<!-- LINK -->

<link href="{{ url('tmp/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
<link
    href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
    rel="stylesheet">

<!-- Custom styles for this template-->
<link href="{{ url('tmp/css/sb-admin-2.min.css')}}" rel="stylesheet">

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">


        <ul class="navbar-nav bg-dark sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{url('/')}}">
                <!-- <div class="sidebar-brand-icon rotate-n-15">
    <i class="fas fa-laugh-wink"></i>
  </div> -->
                <div class="sidebar-brand-text mx-3">@foreach($setting as $settings){{$settings->app_title}}@endforeach</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="{{url('/admin/dashboard')}}">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>
            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
                    aria-expanded="true" aria-controls="collapseUtilities">
                    <i class="fas fa-barcode"></i>
                    <span>Admin Setting</span>
                </a>
                <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header"></h6>
                        <a class="collapse-item" href="{{url('/admin/admin/setting')}}">Admin Setting </a>
                    </div>
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header"></h6>
                        <a class="collapse-item" href="{{url('/admin/user/setting')}}">User Setting</a>
                    </div>
                </div>
            </li>

            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseUtilities">
                    <i class="fas fa-barcode"></i>
                    <span>Data Setting</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">

                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header"></h6>
                        <a class="collapse-item" href="{{url('/admin/dashboard')}}">Dashboard</a>
                    </div>

                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header"></h6>
                        <a class="collapse-item" href="{{url('/admin/coa')}}">Coa [Chart Of Account]</a>
                    </div>

                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header"></h6>
                        <a class="collapse-item" href="{{url('/admin/dictionary')}}">Dictionary</a>
                    </div>

                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header"></h6>
                        <a class="collapse-item" href="{{url('/admin/journal')}}">Journal</a>
                    </div>

                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header"></h6>
                        <a class="collapse-item" href="{{url('/admin/system-log')}}">System Log</a>
                    </div>

                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header"></h6>
                        <a class="collapse-item" href="{{url('/admin/post')}}">Post</a>
                    </div>

                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header"></h6>
                        <a class="collapse-item" href="{{url('/admin/transaction')}}">Transaction</a>
                    </div>

                </div>
            </li>

            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseThree"
                    aria-expanded="true" aria-controls="collapseUtilities">
                    <i class="fas fa-barcode"></i>
                    <span>User Page</span>
                </a>
                <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionSidebar">

                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header"></h6>
                        <a class="collapse-item" href="{{url('/user/dashboard')}}">User Dashboard </a>
                    </div>

                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header"></h6>
                        <a class="collapse-item" href="{{url('/user/dashboard')}}">User Dictionary</a>
                    </div>

                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header"></h6>
                        <a class="collapse-item" href="{{url('/user/journal')}}">User Journal</a>
                    </div>

                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header"></h6>
                        <a class="collapse-item" href="{{url('/user/profile')}}">User Profile</a>
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
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">


            <!-- Main Content -->
            <div id="content">


                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
                    <!-- Brand/logo -->
                    <div class="container">
                        <button class="navbar-toggler" type="button" data-toggle="collapse"
                            data-target="#collapsibleNavbar">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="collapsibleNavbar">
                            <!-- Links -->
                            <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                                <i class="fa fa-bars"></i>
                            </button>


                            <!-- Topbar Navbar -->
                            <ul class="navbar-nav ml-auto ">
                                <div class="topbar-divider d-none d-sm-block"></div>

                                <!-- Nav Item - User Information -->
                                <li class="nav-item dropdown no-arrow">
                                    <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <span class="mr-2 d-none d-lg-inline text-gray-600 small"></span>
                                        {{$user->username}}
                                    </a>
                                    <!-- Dropdown - User Information -->
                                    <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                        aria-labelledby="userDropdown">

                                        <a class="dropdown-item" href="{{url('/logout')}}" data-toggle="modal"
                                            data-target="#logoutModal">
                                            Logout
                                        </a>
                                    </div>
                                </li>

                            </ul>
                        </div>
                    </div>
                </nav>


                <table class="table">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">Admin Setting</th>
                        </tr>
                    </thead>
                </table>

                @foreach($setting as $settings)
                <form action="{{url('/admin/admin/setting/update', [$settings->id])}}" method="post">
                    {{ csrf_field() }}
                    @method('PUT')

                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="app_title" name="app_title" for="app_title">App Title</span>
                        </div>
                        <input id="app_title" name="app_title" for="app_title" type="text" class="form-control" value="{{$settings->app_title}}"
                            placeholder="{{$settings->app_title}}">
                    </div>

                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <label class="input-group-text" id="lang" name="lang" for="lang">Language</label>
                        </div>
                        <select class="custom-select" id="lang" name="lang" for="lang">
                            <option selected="selected"
                            value="{{$settings->lang}}">
                                @if($settings->lang === "en")English
                                @elseif($settings->lang === "id")Indonesia
                                @elseif($settings->lang === "jp")Japanese
                                @else Nothing
                                @endif
                            </option>
                            <option value="en">English</option>
                            <option value="id">Indonesia</option>
                            <option value="jp">Japanese</option>
                        </select>
                    </div>

                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="email" name="email" for="email">Email</span>
                        </div>
                        <input id="email" name="email" for="email" type="text" class="form-control" value="{{$settings->email}}"
                            placeholder="{{$settings->email}}">
                    </div>

                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="img_url" name="img_url" for="img_url">Img App</span>
                        </div>
                        <input id="img_url" name="img_url" for="img_url" type="text" class="form-control" value="{{$settings->img_url}}"
                            placeholder="{{$settings->img_url}}">
                    </div>

                    <div class="panel-footer text-right">
                        <button type="submit" class="btn btn-outline-success"><i class="fa fa-save"></i> Save</button>
                    </div>
                </form>

                @endforeach

                <!-- Logout Modal-->
                <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
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
            <!-- End of Content Wrapper -->

        </div>
        <!-- End of Page Wrapper -->

</body>

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