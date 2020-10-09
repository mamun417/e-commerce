@extends('admin.layouts.app')
@section('title', 'Categories')

@section('content')

    <div class="row wrapper border-bottom white-bg page-heading">
        <div class="col-lg-10">
            <ol class="breadcrumb">
                <li>
                    <a href="{{ url('/all-category') }}">Categories</a>
                </li>
                <li class="active">
                    <strong>Index</strong>
                </li>
            </ol>
        </div>
    </div>

    <div class="wrapper wrapper-content animated">
        <div class="row">
            <div class="col-lg-12">
                <div class="ibox">
                    <div class="ibox-title">
                        <h5>All Category</h5>
                        <a href="{{ route('admin.categories.create') }}" class="btn btn-sm btn-primary pull-right">
                            <i class="fa fa-plus"></i> <strong>Create</strong>
                        </a>
                    </div>

                    <div class="ibox-content">

                        @if (count($categories))
                            <div class="row">
                                <div class="col-sm-12">
                                    <form action="{{ route('admin.categories.index') }}" method="get"
                                          class="form-inline" role="form">

                                        <div class="form-group">
                                            <div>Records Per Page</div>
                                            <select name="perPage" id="perPage" onchange="submit()"
                                                    class="input-sm form-control" style="width: 115px;">
                                                <option value="10"{{ request('perPage') == 10 ? ' selected' : '' }}>
                                                    10
                                                </option>
                                                <option value="25"{{ request('perPage') == 25 ? ' selected' : '' }}>
                                                    25
                                                </option>
                                                <option value="50"{{ request('perPage') == 50 ? ' selected' : '' }}>
                                                    50
                                                </option>
                                                <option value="100"{{ request('perPage') == 100 ? ' selected' : '' }}>
                                                    100
                                                </option>
                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <br>
                                            <div class="input-group">
                                                <input name="keyword" type="text" value="{{ request('keyword') }}"
                                                       class="input-sm form-control" placeholder="Search Here">
                                                <span class="input-group-btn">
                                                <button type="submit" class="btn btn-sm btn-primary"> Go!</button>
                                            </span>
                                            </div>
                                            <a href="{{ route('admin.categories.index') }}"
                                               class="btn btn-default btn-sm">Reset</a>
                                        </div>
                                    </form>
                                </div>
                            </div>

                            <div class="table-responsive m-t-md">
                                <table class="table table-bordered table-hover">
                                    <thead>
                                    <tr>
                                        <th class="text-left">Name</th>
                                        <th class="text-left">Parent</th>
                                        <th>Image</th>
                                        <th>Status</th>
                                        <th>Create At</th>
                                        <th class="text-center">Actions</th>
                                    </tr>
                                    </thead>

                                    <tbody>
                                    @foreach($categories as $category)
                                        <tr>
                                            <td class="text-left">{{ ucfirst($category->name) }}</td>
                                            <td class="text-left">{{ isset($category->parent) ? $category->parent->name : '--' }}</td>
                                            <td>
                                                <img src="{{ getImageUrl($category->image) }}"
                                                     alt="{{ $category->name }}" class="cus_thumbnail">
                                            </td>

                                            <td>
                                                <a href="{{ route('admin.category.status.change', $category->id) }}"
                                                   title="Change publication status">
                                                    @if($category->status)
                                                        <span class="badge badge-primary"><strong>Active</strong></span>
                                                    @else
                                                        <span
                                                            class="badge badge-warning"><strong>Disable</strong></span>
                                                    @endif
                                                </a>
                                            </td>

                                            <td>{{ date_format($category->created_at, 'd-m-Y') }}</td>

                                            <td>
                                                <a href="{{ route('admin.categories.edit', $category->id) }}"
                                                   title="Edit" class="btn btn-info btn-sm">
                                                    <i class="fa fa-pencil-square-o"></i> <strong>Edit</strong>
                                                </a>

                                                <a onclick="deleteRow({{ $category->id }})" href="JavaScript:void(0)"
                                                   title="Delete" class="btn btn-danger btn-sm">
                                                    <i class="fa fa-trash"></i> <strong>Delete</strong>
                                                </a>

                                                <form id="row-delete-form{{ $category->id }}" method="POST"
                                                      action="{{ route('admin.categories.destroy', $category->id) }}"
                                                      style="display: none">
                                                    @method('DELETE')
                                                    @csrf()
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>

                                </table>
                            </div>

                            <div class="dataTables_info table-pagination" id="DataTables_Table_0_info" role="status"
                                 aria-live="polite">
                                <div class="m-r-lg">
                                    Showing {{ $categories->firstItem() }} to {{ $categories->lastItem() }}
                                    of {{ $categories->total() }} entries
                                </div>
                                {{ $categories->appends(['perPage' => request('perPage'), 'department' => request('department'), 'subject' => request('subject'), 'keyword' => request('keyword')])->links() }}
                            </div>
                        @else
                            <div class="text-center">No categories found</div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection()
