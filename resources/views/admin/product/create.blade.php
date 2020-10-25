@extends('admin.layouts.app')
@section('title', 'Create Product')

@section('content')
    <div class="row wrapper border-bottom white-bg page-heading">
        <div class="col-lg-10">
            <ol class="breadcrumb">
                <li>
                    <a href="{{ route('admin.products.index') }}">Products</a>
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
                        <h5>Create Product</h5>
                    </div>

                    <div class="ibox-content">
                        <div class="row">
                            <form role="form" action="{{ route('admin.products.store') }}" method="post"
                                  enctype="multipart/form-data">
                                @csrf
                                @include('admin.product.element')
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection()
