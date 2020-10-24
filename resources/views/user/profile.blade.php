@extends('partials.user.page')
@section('title', 'Profile - Koperasi Z')
@section('content')


<div class="card" style="width: 1300px; height: 650px;">
    <ul class="list-group list-group-flush">
      <li class="list-group-item">Username : {{$user->username}}</li>
      <li class="list-group-item">Contact : {{$user->contact}}</li>
      <li class="list-group-item">Email : {{$user->email}}</li>
      <li class="list-group-item">Join At : {{$user->created_at}}</li>
      <li class="list-group-item">Update At : {{$user->update_at}}</li>
      <li class="list-group-item">
          <form action="{{url('/user/destroy-account', [$user->id])}}" method="post" onclick = "return confirm('Do You Want To Destroy This Account?')">
        @csrf
        <input type="hidden" name="_method" value="DELETE">
        <button type="submit" class="btn btn-outline-danger">Delete This Account</button>
    </form> </li>
    </ul>
  </div>

 

</div>

@stop



