@extends('frontend.layouts.master')

@section('content')
    <div class="row">
        <form id="form-test" action="{{ route('aptitude.test.submit') }}" method="post" class="col-md-12 row">
            @csrf
            @php
            $i = 1;
            @endphp
            @foreach(session()->get('resultQuestions') as $question)
            <div class="offset-2 offset-md-2 offset-sm-0 col-md-8 col-sm-12">
                <div class="card card-border-c-blue">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-md-1">
                                <span class="text-secondary">{{ $i }})</span>
                            </div>
                            <div class="col-md-11">
                                <span class="text-secondary">{!! $question->question !!}</span>
                            </div>
                        </div>
                    </div>
                    <div class="card-block card-task">
                        <div class="row">
                            <div class="col-sm-12">
                                <ol type="A" class="task-detail">
                                @foreach($question->options as $option)
                                    <li>
                                        <div class="form-group">
                                            <div class="radio radio-primary d-inline">
                                                <input type="radio" name="answer[{{ $question->id }}]" value="{{ $option->id }}" id="option_{{ $question->id }}_{{ $option->id }}">
                                                <label for="option_{{ $question->id }}_{{ $option->id }}" class="cr">{{ $option->option }}</label>
                                            </div>
                                        </div>
                                    </li>
                                @endforeach
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
                @php $i++; @endphp
            @endforeach
            <div class="offset-2 offset-md-2 offset-sm-0 col-md-8 col-sm-12">
                <div class="card card-border-c-blue">

                    <div class="card-block card-task">
                        <div class="task-board">
                            <button  type="submit" class="btn btn-primary btn-sm float-right">Submit</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection

@section('javascript')
    @parent


    <script>
        // Set the date we're counting down to
        var year = '';
        var month = '{{ date('m', strtotime(session()->get('registered_user')->test_start_time)) }}';
        var day = '{{ date('d', strtotime(session()->get('registered_user')->test_start_time)) }}';
        var hours = '{{ date('H', strtotime(session()->get('registered_user')->test_start_time)) }}';
        var minutes = '{{ date('i', strtotime(session()->get('registered_user')->test_start_time)) }}';
        var seconds = '{{ date('s', strtotime(session()->get('registered_user')->test_start_time)) }}';

        //var newDate = new Date(year, month, day, hours, minutes, seconds);
        var newDate = new Date("{{ date('M d, Y H:i:s', strtotime(session()->get('registered_user')->test_start_time)) }}");

        var d = new Date(newDate.getTime() + {{ session()->get('resultDesignation')->test_duration }}*60000);

        var countDownDate = new Date(d).getTime();

        var now = new Date("{{ date('M d, Y H:i:s') }}").getTime();
        // Update the count down every 1 second

        $( document ).ready(function() {
            var x = setInterval(function() {

                // Get todays date and time
                var now = new Date("{{ date('M d, Y H:i:s') }}").getTime();

                // Find the distance between now and the count down date
                var distance = countDownDate - now;

                // Time calculations for days, hours, minutes and seconds
                var days = Math.floor(distance / (1000 * 60 * 60 * 24));
                var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
                var seconds = Math.floor((distance % (1000 * 60)) / 1000);

                // Output the result in an element with id="demo"
                document.getElementById("timer").innerHTML = "<b>" + minutes + "</b>m : <b>" + seconds + "</b>s ";

                // If the count down is over, write some text
                if (distance < 0) {
                    clearInterval(x);
                    document.getElementById("timer").innerHTML = "TIME EXPIRED";
                    $("#form-test").submit();
                    return false;
                }

            }, 1000);
        });


    </script>
@append
