@extends('admin.layouts.master')

@section('content')
    <div class="row">
        <!-- [ configuration table ] start -->
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header">
                    <h5>Registration</h5>
                    {{-- <div class="float-right">
                        <a href="{{ route('user.create') }}"><button type="button" class="btn btn-outline-primary btn-sm" title="">+ New User</button></a>
                    </div> --}}
                </div>
                <div class="card-block">
                    <div class="table-responsive">
                        <table id="zero-configuration" class="display table nowrap table-striped table-hover" style="width:100%">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Mobile</th>
                                <th>Designation</th>
                                <th>Created At</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @php $i = 1; @endphp
                            @forelse($resultRegistrations as $registration)
                                <tr>
                                    <td>{{ $i++ }}</td>
                                    <td>{{ $registration->first_name.' '.$registration->last_name }}</td>
                                    <td>{{ $registration->email }}</td>
                                    <td>{{ $registration->mobile }}</td>
                                    <td>{{ $registration->designation->title }}</td>
                                    <td>{{ date('Y-m-d H:i:s', strtotime($registration->created_at)) }}</td>
                                    <td>
                                        <a href="{{ route('registration.show', base64_encode($registration->id)) }}">View</a>
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
