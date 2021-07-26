@extends('admin.layouts.master')

@section('content')
    <div class="row">
        <!-- [ configuration table ] start -->
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header">
                    <h5>Question List</h5>
                    <div class="float-right">
                        <a href="{{ route('question.create') }}"><button type="button" class="btn btn-outline-primary btn-sm" title="">+ Add New Question</button></a>
                    </div>
                </div>
                <div class="card-block">
                    <div class="table-responsive">
                        <table id="zero-configuration" class="display table nowrap table-striped table-hover" style="width:100%">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Designation</th>
                                <th>Question</th>
                                <th>Options</th>
                                <th>Status</th>
                                <th>Created At</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @php $i = 1; @endphp
                            @forelse($resultQuestions as $question)
                                <tr>
                                    <td>{{ $i++ }}</td>
                                    <td>{{ $question->designation->title }}</td>
                                    <td>{!! $question->question !!}</td>
                                    <td>
                                        <ul>
                                            @foreach($question->options as $option)
                                                <li class="@if($option->is_answer == 1) text-success @endif">{{ $option->option }}</li>
                                            @endforeach
                                        </ul>
                                    </td>
                                    <td>
                                        @switch($question->status)
                                            @case('1')
                                            <div class="badge badge-success badge-pill">Active</div>
                                            @break
                                            @case('0')
                                            <div class="badge badge-danger badge-pill">Inactive</div>
                                            @break
                                        @endswitch
                                    </td>
                                    <td>{{ date('Y-m-d H:i:s', strtotime($question->created_at)) }}</td>
                                    <td>
                                        <a href="{{ route('question.edit', base64_encode($question->id)) }}">Edit</a>
                                        <a href="{{ route('question.destroy', base64_encode($question->id)) }}" onclick="javascript:return confirm('Are you sure to delete question - {{$question->title}} ?');">Delete</a>
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
