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
                    <h5>Add new designation</h5>
                    <hr>
                    <div class="row">
                        <div class="col-md-12">
                            <form action="{{ route('designation.store') }}" method="post">
                                @csrf
                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <label for="title">Title <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" id="title" name="title" placeholder="Title" required>
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label for="number_of_question">Number of Question(s) <span class="text-danger">*</span></label>
                                        <input type="number" class="form-control" id="number_of_question" name="number_of_question" placeholder="Number of Question(s)" required>
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label for="test_duration">Test Duration <span class="text-danger">*</span> <small>(In minutes)</small></label>
                                        <input type="number" class="form-control" id="test_duration" name="test_duration" placeholder="Test Duration" required>
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label for="passing_marks">Passing Marks <span class="text-danger">*</span></label>
                                        <input type="number" class="form-control" id="passing_marks" name="passing_marks" placeholder="Passing Marks" required>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary">Save</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
