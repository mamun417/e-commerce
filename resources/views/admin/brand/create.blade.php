@extends('admin.layouts.app')
@section('title', 'Create Brand')

@section('content')
    <div class="row wrapper border-bottom white-bg page-heading">
        <div class="col-lg-10">
            <ol class="breadcrumb">
                <li>
                    <a href="{{ route('admin.brands.index') }}">Brands</a>
                </li>
                <li class="active">
                    <strong>Create</strong>
                </li>
            </ol>
        </div>
    </div>

    <div class="wrapper wrapper-content animated fadeInRight">
        <div class="row">
            <div class="col-lg-12">

                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>Create Brand</h5>
                    </div>

                    <div class="ibox-content">
                        <div class="row">
                            <div class="col-sm-6">
                                <form role="form" action="{{ route('admin.brands.store') }}" method="post"
                                      enctype="multipart/form-data">
                                    @csrf
                                    @include('admin.brand.element')
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection()