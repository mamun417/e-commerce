@extends('admin.layouts.app')
@section('title', 'Edit Category')

@section('content')
    <div class="row wrapper border-bottom white-bg page-heading">
        <div class="col-lg-10">
            <ol class="breadcrumb">
                <li>
                    <a href="{{ route('admin.dashboard') }}">Categories</a>
                </li>
                <li class="active">
                    <strong>Edit</strong>
                </li>
            </ol>
        </div>
    </div>

    <div class="wrapper wrapper-content animated fadeInRight">
        <div class="row">
            <div class="col-lg-12">

                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>Edit Category</h5>
                    </div>

                    <div class="ibox-content">
                        <div class="row">
                            <div class="col-sm-6">
                                <form role="form" action="{{ route('admin.categories.update', $category->id) }}"
                                      method="post" enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')
                                    @include('admin.category.element', ['update' => true])
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection()
