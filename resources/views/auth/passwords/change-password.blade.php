@extends('auth.layouts.app')
@section('title', 'Change Password')

@section('content')
    <div class="contact_form">
        <div class="container">
            <div class="row">
                <div class="col-md-5 contact_form_container m-auto">
                    <div class="contact_form_inner">
                        <div class="contact_form_title text-center">Change Password</div>

                        <form action="{{ route('user.update-password') }}" method="post">
                            @csrf

                            <div class="form-group">
                                <label for="exampleInputEmail1">Old Password</label>
                                <input type="password" class="form-control @error('old_password') is-invalid @enderror"
                                       aria-describedby="emailHelp" name="old_password"
                                       placeholder="Enter Old Password" required>

                                @error('old_password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">New Password</label>
                                <input type="password" class="form-control @error('password') is-invalid @enderror"
                                       aria-describedby="emailHelp" name="password"
                                       placeholder="Enter New Password" required>

                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Confirm Password</label>
                                <input type="password"
                                       class="form-control @error('password_confirmation') is-invalid @enderror"
                                       aria-describedby="emailHelp" name="password_confirmation"
                                       placeholder="Enter Confirm Password" required>

                                @error('password_confirmation')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>

                            <div class="contact_form_button">
                                <button type="submit" class="btn btn-info">Submit</button>
                            </div>
                        </form>
                        <br>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
