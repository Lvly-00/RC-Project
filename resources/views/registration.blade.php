@extends('layout')

<x-guest-navigation-bar />

@section('content')

    <body>
        <main>
            <div>
                <div>
                    <div>
                        <div>
                            <h3>Register User</h3>
                            <div>
                                <form action="{{ route('postsignup') }}" method="POST">
                                    @csrf
                                    <div>
                                        <input type="text" placeholder="Name" id="name" name="name" autofocus>
                                        @if ($errors->has('name'))
                                            <span>{{ $errors->first('name') }}</span>
                                        @endif
                                    </div>
                                    <div>
                                        <input type="text" placeholder="Email" id="email_address" name="email" autofocus>
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
                                            <label><input type="checkbox" name="remember"> Remember Me</label>
                                        </div>
                                    </div>
                                    <div>
                                        <button type="submit">Sign up</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </body>
@endsection
