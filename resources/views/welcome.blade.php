@include('partials.navbar')

@section('tab-title')
Welcome
@endsection

<head>
    <div class="card text-center">
        <div class="card-body">
            <h1 class="card-title">Welcome
                @if(Session::get('logged_in'))
                @else
                Guest
                @endif
            </h1>
            <p class="card-text">Thanks Support My Web Site.</p>
            <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Search" aria-label="Recipient's username"
                    aria-describedby="button-addon2">
                <div class="input-group-append">
                    <button class="btn btn-outline-secondary" type="button" id="button-addon2">Search</button>
                </div>
            </div>
        </div>
    </div>
    <div class="card text-center">
        <div class="card-header">
            <h3>
                <div class="text-muted"> Need Help? </div>
            </h3>
        </div>
    </div>
    </section>
    </div>
</head>

@include('partials.footer')