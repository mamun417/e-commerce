@extends('admin.layouts.app')
@section('title', 'Newsletters')

@section('content')

    <div class="row wrapper border-bottom white-bg page-heading">
        <div class="col-lg-10">
            <ol class="breadcrumb">
                <li>
                    <a href="{{ route('admin.newsletters.index') }}">Newsletters</a>
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
                        <h5>All Newsletter</h5>
                    </div>

                    <div class="ibox-content">
                        <div class="row">
                            <div class="col-sm-12">
                                <form action="{{ route('admin.newsletters.index') }}" method="get"
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
                                        <a href="{{ route('admin.newsletters.index') }}"
                                           class="btn btn-default btn-sm">Reset</a>
                                    </div>
                                </form>
                            </div>
                        </div>

                        <div class="table-responsive m-t-md">
                            <table class="table table-bordered table-hover">
                                <thead>
                                <tr>
                                    <th class="text-left">Email</th>
                                    <th>Subscribing Time</th>
                                    <th class="text-center">Actions</th>
                                </tr>
                                </thead>

                                <tbody>
                                @foreach($newsletters as $newsletter)
                                    <tr>
                                        <td class="text-left">{{ ucfirst($newsletter->email) }}</td>
                                        <td>{{ $newsletter->created_at->diffForHumans() }}</td>

                                        <td>
                                            <a onclick="deleteRow({{ $newsletter->id }})" href="JavaScript:void(0)"
                                               title="Delete" class="btn btn-danger btn-sm">
                                                <i class="fa fa-trash"></i> <strong>Delete</strong>
                                            </a>

                                            <form id="row-delete-form{{ $newsletter->id }}" method="POST"
                                                  action="{{ route('admin.newsletters.destroy', $newsletter->id) }}"
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

                        @if (count($newsletters))
                            <div class="dataTables_info table-pagination" id="DataTables_Table_0_info" role="status"
                                 aria-live="polite">
                                <div class="m-r-lg">
                                    Showing {{ $newsletters->firstItem() }} to {{ $newsletters->lastItem() }}
                                    of {{ $newsletters->total() }} entries
                                </div>
                                {{ $newsletters->appends(['perPage' => request('perPage'), 'keyword' => request('keyword')])->links() }}
                            </div>
                        @else
                            <div class="text-center">No newsletters found</div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection()
