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
                            <th scope="col">User Setting</th>
                        </tr>
                    </thead>
                </table>

                <table class="table table-striped">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Username</th>
                        <th scope="col">Contact</th>
                        <th scope="col">Email</th>
                        <th scope="col">Role</th>
                        <th scope="col">Join At</th>
                        <th scope="col">Update At</th>
                        <th scope="col">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach($userrole as $userroles)
                      <tr>
                        <th scope="row"></th>
                        <td>{{$userroles->username}}</td>
                        <td>{{$userroles->contact}}</td>
                        <td>{{$userroles->email}}</td>
                        <td>
                            @if($userroles->role_id === "1")
                            Admin
                            @elseif($userroles->role_id === "2")
                            User
                            @else Not Have role
                            @endif
                        </td>
                        <td>{{$userroles->created_at}}</td>
                        <td>{{$userroles->update_at}}</td>
                        @if($userroles->role_id === "1")
                        <td>Can't Update</td>
                        @else
                        <td><button type="submit" class="btn btn-outline-primary" data-toggle="modal" data-target="#edit{{$userroles->id}}">Edit</button>
                        <form action="{{url('/admin/user/setting/destroy-account', [$userroles->id])}}" method="post" onclick = "return confirm('Do You Want To Destroy This Account?')">
                            @csrf
                            <input type="hidden" name="_method" value="DELETE">
                            <button type="submit" class="btn btn-outline-danger">Delete User</button>
                        </form>
                        </td>
                        

                        <div class="modal fade" id="edit{{$userroles->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <form action="{{url('/admin/user/setting/update', [$userroles->id])}}" method="POST">
                                {{ csrf_field() }}
                                @method('PUT')
                              <div class="modal-dialog">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Edit User</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                      <span aria-hidden="true">&times;</span>
                                    </button>
                                  </div>
                                  <div class="modal-body">
                                      <div class="row">
                                          <div class="col-md-12">
                                              <div class="form-group">
                                                  Username
                                                  <input id = "username" name="username"  for="username" type="username" class="form-control" placeholder="{{$userroles->username}}" value="{{$userroles->username}}" >
                                              </div>
                                          </div>
                                      </div>
                                      <div class="row">
                                          <div class="col-md-12">
                                              <div class="form-group">
                                                  Contact
                                                  <input id = "contact" name="contact"  for="contact" type="contact" class="form-control" placeholder="{{$userroles->contact}}" value="{{$userroles->contact}}" >
                                              </div>
                                          </div>
                                      </div>
                                      <div class="row">
                                          <div class="col-md-12">
                                              <div class="form-group">
                                                  Email
                                                  <input id = "email" name="email"  for="email" type="email" class="form-control" placeholder="{{$userroles->email}}" value="{{$userroles->email}}" >
                                              </div>
                                          </div>
                                      </div>
                                      <div class="row">
                                          <div class="col-md-12">
                                              <div class="form-group">
                                                  Password
                                                  <input id = "password" name="password"  for="password" type="text" class="form-control" placeholder="{{$userroles->password}}" value="{{$userroles->password}}" >
                                              </div>
                                          </div>
                                      </div>
                                      <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                Role
                                                <div class="input-group mb-3">
                                                    <div class="input-group-prepend">
                                                    </div>
                                                    <select class="custom-select" id = "role_id" name="role_id"  for="role_id">
                                                      <option selected value="{{$userroles->role_id}}">
                                                        @if($userroles->role_id === "1")Admin
                                                        @elseif($userroles->role_id === "2")User
                                                        @else Not Have role
                                                        @endif
                                                    </option>
                                                      <option value="1">Admin</option>
                                                      <option value="2">User</option>
                                                    </select>
                                                  </div>
                                            </div>
                                        </div>
                                    </div>
                                  </div>
                                  <div class="modal-footer mx-5 pt-3 mb-1">
                                    <button type="dissmis" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                  <button type="submit" class="btn btn-success">Save</button>
                                </div>
                                </div>
                              </div>
                          </form>
                          </div>
                          @endif

                      </tr>
                      @endforeach
                    </tbody>
                  </table>

               

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