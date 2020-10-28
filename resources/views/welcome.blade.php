@foreach($setting as $settings)
@extends('partials.navbar')
@section('title', 'Koperasi Z')
@section('content')

<head>
    <div class="card text-center">
        <div class="card-body">
            <h1 class="card-title">
                @if($settings->lang === "en")@lang('lang.en.WELCOME')
                            @elseif($settings->lang === "id")@lang('lang.id.WELCOME')
                            @elseif($settings->lang === "jp")@lang('lang.jp.WELCOME')
                            @else WELCOME
                            @endif
                            
            </h1>
            <p class="card-text">
                @if($settings->lang === "en")@lang('lang.en.THANKS SUPPORT MY WEBSITE')
                            @elseif($settings->lang === "id")@lang('lang.id.THANKS SUPPORT MY WEBSITE')
                            @elseif($settings->lang === "jp")@lang('lang.jp.THANKS SUPPORT MY WEBSITE')
                            @else THANKS SUPPORT MY WEBSITE
                            @endif
                            </p>
            
            <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="
                @if($settings->lang === "en")@lang('lang.en.Search')
                @elseif($settings->lang === "id")@lang('lang.id.Search')
                @elseif($settings->lang === "jp")@lang('lang.jp.Search')
                @else Search
                @endif" aria-label="Recipient's username"
                    aria-describedby="button-addon2">
                <div class="input-group-append">
                    <button class="btn btn-outline-secondary" type="button" id="button-addon2">
                        @if($settings->lang === "en")@lang('lang.en.Search')
                @elseif($settings->lang === "id")@lang('lang.id.Search')
                @elseif($settings->lang === "jp")@lang('lang.jp.Search')
                @else Search
                @endif
                </button>
                </div>
            </div>
        </div>
    </div>
    <div class="card text-center">
        <div class="card-header">
            <h3>
                <div class="text-muted"> 
                    @if($settings->lang === "en")@lang('lang.en.NEED HELP ?')
                @elseif($settings->lang === "id")@lang('lang.id.NEED HELP ?')
                @elseif($settings->lang === "jp")@lang('lang.jp.NEED HELP ?')
                @else NEED HELP ?
                @endif
                </div>
            </h3>
        </div>
    </div>
    </section>
    </div>
</head>

@stop
@endforeach
