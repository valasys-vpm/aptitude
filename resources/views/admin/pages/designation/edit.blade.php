@extends('admin.layouts.master')

@section('content')
    <div class="row">
        <!-- [ form-element ] start -->
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header">
                    <h5>Designations</h5>
                </div>
                <div class="card-body">
                    <h5>Edit designation</h5>
                    <hr>
                    <div class="row">
                        <div class="col-md-12">
                            <form action="{{ route('designation.update', base64_encode($resultDesignation->id)) }}" method="post">
                                @csrf
                                <input type="hidden" name="id" value="{{ base64_encode($resultDesignation->id) }}">
                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <label for="title">Title</label>
                                        <input type="text" class="form-control" id="title" name="title" placeholder="Title" required value="{{ $resultDesignation->title }}">
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label for="number_of_question">Number of Question(s) <span class="text-danger">*</span></label>
                                        <input type="number" class="form-control" id="number_of_question" name="number_of_question" placeholder="Number of Question(s)" required value="{{ $resultDesignation->number_of_question }}">
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label for="test_duration">Test Duration <span class="text-danger">*</span> <small>(In minutes)</small></label>
                                        <input type="number" class="form-control" id="test_duration" name="test_duration" placeholder="Test Duration" required value="{{ $resultDesignation->test_duration }}">
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label for="passing_marks">Passing Marks <span class="text-danger">*</span></label>
                                        <input type="number" class="form-control" id="passing_marks" name="passing_marks" placeholder="Passing Marks" required value="{{ $resultDesignation->passing_marks }}">
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label for="title">Status</label>
                                        <select class="form-control" id="status" name="status" required>
                                            <option value="1">Active</option>
                                            <option value="0">Inactive</option>
                                        </select>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary">Update</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('javascript')
    @parent
    <script type="text/javascript">
        $("#status").val('{{ $resultDesignation->status }}');
    </script>
@append
