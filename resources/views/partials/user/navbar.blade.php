@if($user->role_id === "1")
    <title>@yield('title')</title>
<nav class="navbar navbar-expand-lg navbar-light bg-primary">
    <a class="navbar-brand disable " href="{{url('/')}}">Title App</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="{{url('/')}}">Home <span class="sr-only"></span></a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="{{url('/login')}}">Login <span class="sr-only"></span></a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="{{url('/knowledge')}}">Knowledge <span class="sr-only"></span></a>
        </li>
      </ul>
      <mdb-navbar-nav right>

        <mdb-dropdown>
            <mdb-dropdown-toggle slot="toggle" navlink tag="li" class="nav-item avatar" waves-fixed>
                <mdb-icon icon="user-circle" v-if="!loggedIn"/>
                <mdb-avatar v-else>
                    <img alt="{{$user->img_url}}" class="rounded-circle" src="{{$user->img_url}}" style="width: 45px;"/>
                </mdb-avatar>
            </mdb-dropdown-toggle>
            <mdb-dropdown-menu>
                <mdb-dropdown-item :to="{ name: 'profile' }" v-if="loggedIn">{{$user->username}}</mdb-dropdown-item>
                <a href="{{url('/admin/dashboard')}}" class="btn btn-success">Admin Panel</a>
                <a href="{{url('/logout')}}" class="btn btn-danger">Log Out</a>

            </mdb-dropdown-menu>
        </mdb-dropdown>

    </mdb-navbar-nav>
    </div>
  </nav>

  
  @else
    <title>@yield('title')</title>
    <nav class="navbar navbar-expand-lg navbar-light bg-primary">
        <a class="navbar-brand disable " href="{{url('/')}}">Title App</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="{{url('/')}}">Home <span class="sr-only"></span></a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="{{url('/login')}}">Login <span class="sr-only"></span></a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="{{url('/knowledge')}}">Knowledge <span class="sr-only"></span></a>
            </li>
          </ul>
          <mdb-navbar-nav right>
    
            <mdb-dropdown>
                <mdb-dropdown-toggle slot="toggle" navlink tag="li" class="nav-item avatar" waves-fixed>
                    <mdb-icon icon="user-circle" v-if="!loggedIn"/>
                    <mdb-avatar v-else>
                        <img alt="{{$user->img_url}}" class="rounded-circle" src="{{$user->img_url}}" style="width: 45px;"/>
                    </mdb-avatar>
                </mdb-dropdown-toggle>
                <mdb-dropdown-menu>
                    <mdb-dropdown-item :to="{ name: 'profile' }" v-if="loggedIn">{{$user->username}}</mdb-dropdown-item>
                    <a href="{{url('/logout')}}" class="btn btn-danger">Log Out</a>
    
                </mdb-dropdown-menu>
            </mdb-dropdown>
    
        </mdb-navbar-nav>
        </div>
      </nav>

  
  @endif

  @yield('content')
  <!-- CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

<!-- jQuery and JS bundle w/ Popper.js -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap"></script>