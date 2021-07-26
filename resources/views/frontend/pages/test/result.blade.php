@extends('frontend.layouts.master')

@section('content')
    <div class="row">

        <!-- [ form-element ] start -->
        <div class="offset-3 offset-md-3 offset-sm-0 col-md-6">
            @if(session('success'))
                <div class="alert alert-success" role="alert">
                    Thank You!
                </div>
            @endif
            @if(session('error'))
                <div class="alert alert-danger" role="alert">
                    Something went wrong, please contact support !
                </div>
            @endif
            <div class="card Active-visitor">
                <div class="card-block text-center">
                    <h5 class="mb-4">Result</h5>
                    <i class="fas fa-check f-30 text-c-green"></i>
                    <h3 class="f-w-300 mt-3">Thank You!</h3>
                    <span class="text-muted">{{ $resultRegistration->first_name.' '.$resultRegistration->last_name  }} | {{ $resultRegistration->email  }}</span>

                    <div class="row">
                        <div class="offset-2 col-md-8">
                            <div class="progress mt-4 m-b-40">
                                <div class="progress-bar progress-c-theme" role="progressbar" style="width: 100%; height:7px;" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>

                            <div class="text-left leads-progress mt-3">
                                <h6 class="text-muted f-w-300 mt-4">Position <span class="float-right">{{ $resultRegistration->designation->title }}</span></h6>
                                <h6 class="text-muted f-w-300 mt-4">Number of Question <span class="float-right">{{ $resultRegistration->designation->number_of_question }}</span></h6>
                                <h6 class="text-muted f-w-300 mt-4">Attempted <span class="float-right">{{ $attempted }}</span></h6>
                                <h6 class="text-muted f-w-300 mt-4">Total Marks <span class="float-right">{{ $resultRegistration->designation->number_of_question }}</span></h6>
                                <h4 class="f-w-400 mt-4 mb-0 text-info">Obtained Marks <span class="float-right">{{ $total_marks }}</span></h4>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!-- [ form-element ] end -->
    </div>
@endsection
