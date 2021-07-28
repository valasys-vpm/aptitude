@extends('admin.layouts.master')

@section('content')
    <div class="row">

        <!-- [ form-element ] start -->
        <div class="offset-3 offset-md-3 offset-sm-0 col-md-6">

            <div class="card Active-visitor">
                <div class="card-block text-center">
                    <h5 class="mb-4">Result</h5>
                    <i class="fas fa-check f-30 text-c-green"></i>
                    <h3 class="f-w-300 mt-3"></h3>
                    <span class="text-muted">{{ $resultRegistration->first_name . ' ' . $resultRegistration->last_name }}
                        |
                        {{ $resultRegistration->email }} | {{ $resultRegistration->mobile }}</span>

                    <div class="row">
                        <div class="offset-2 col-md-8">
                            <div class="progress mt-4 m-b-40">
                                <div class="progress-bar progress-c-theme" role="progressbar"
                                    style="width: 100%; height:7px;" aria-valuenow="100" aria-valuemin="0"
                                    aria-valuemax="100"></div>
                            </div>

                            <div class="text-left leads-progress mt-3">
                                <h6 class="text-muted f-w-300 mt-4">Position <span
                                        class="float-right">{{ $resultRegistration->designation->title }}</span></h6>
                                <h6 class="text-muted f-w-300 mt-4">Current CTC <span
                                        class="float-right">{{ $resultRegistration->current_ctc }}</span></h6>
                                <h6 class="text-muted f-w-300 mt-4">Expected CTC <span
                                        class="float-right">{{ $resultRegistration->expected_ctc }}</span></h6>
                                <h6 class="text-muted f-w-300 mt-4">Can Join In<span
                                        class="float-right">{{ $resultRegistration->can_join_in }}</span></h6>
                               <hr>
                                <h6 class="text-muted f-w-300 mt-4">Number of Question <span
                                        class="float-right">{{ $resultRegistration->designation->number_of_question }}</span>
                                </h6>
                                <h6 class="text-muted f-w-300 mt-4">Attempted <span
                                        class="float-right">{{ $resultRegistration->attempted }}</span></h6>
                                <h6 class="text-muted f-w-300 mt-4">Total Marks <span
                                        class="float-right">{{ $resultRegistration->designation->number_of_question }}</span>
                                </h6>
                                <h4 class="f-w-400 mt-4 mb-0 text-info">Obtained Marks <span
                                        class="float-right">{{ $resultRegistration->total_marks }}</span>
                                </h4>
                                <hr>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!-- [ form-element ] end -->
    </div>

@endsection
