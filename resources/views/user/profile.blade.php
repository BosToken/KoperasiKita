@extends('partials.user.page')
@section('title', 'Profile - Koperasi Z')
@section('container')

<div class="container rounded bg-white mt-5">
    <div class="row">
        <div class="col-md-4 border-right">
            <div class="d-flex flex-column align-items-center text-center p-3 py-5"><img class="rounded-circle mt-5" src="{{$user->img_url}}" width="200" height="200"><span class="font-weight-bold">{{$user->username}}</span><span class="text-black-50">Joined At : {{$user->created_at}}</span></div>
        </div>
        <div class="col-md-8">
            <div class="p-3 py-5">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h6 class="text-right">Profile Setting</h6>
                </div>

                <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        Username
                        <input name="title" type="text" class="form-control" placeholder="{{$user->username}}" disabled>
                    </div>
                </div>
                </div>

                <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        Contact
                        <input name="contact" type="text" class="form-control" placeholder="{{$user->contact}}" disabled>
                    </div>
                </div>
                </div>

                <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        Email
                        <input name="email" type="text" class="form-control" placeholder="{{$user->email}}" disabled>
                    </div>
                </div>
                </div>

                <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        Joined At
                        <input name="created_at" type="text" class="form-control" placeholder="{{$user->created_at}}" disabled>
                    </div>
                </div>
                </div>

                <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        Updated At
                        <input name="update_at" type="text" class="form-control" placeholder="{{$user->updated_at}}" disabled>
                    </div>
                </div>
                </div>

              <div class="mt-5 text-right">
            <form action="{{url('/user/destroy-account', [$user->id])}}" method="post" onclick = "return confirm('Do You Want To Destroy This Account?')">
              @csrf
              <input type="hidden" name="_method" value="DELETE">
              <button type="submit" class="btn btn-primary profile-button">Delete This Account</button>
            </form>
            </div>

            </div>
        </div>
    </div>
</div>

@stop



