@extends('layouts.app')

@section('content')

    <main class="login-container">
        <div class="container">
            <div class="row page-login d-flex align-items-center">
                <div class="section-left col-12 col-md-6">
                    <h1 class="mb-4">We explore the new <br> life much better</h1>
                    <img src="/frontend/images/travel-1.jpg" alt="" class=" d-none d-sm-flex">
                </div>
                
                <div class="section-right col-12 col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="text-center">
                                <img src="/frontend/images/logo.png" alt="" class="w-50 mb-4">
                            </div>                      
                   
                            <form method="POST" action="{{ route('login') }}">
                            @csrf
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Email address</label>
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Password</label>
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                                <button
                                    type="sumbit"
                                    class="btn btn-login btn-block"
                                >
                                Sign-in 
                                </button>
                                @if (Route::has('password.request'))
                                <p class="text-center mt-4">
                                    <a  href="{{ route('password.request') }}">
                                        Saya lupa password
                                    </a>
                                </p>
                                @endif  
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
