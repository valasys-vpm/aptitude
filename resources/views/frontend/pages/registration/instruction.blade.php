@extends('frontend.layouts.master')

@section('content')
    <div class="row bg-dark">
        <!-- [ form-element ] start -->
        <div class="offset-3 offset-md-3 offset-sm-0 col-md-6" style="padding-top: 30px;">
            @if(session('success'))
            <div class="alert alert-success" role="alert">
                Registration Successful!
            </div>
            @endif
            @if(session('error'))
            <div class="alert alert-danger" role="alert">
                Something went wrong, please contact support !
            </div>
            @endif
            <div class="card">
                <div class="card-header">
                    <h5 class="text-danger" style="font-weight: 600 !important;">Instructions</h5>
                </div>
                <div class="card-body">
                    <h6 style="font-weight: 600 !important;"><i class="feather icon-info text-warning"></i> Kindly read instruction before starting test</h6>
                    <hr>
                    <div class="row">
                        <div class="col-md-12">
                            <ol type="1">
                                <li class="pb-1">Total Number of Questions - {{ session('registered_user')->designation->number_of_question }}</li>
                                <li class="pb-1">Time Limit - {{ session('registered_user')->designation->test_duration }} Minutes. (It will appear on the right top of the page)</li>
                                <li class="pb-1">Please do not refresh page once you begin the test.</li>
                                <li class="pb-1">Passing score should be &gt;=85%</li>
                                <li class="pb-1" style="font-weight: 600;">Please click below to start the Aptitude Test.</li>
                            </ol>
                        </div>
                        <div class="col-md-12 text-center"  style="margin-top: 25px;">
                            <h3 class="text-info">All The Best!</h3>
                        </div>
                        <div class="col-md-12 text-center"  style="margin-top: 25px;">
                            <form action="{{ route('aptitude.start_test') }}" method="post">
                                @csrf
                                <button type="submit" class="btn btn-glow-danger btn-danger btn-lg">START</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- [ form-element ] end -->
    </div>
@endsection

