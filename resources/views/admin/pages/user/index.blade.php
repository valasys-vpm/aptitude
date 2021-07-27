@extends('admin.layouts.master')

@section('content')
    <div class="row">
        <!-- [ configuration table ] start -->
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header">
                    <h5>User List</h5>
                    <div class="float-right">
                        <a href="{{ route('user.create') }}"><button type="button" class="btn btn-outline-primary btn-sm" title="">+ New User</button></a>
                    </div>
                </div>
                <div class="card-block">
                    <div class="table-responsive">
                        <table id="zero-configuration" class="display table nowrap table-striped table-hover" style="width:100%">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Email Id</th>
                                <th>Created At</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @php $i = 1; @endphp
                            @forelse($resultUsers as $user)
                                <tr>
                                    <td>{{ $i++ }}</td>
                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td>{{ date('Y-m-d H:i:s', strtotime($user->created_at)) }}</td>
                                    <td>
                                        <a href="{{ route('user.edit', base64_encode($user->id)) }}">Edit</a>
                                        <a href="{{ route('user.destroy', base64_encode($user->id)) }}" onclick="javascript:return confirm('Are you sure to delete user - {{$user->email}} ?');">Delete</a>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="5" class="text-center">No Data Found</td>
                                </tr>
                            @endforelse
                            </tbody>

                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
