@extends('auth.layouts.app')
@section('title', 'Sign In')

@section('content')
    <div class="contact_form">
        <div class="container">
            <div class="row">
                <div class="col-md-5 offset-md-1 contact_form_container">
                    <div class="contact_form_inner">
                        <div class="contact_form_title text-center">Sign In</div>

                        <form action="{{ route('login') }}" id="contact_form" method="post">
                            @csrf

                            <div class="form-group">
                                <label for="exampleInputEmail1">Email or Phone</label>
                                <input type="text" class="form-control @error('email') is-invalid @enderror"
                                       name="email" value="mamun@obosor.com" aria-describedby="emailHelp" required="">
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Password</label>
                                <input type="password" class="form-control @error('password') is-invalid @enderror"
                                       aria-describedby="emailHelp" name="password" required="" value="banglaDesh1235">

                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>

                            <div class="contact_form_button">
                                <button type="submit" class="btn btn-info">Login</button>
                            </div>
                        </form>
                        <br>
                        <a href="{{ route('password.request') }}">I forgot my password</a> <br> <br>

                        <button type="submit" class="btn btn-primary btn-block">
                            <i class="fab fa-facebook-square"></i>
                            Login with Facebook
                        </button>

                        <a href="{{ url('/auth/redirect/google') }}" class="btn btn-danger btn-block">
                            <i class="fab fa-google"></i> Login with Google
                        </a>
                    </div>
                </div>

                <div class="col-md-5 offset-md-1 mt-5 mt-md-0 contact_form_container">
                    <div class="contact_form_inner">
                        <div class="contact_form_title text-center">Sign Up</div>

                        <form action="{{ route('register') }}" id="contact_form" method="post">
                            @csrf

                            <div class="form-group">
                                <label for="exampleInputEmail1">Full Name</label>
                                <input type="text" class="form-control" aria-describedby="emailHelp"
                                       placeholder="Enter Your Full Name " name="name" value="{{ old('name') }}" required>

                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Phone</label>
                                <input type="text" class="form-control @error('phone') is-invalid @enderror"
                                       name="phone" value="{{ old('phone') }}" aria-describedby="emailHelp"
                                       placeholder="Enter Your Phone" value="{{ old('phone') }}" required>

                                @error('phone')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Email</label>
                                <input type="email" class="form-control @error('email') is-invalid @enderror"
                                       name="email" value="{{ old('email') }}" aria-describedby="emailHelp"
                                       placeholder="Enter Your Email" required>

                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Password</label>
                                <input type="password" class="form-control" aria-describedby="emailHelp"
                                       placeholder="Enter Your Password " name="password" required="">

                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Confirm Password</label>
                                <input type="password" class="form-control" aria-describedby="emailHelp"
                                       placeholder="Re-Type Password " name="password_confirmation" required="">

                                @error('password_confirmation')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>

                            <div class="contact_form_button">
                                <button type="submit" class="btn btn-info">Sign Up</button>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
        <div class="panel"></div>
    </div>
@endsection
