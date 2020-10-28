@foreach($setting as $settings)
@extends('partials.user.page')
@section('title', 'Profile - Koperasi Z')
@section('container')

<div class="container rounded bg-white mt-5">
    <div class="row">
        <div class="col-md-4 border-right">
            <div class="d-flex flex-column align-items-center text-center p-3 py-5"><img class="rounded-circle mt-5" src="{{$user->img_url}}" width="200" height="200"><span class="font-weight-bold">{{$user->username}}</span><span class="text-black-50">
                @if($settings->lang === "en")@lang('lang.en.joinedat')
          @elseif($settings->lang === "id")@lang('lang.id.joinedat')
          @elseif($settings->lang === "jp")@lang('lang.jp.joinedat')
          @else Joined At :
          @endif
           {{$user->created_at}}</span></div>
        </div>
        <div class="col-md-8">
            <div class="p-3 py-5">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h6 class="text-right">
                        @if($settings->lang === "en")@lang('lang.en.profilesetting')
          @elseif($settings->lang === "id")@lang('lang.id.profilesetting')
          @elseif($settings->lang === "jp")@lang('lang.jp.profilesetting')
          @else Profile Setting
          @endif
          </h6>
                </div>

                <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        @if($settings->lang === "en")@lang('lang.en.username')
          @elseif($settings->lang === "id")@lang('lang.id.username')
          @elseif($settings->lang === "jp")@lang('lang.jp.username')
          @else Username
          @endif  
                        <input name="title" type="text" class="form-control" placeholder="{{$user->username}}" disabled>
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
                        <input name="contact" type="text" class="form-control" placeholder="{{$user->contact}}" disabled>
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
                        <input name="email" type="text" class="form-control" placeholder="{{$user->email}}" disabled>
                    </div>
                </div>
                </div>

                <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        @if($settings->lang === "en")@lang('lang.en.joinedat')
          @elseif($settings->lang === "id")@lang('lang.id.joinedat')
          @elseif($settings->lang === "jp")@lang('lang.jp.joinedat')
          @else Joined At
          @endif  
                        <input name="created_at" type="text" class="form-control" placeholder="{{$user->created_at}}" disabled>
                    </div>
                </div>
                </div>

                <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        @if($settings->lang === "en")@lang('lang.en.updatedat')
          @elseif($settings->lang === "id")@lang('lang.id.updatedat')
          @elseif($settings->lang === "jp")@lang('lang.jp.updatedat')
          @else Updated At
          @endif  
                        <input name="update_at" type="text" class="form-control" placeholder="{{$user->updated_at}}" disabled>
                    </div>
                </div>
                </div>

              <div class="mt-5 text-right">
            <form action="{{url('/user/destroy-account', [$user->id])}}" method="post" onclick = "return confirm('Do You Want To Destroy This Account?')">
              @csrf
              <input type="hidden" name="_method" value="DELETE">
              <button type="submit" class="btn btn-primary profile-button">
                @if($settings->lang === "en")@lang('lang.en.deletethisaccount')
                @elseif($settings->lang === "id")@lang('lang.id.deletethisaccount')
                @elseif($settings->lang === "jp")@lang('lang.jp.deletethisaccount')
                @else Delete This Account
                @endif  
                </button>
            </form>
            </div>

            </div>
        </div>
    </div>
</div>

@stop
@endforeach



