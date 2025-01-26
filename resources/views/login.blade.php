@extends('layout')
<x-guest-navigation-bar />
@vite(['resources/css/app.css'])

@section('content')
<body style="background: url('{{ asset('FrontendAssets/bg.png') }}') no-repeat center center fixed; background-size: cover;">
    <main>
        <div class="form-container">
            <form method="POST" action="{{ route('postlogin') }}" class="form">
                @csrf
                <p id="heading">Login</p>

                @if (\Session::has('message'))
                    <div class="alert">
                        {{ \Session::get('message') }}
                    </div>
                @endif

                <div class="field">
                    <svg class="input-icon" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                        <path d="M13.106 7.222c0-2.967-2.249-5.032-5.482-5.032-3.35 0-5.646 2.318-5.646 5.702 0 3.493 2.235 5.708 5.762 5.708.862 0 1.689-.123 2.304-.335v-.862c-.43.199-1.354.328-2.29.328-2.926 0-4.813-1.88-4.813-4.798 0-2.844 1.921-4.881 4.594-4.881 2.735 0 4.608 1.688 4.608 4.156 0 1.682-.554 2.769-1.416 2.769-.492 0-.772-.28-.772-.76V5.206H8.923v.834h-.11c-.266-.595-.881-.964-1.6-.964-1.4 0-2.378 1.162-2.378 2.823 0 1.737.957 2.906 2.379 2.906.8 0 1.415-.39 1.709-1.087h.11c.081.67.703 1.148 1.503 1.148 1.572 0 2.57-1.415 2.57-3.643z"></path>
                    </svg>
                    <input autocomplete="off" placeholder="Email" class="input-field" type="text" id="email" name="email" autofocus>
                    @if ($errors->has('email'))
                        <span class="error">{{ $errors->first('email') }}</span>
                    @endif
                </div>

                <div class="field">
                    <svg class="input-icon" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                        <path d="M8 1a2 2 0 0 1 2 2v4H6V3a2 2 0 0 1 2-2zm3 6V3a3 3 0 0 0-6 0v4a2 2 0 0 0-2 2v5a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V9a2 2 0 0 0-2-2z"></path>
                    </svg>
                    <input placeholder="Password" class="input-field" type="password" id="password" name="password">
                    @if ($errors->has('password'))
                        <span class="error">{{ $errors->first('password') }}</span>
                    @endif
                </div>

                <div class="field">
                    <label class="remember-me">
                        <input type="checkbox" name="remember"> Remember Me
                    </label>
                </div>

                <div class="btn">
                    <button type="submit" class="button1">Login</button>
                    <button type="button" class="button2">Sign Up</button>
                </div>

                <button type="button" class="button3">Forgot Password</button>
            </form>
        </div>
    </main>
</body>
@endsection
