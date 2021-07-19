@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card border-dark">
            <center>
                <div class="card-header card text-white bg-dark">{{ __('Welcome to Your Messanger') }}</div>
             </center>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <!-- {{ __('You are logged in!') }} -->
                    <picture>
                        <source srcset="https://i0.wp.com/justcall.io/blog/wp-content/uploads/2021/05/bulk-sms-banner-image.png?fit=2412%2C988&ssl=1" type="image/svg+xml">
                        <source
                            srcset="{{asset('home/Fintechcover.png')}}"
                            type="image/svg+xml">
                        <img src="..." class="img-fluid img-thumbnail" alt="...">
                    </picture>
                <br>
                <br>
                <br>
                    <center>
        
                      <a class="btn btn-primary btn-lg"  href="{{ url('/chat') }}">Chat</a>
        
                    </center>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
