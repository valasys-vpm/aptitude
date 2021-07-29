@extends('frontend.layouts.master')

@section('content')
    <div class="row bg-dark">
        <!-- [ form-element ] start -->
        <div class="offset-3 offset-md-3 offset-sm-0 col-md-6" style="padding-top: 30px;">
            <div class="card">
                <div class="card-header">
                    <h5>Registration</h5>
                </div>
                <div class="card-body">
                    <h5><small>Fields with <span class="text-danger">*</span> are mandatory.</small></h5>
                    <hr>
                    <div class="row">
                        <div class="offset-2 col-md-8">
                            <form action="{{ route('aptitude.register.submit') }}" method="post">
                                @csrf
                                <div class="form-group">
                                    <label for="first_name">First Name <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="first_name" name="first_name" placeholder="First name" required>
                                </div>
                                <div class="form-group">
                                    <label for="last_name">Last Name <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="last_name" name="last_name" placeholder="Last name" required>
                                </div>
                                <div class="form-group">
                                    <label for="email">Email address <span class="text-danger">*</span></label>
                                    <input type="email" class="form-control" id="email" name="email" placeholder="Email" required>
                                </div>
                                <div class="form-group">
                                    <label for="mobile">Mobile <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="mobile" name="mobile" placeholder="Mobile" required>
                                </div>
                                <div class="form-group">
                                    <label for="designation_id">Position for apply <span class="text-danger">*</span></label>
                                    <select class="custom-select" id="designation_id"name="designation_id" required>
                                        <option value="">-- Select Position --</option>
                                        @foreach($resultDesignations as $designation)
                                        <option value="{{ $designation->id }}">{{ $designation->title }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="current_ctc">Current CTC</label>
                                    <input type="text" class="form-control" id="current_ctc" name="current_ctc" placeholder="Current CTC">
                                </div>
                                <div class="form-group">
                                    <label for="expected_ctc">Expected CTC <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="expected_ctc" name="expected_ctc" placeholder="Expected CTC" required>
                                </div>
                                <div class="form-group">
                                    <label for="can_join_in">If selected, how soon you can join ?<span class="text-danger">*</span></label>
                                    <select class="custom-select" id="can_join_in"name="can_join_in" required>
                                        <option value="">-- Select Days --</option>
                                        <option value="In 7 Days">In 7 Days</option>
                                        <option value="In 15 Days">In 15 Days</option>
                                        <option value="In 1 Month">In 1 Month</option>
                                    </select>
                                </div>

                                <button type="submit" class="btn btn-primary float-right">Submit</button>
                            </form>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!-- [ form-element ] end -->
    </div>
@endsection
