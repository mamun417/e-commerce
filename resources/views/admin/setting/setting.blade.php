@extends('admin.layouts.app')
@section('title', 'Site Settings')

@section('content')
    <div class="row wrapper border-bottom white-bg page-heading">
        <div class="col-lg-10">
            <ol class="breadcrumb">
                <li>
                    <a href="{{ route('admin.setting.show') }}">Settings</a>
                </li>
                <li class="active">
                    <strong>Update</strong>
                </li>
            </ol>
        </div>
    </div>

    <div class="wrapper wrapper-content animated fadeInRight">
        <div class="row">
            <div class="col-lg-12">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>Settings</h5>
                    </div>

                    <div class="ibox-content">
                        <div class="row">
                            <form role="form" action="{{ route('admin.setting.update') }}" method="post"
                                  enctype="multipart/form-data">
                                @csrf
                                @method('PUT')

                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label>Site Title</label>
                                        <input name="title" value="{{ @$setting['title'] }}"
                                               type="text"
                                               placeholder="Enter site title" class="form-control">

                                        @error('title')
                                        <span class="help-block m-b-none text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label>Company Name</label>
                                        <input name="company_name"
                                               value="{{ @$setting['company_name'] }}"
                                               type="text"
                                               placeholder="Enter company name" class="form-control">

                                        @error('company_name')
                                        <span class="help-block m-b-none text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label>Email</label>
                                        <input name="email"
                                               value="{{ @$setting['email'] }}"
                                               type="email"
                                               placeholder="Enter email address" class="form-control">

                                        @error('email')
                                        <span class="help-block m-b-none text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label>Phone Number</label>
                                        <input name="phone"
                                               value="{{ @$setting['phone'] }}"
                                               type="number"
                                               placeholder="Enter phone number" class="form-control">

                                        @error('phone')
                                        <span class="help-block m-b-none text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label>Company Address</label>
                                        <input name="address"
                                               value="{{ @$setting['address'] }}"
                                               type="text"
                                               placeholder="Enter company address" class="form-control">

                                        @error('address')
                                        <span class="help-block m-b-none text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label>Facebook</label>
                                        <input name="facebook"
                                               value="{{ @$setting['facebook'] }}"
                                               type="text"
                                               placeholder="Enter facebook account link" class="form-control">

                                        @error('facebook')
                                        <span class="help-block m-b-none text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label>Youtube</label>
                                        <input name="youtube"
                                               value="{{ @$setting['youtube'] }}"
                                               type="text"
                                               placeholder="Enter youtube channel link" class="form-control">

                                        @error('youtube')
                                        <span class="help-block m-b-none text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label>Twitter</label>
                                        <input name="twitter"
                                               value="{{ @$setting['twitter'] }}"
                                               type="text"
                                               placeholder="Enter twitter account link" class="form-control">

                                        @error('twitter')
                                        <span class="help-block m-b-none text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label>Site Logo</label>
                                        <div class="fileinput fileinput-new input-group" data-provides="fileinput">
                                            <div class="form-control" data-trigger="fileinput">
                                                <i class="glyphicon glyphicon-file fileinput-exists"></i>
                                                <span class="fileinput-filename"></span>
                                            </div>
                                            <span class="input-group-addon btn btn-default btn-file">
                                            <span class="fileinput-new">Select file</span>
                                            <span class="fileinput-exists">Change</span>
                                                <input type="file" name="img">
                                            </span>

                                            <a href="#" class="input-group-addon btn btn-default fileinput-exists"
                                               data-dismiss="fileinput">Remove</a>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-4">
                                    <div class="form-group m-b-none">
                                        <a href="{{ url()->previous() }}"
                                           class="btn btn-sm btn-danger"><strong>Cancel</strong>
                                        </a>
                                        <button class="btn btn-sm btn-primary" type="submit">
                                            <strong>Submit</strong>
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection()
