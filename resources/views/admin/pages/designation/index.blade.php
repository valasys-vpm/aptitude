@extends('admin.layouts.master')

@section('content')
    <div class="row">
        <!-- [ configuration table ] start -->
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header">
                    <h5>Designation List</h5>
                    <div class="float-right">
                        <a href="{{ route('designation.create') }}"><button type="button" class="btn btn-outline-primary btn-sm" title="">+ New Designation</button></a>
                    </div>
                </div>
                <div class="card-block">
                    <div class="table-responsive">
                        <table id="zero-configuration" class="display table nowrap table-striped table-hover" style="width:100%">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Title</th>
                                <th>No. of Questions</th>
                                <th>Test Duration</th>
                                <th>Passing Marks</th>
                                <th>Status</th>
                                <th>Created At</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @php $i = 1; @endphp
                            @forelse($resultDesignations as $designation)
                                <tr>
                                    <td>{{ $i++ }}</td>
                                    <td>{{ $designation->title }}</td>
                                    <td>{{ $designation->number_of_question }}</td>
                                    <td>{{ $designation->test_duration }}</td>
                                    <td>{{ $designation->passing_marks }}</td>
                                    <td>
                                        @switch($designation->status)
                                            @case('1')
                                            <div class="badge badge-success badge-pill">Active</div>
                                            @break
                                            @case('0')
                                            <div class="badge badge-danger badge-pill">Inactive</div>
                                            @break
                                        @endswitch
                                    </td>
                                    <td>{{ date('Y-m-d H:i:s', strtotime($designation->created_at)) }}</td>
                                    <td>
                                        <a href="{{ route('designation.edit', base64_encode($designation->id)) }}">Edit</a>
                                        <a href="{{ route('designation.destroy', base64_encode($designation->id)) }}" onclick="javascript:return confirm('Are you sure to delete designation - {{$designation->title}} ?');">Delete</a>
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
