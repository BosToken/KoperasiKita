@extends('partials.navbar')
@section('title', 'Koperasi Z')
@section('content')

<head>
    <div class="card text-center">
        <div class="card-body">
            <h1 class="card-title">WELCOME
                @if(Session::get('logged_in'))
                {{$user->username}}
                @else
                GUEST
                @endif
            </h1>
            <p class="card-text">THANKS SUPPORT MY WEBSITE.</p>
            
            <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="SEARCH" aria-label="Recipient's username"
                    aria-describedby="button-addon2">
                <div class="input-group-append">
                    <button class="btn btn-outline-secondary" type="button" id="button-addon2">SEARCH</button>
                </div>
            </div>
        </div>
    </div>
    <div class="card text-center">
        <div class="card-header">
            <h3>
                <div class="text-muted"> NEED HELP ?</div>
            </h3>
        </div>
    </div>
    </section>
    </div>
</head>

@stop
