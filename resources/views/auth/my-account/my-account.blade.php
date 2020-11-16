@extends('auth.layouts.app')

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
                                       name="email" value="{{ old('email') }}" aria-describedby="emailHelp" required="">
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Password</label>
                                <input type="password" class="form-control @error('password') is-invalid @enderror"
                                       aria-describedby="emailHelp" name="password" required="">

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

    <div class="contact_form">
        <div class="container">
            <div class="row">
                <div class="col-8 card">
                    <table class="table table-response">
                        <thead>
                        <tr>
                            <th>Payment Type</th>
                            <th>Payment ID</th>
                            <th>Amount</th>
                            <th>Date</th>
                            <th>Status</th>
                            <th>Status Code</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach([12,2121, 21] as $row)
                            <tr>
                                <td>fds sdfsd</td>
                                <td>fds sdfsd</td>
                                <td>fds sdfsd</td>
                                <td>fds sdfsd</td>
                                <td>fds sdfsd</td>
                                <td>fds sdfsd</td>
                                <td>
                                    <a href="" class="btn btn-sm btn-info"> View</a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>

                <div class="col-4">
                    <div class="card">
                        <img src="{{ asset('public/frontend/images/kaziariyan.png') }}" class="card-img-top"
                             style="height: 90px; width: 90px; margin-left: 34%;">

                        <div class="card-body">
                            <h5 class="card-title text-center">
                                {{ auth()->user()->name }}
                            </h5>
                        </div>

                        <ul class="list-group list-group-flush">
                            <li class="list-group-item"><a href="">Change Password</a>
                            </li>
                            <li class="list-group-item">Edit Profile</li>
                            <li class="list-group-item"><a href=""> Return Order</a>
                            </li>
                        </ul>

                        <div class="card-body">
                            <a href="" class="btn btn-danger btn-sm btn-block">Logout</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
