@extends('frontend.layouts.master')

@section('content')
    <div class="row">

        <!-- [ form-element ] start -->
        <div class="offset-3 offset-md-3 offset-sm-0 col-md-6">
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
                    <h5>Instruction</h5>
                </div>
                <div class="card-body">
                    <h6><i class="feather icon-info text-warning"></i> Kindly read instruction before starting test</h6>
                    <hr>
                    <div class="row">
                        <div class="col-md-12">
                            <ol type="1">
                                <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</li>
                                <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</li>
                                <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</li>
                                <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</li>
                            </ol>
                        </div>
                        <div class="col-md-12 text-center"  style="margin-top: 25px;">
                            <h3 class="text-info">All The Best!</h3>
                        </div>
                        <div class="col-md-12 text-center"  style="margin-top: 25px;">
                            <form action="{{ route('aptitude.start_test') }}" method="post">
                                @csrf
                                <button type="submit" class="btn btn-glow-danger btn-danger btn-lg">Start Test</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- [ form-element ] end -->
    </div>
@endsection

