@extends('layout')
<x-guest-navigation-bar />
@vite(['resources\css\app.css'])

@section('content')
<body>
    <main>
        <div>
            <h3>Login</h3>
            @if (\Session::has('message'))
                <div>
                    {{ \Session::get('message') }}
                </div>
            @endif
            <div>
                <form method="POST" action="{{ route('postlogin') }}">
                    @csrf
                    <div>
                        <input type="text" placeholder="Email" id="email" name="email" autofocus>
                        @if ($errors->has('email'))
                            <span>{{ $errors->first('email') }}</span>
                        @endif
                    </div>
                    <div>
                        <input type="password" placeholder="Password" id="password" name="password">
                        @if ($errors->has('password'))
                            <span>{{ $errors->first('password') }}</span>
                        @endif
                    </div>
                    <div>
                        <div>
                            <label>
                                <input type="checkbox" name="remember"> Remember Me
                            </label>
                        </div>
                    </div>
                    <div>
                        <button type="submit">Sign in</button>
                    </div>
                </form>
            </div>
        </div>
    </main>
</body>
@endsection
