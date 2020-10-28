@foreach($setting as $settings)
@extends('partials.navbar')
@section('title', 'Login Or Register - Koperasi Z')
@section('content')


<!-- CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

<!-- jQuery and JS bundle w/ Popper.js -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
<div class="w-auto p-5">
<h1><p class="text-center">
    @if($settings->lang === "en")@lang('lang.en.REQUEST TO LOGIN, PLEASE LOGIN')
                @elseif($settings->lang === "id")@lang('lang.id.REQUEST TO LOGIN, PLEASE LOGIN')
                @elseif($settings->lang === "jp")@lang('lang.jp.REQUEST TO LOGIN, PLEASE LOGIN')
                @else REQUEST TO LOGIN, PLEASE LOGIN
                @endif
                </p></h1>
</div>

<center>
<button type="button" class="btn btn-outline-success w-25 p-3" data-toggle="modal" data-target="#login">
    @if($settings->lang === "en")@lang('lang.en.login')
                @elseif($settings->lang === "id")@lang('lang.id.login')
                @elseif($settings->lang === "jp")@lang('lang.jp.login')
                @else Login
                @endif
                </button>
</center>

<div class="w-auto p-5">
    <h3><p class="text-center">
        @if($settings->lang === "en")@lang('lang.en.OR')
                @elseif($settings->lang === "id")@lang('lang.id.OR')
                @elseif($settings->lang === "jp")@lang('lang.jp.OR')
                @else OR
                @endif
                </p></h3>
</div>

<center>
    <button type="button" class="btn btn-outline-info w-25 p-3" data-toggle="modal" data-target="#register">
        @if($settings->lang === "en")@lang('lang.en.REGISTER')
                @elseif($settings->lang === "id")@lang('lang.id.REGISTER')
                @elseif($settings->lang === "jp")@lang('lang.jp.REGISTER')
                @else REGISTER
                @endif
                </button>
</center>

<form action="{{url('/login/check')}}" method="POST">
    {{ csrf_field() }}
  <div class="modal fade" id="login" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
        <h3 class="modal-title w-80 dark-grey-text my-3" id="myModalLabel"><strong>
            @if($settings->lang === "en")@lang('lang.en.login')
            @elseif($settings->lang === "id")@lang('lang.id.login')
            @elseif($settings->lang === "jp")@lang('lang.jp.login')
            @else Login
            @endif</strong></h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        </div>
        <div class="modal-body">
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        @if($settings->lang === "en")@lang('lang.en.email')
          @elseif($settings->lang === "id")@lang('lang.id.email')
          @elseif($settings->lang === "jp")@lang('lang.jp.email')
          @else Email
          @endif
                        <input name="email" type="email" class="form-control" placeholder="Email" value="{{ old('email') }}"required>
                        @if ($errors->has('email'))
                            <span class="help-block">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        @if($settings->lang === "en")@lang('lang.en.password')
                @elseif($settings->lang === "id")@lang('lang.id.password')
                @elseif($settings->lang === "jp")@lang('lang.jp.password')
                @else Password
                @endif
                        <input name="password" type="password" class="form-control" placeholder="Password" value="{{ old('password') }}" required>
                        @if ($errors->has('email'))
                            <span class="help-block">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
            </div>
        </div>
        <div class="modal-footer mx-5 pt-3 mb-1">
        <button type="submit" class="btn btn-primary">@if($settings->lang === "en")@lang('lang.en.login')
            @elseif($settings->lang === "id")@lang('lang.id.login')
            @elseif($settings->lang === "jp")@lang('lang.jp.login')
            @else Login
            @endif</button>
      </div>
      </div>
    </div>
  </div>
</form>

  <div class="modal fade" id="register" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <form action="{{url('/register')}}" method="POST">
    {{ csrf_field() }}
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">
              @if($settings->lang === "en")@lang('lang.en.REGISTER')
            @elseif($settings->lang === "id")@lang('lang.id.REGISTER')
            @elseif($settings->lang === "jp")@lang('lang.jp.REGISTER')
            @else REGISTER
            @endif</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        @if($settings->lang === "en")@lang('lang.en.username')
          @elseif($settings->lang === "id")@lang('lang.id.username')
          @elseif($settings->lang === "jp")@lang('lang.jp.username')
          @else Username
          @endif
                        <input name="username" type="username" class="form-control" placeholder="Username" required>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        @if($settings->lang === "en")@lang('lang.en.contact')
          @elseif($settings->lang === "id")@lang('lang.id.contact')
          @elseif($settings->lang === "jp")@lang('lang.jp.contact')
          @else Contact
          @endif
                        <input id = "contact" name="contact" type="number" class="form-control" placeholder="Contact" required>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        @if($settings->lang === "en")@lang('lang.en.email')
          @elseif($settings->lang === "id")@lang('lang.id.email')
          @elseif($settings->lang === "jp")@lang('lang.jp.email')
          @else Email
          @endif
                        <input name="email" type="email" class="form-control" placeholder="Email" required>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        @if($settings->lang === "en")@lang('lang.en.password')
                @elseif($settings->lang === "id")@lang('lang.id.password')
                @elseif($settings->lang === "jp")@lang('lang.jp.password')
                @else Password
                @endif
                        <input name="password" type="password" class="form-control" placeholder="Password" required>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal-footer mx-5 pt-3 mb-1">
        <button type="submit" class="btn btn-primary">@if($settings->lang === "en")@lang('lang.en.REGISTER')
            @elseif($settings->lang === "id")@lang('lang.id.REGISTER')
            @elseif($settings->lang === "jp")@lang('lang.jp.REGISTER')
            @else REGISTER
            @endif</button>
      </div>
      </div>
    </div>
</form>
</div>

@stop
@endforeach