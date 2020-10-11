@extends('admin.layouts.app')
@section('title', 'Coupons')

@section('content')

    <div class="row wrapper border-bottom white-bg page-heading">
        <div class="col-lg-10">
            <ol class="breadcrumb">
                <li>
                    <a href="{{ route('admin.brands.index') }}">Coupons</a>
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
                        <h5>All Coupon</h5>
                        <a href="{{ route('admin.coupons.create') }}" class="btn btn-sm btn-primary pull-right">
                            <i class="fa fa-plus"></i> <strong>Create</strong>
                        </a>
                    </div>

                    <div class="ibox-content">
                        <div class="row">
                            <div class="col-sm-12">
                                <form action="{{ route('admin.coupons.index') }}" method="get"
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
                                        <a href="{{ route('admin.coupons.index') }}"
                                           class="btn btn-default btn-sm">Reset</a>
                                    </div>
                                </form>
                            </div>
                        </div>

                        <div class="table-responsive m-t-md">
                            <table class="table table-bordered table-hover">
                                <thead>
                                <tr>
                                    <th class="text-left">Coupon</th>
                                    <th>Amount</th>
                                    <th>Amount Type</th>
                                    <th>Specific Users</th>
                                    <th>Status</th>
                                    <th>Expire Date</th>
                                    <th>Create At</th>
                                    <th class="text-center">Actions</th>
                                </tr>
                                </thead>

                                <tbody>
                                @foreach($coupons as $coupon)
                                    <tr>
                                        <td class="text-left">{{ $coupon->coupon }}</td>
                                        <td>{{ $coupon->amount }}</td>
                                        <td>{{ ucfirst($coupon->amount_type) }}</td>
                                        <td>{{ $coupon->user_ids }}</td>

                                        <td>
                                            <a href="{{ route('admin.coupons.status.change', $coupon->id) }}"
                                               title="Change publication status">
                                                @if($coupon->status)
                                                    <span class="badge badge-primary"><strong>Active</strong></span>
                                                @else
                                                    <span
                                                        class="badge badge-warning"><strong>Disable</strong></span>
                                                @endif
                                            </a>
                                        </td>

                                        <td>
                                            {{ $coupon->expire ? date_format($coupon->expire, 'd-m-Y') : ''}}
                                        </td>

                                        <td>{{ cus_date($coupon->created_at) }}</td>

                                        <td>
                                            <a href="{{ route('admin.coupons.edit', $coupon->id) }}"
                                               title="Edit" class="btn btn-info btn-sm">
                                                <i class="fa fa-pencil-square-o"></i> <strong>Edit</strong>
                                            </a>

                                            <a onclick="deleteRow({{ $coupon->id }})" href="JavaScript:void(0)"
                                               title="Delete" class="btn btn-danger btn-sm">
                                                <i class="fa fa-trash"></i> <strong>Delete</strong>
                                            </a>

                                            <form id="row-delete-form{{ $coupon->id }}" method="POST"
                                                  action="{{ route('admin.coupons.destroy', $coupon->id) }}"
                                                  class="hidden">
                                                @method('DELETE')
                                                @csrf()
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>

                        @if (count($coupons))
                            <div class="dataTables_info table-pagination" id="DataTables_Table_0_info" role="status"
                                 aria-live="polite">
                                <div class="m-r-lg">
                                    Showing {{ $coupons->firstItem() }} to {{ $coupons->lastItem() }}
                                    of {{ $coupons->total() }} entries
                                </div>
                                {{ $coupons->appends(['perPage' => request('perPage'), 'department' => request('department'), 'subject' => request('subject'), 'keyword' => request('keyword')])->links() }}
                            </div>
                        @else
                            <div class="text-center">No coupons found</div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection()
