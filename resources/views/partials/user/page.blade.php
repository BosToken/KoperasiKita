<title>@yield('title')</title>
<style>
    .img {
  border: 1px solid #ddd;
  border-radius: 4px;
  padding: 5px;
  width: 150px;
}
</style>

<div class="card" style="width: 300px;">
    <img src="{{$user->img_url}}" class="card-img-top" alt="{{$user->img_url}}" style="width: 300px; height: 300px; border-radius: 10%;">
    <div class="card-body">
        <h5 class="card-text text-center">{{$user->username}}</h5>
    <p class="card-text text-center">Joined At : {{$user->created_at}}</p>
    </div>
    <ul class="list-group list-group-flush">
        <li class="list-group-item"><a class="nav-link" href="{{url('/user/dashboard')}}">Dashboard</a></li>
        <li class="list-group-item"><a class="nav-link" href="{{url('/user/dictionary')}}">Dictionary</a></li>
        <li class="list-group-item"><a class="nav-link" href="{{url('/user/journal')}}">Journal</a></li>
        <li class="list-group-item"><a class="nav-link" href="{{url('/user/profile')}}">Profile</a></li>
      </ul>
  </div>


@yield('content')

  <!-- CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

  <!-- jQuery and JS bundle w/ Popper.js -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap"></script>