@extends('auth.layouts.app')
@section('title', 'My Account')

@section('content')
    <div class="contact_form">
        <div class="container">
            <div class="row">
                <div class="col-md-8 contact_form_container mr-0 mr-md-5">
                    <div class="contact_form_inner">
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
                </div>

                <div class="col-md-3 mt-5 mt-md-0 p-0 contact_form_container">
                    <div class="contact_form_inner p-0">
                        <div class="card border-0">
                            <img src="https://scontent.fdac7-1.fna.fbcdn.net/v/t1.0-1/p200x200/71026184_2370892889815566_7323969419313414144_n.jpg?_nc_cat=107&ccb=2&_nc_sid=7206a8&_nc_ohc=-8ccE42Zbn0AX92TbUo&_nc_ht=scontent.fdac7-1.fna&tp=6&oh=bc99f13b73dc84391202bbea5cb0c8d6&oe=5FD80790"
                                 class="card-img-top align-self-center mt-3"
                                 style="height: 90px; width: 90px; border-radius: 50px;">

                            <div class="card-body text-center">
                                <h5 class="card-title mb-0">
                                    {{ auth()->user()->name }}
                                </h5>
                                <span>aalmamun417@gmail.com</span>
                            </div>

                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">
                                    <a href="{{ route('user.change-password') }}">Change Password</a>
                                </li>
                                <li class="list-group-item">
                                    <a href="">Edit Profile</a>
                                </li>
                                <li class="list-group-item">
                                    <a href="">Return Order</a>
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
        <div class="panel"></div>
    </div>
@endsection
