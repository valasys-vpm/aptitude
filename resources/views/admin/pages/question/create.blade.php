@extends('admin.layouts.master')

@section('style')
    <style>
        .ck-editor__editable_inline {
            min-height: 130px !important;
        }
    </style>
@endsection

@section('content')
    <div class="row">
        <!-- [ form-element ] start -->
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header">
                    <h5>Questions</h5>
                </div>
                <div class="card-body">
                    <h5>Add new question</h5>
                    <hr>
                    <div class="row">
                        <div class="col-md-12">
                            <form action="{{ route('question.store') }}" method="post">
                                @csrf

                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <label for="question">Designations</label>
                                        <select class="form-control" id="destignation" name="designation_id" required>
                                            <option value="">-- Select Designation --</option>
                                            @forelse($resultDesignations as $designation)
                                                <option value="{{ $designation->id }}">{{ $designation->title }}</option>
                                            @empty
                                            @endforelse
                                        </select>
                                    </div>

                                    <div class="form-group col-md-12">
                                        <label for="question">Question</label>
                                        <textarea class="form-control" id="question" name="question" placeholder="Question..."></textarea>
                                    </div>

                                    <div class="col-md-12">
                                        <label for="options">Options</label>
                                    </div>

                                    <div id="options" class="col-md-12 row">
                                        <div id="div_option_1" class="form-group col-md-12 option">
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <div class="input-group-text">
                                                        <input type="radio" name="answer" value="1" required>
                                                    </div>
                                                </div>
                                                <input type="text" class="form-control" name="options[1]" placeholder="Options..." required>
                                                <div class="input-group-append">
                                                    <div class="input-group-text">
                                                        <button type="button" class="btn btn-icon btn-outline-danger btn-sm btn_remove_option" style="width: 30px;height: 30px;padding: 0px;">
                                                            <i class="fas fa-times"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div id="div_option_2" class="form-group col-md-12 option">
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <div class="input-group-text">
                                                        <input type="radio" name="answer" value="2" required>
                                                    </div>
                                                </div>
                                                <input type="text" class="form-control" name="options[2]" placeholder="Options..." required>
                                                <div class="input-group-append">
                                                    <div class="input-group-text">
                                                        <button type="button" class="btn btn-icon btn-outline-danger btn-sm btn_remove_option" style="width: 30px;height: 30px;padding: 0px;">
                                                            <i class="fas fa-times"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-6 form-group">
                                        <button type="button" class="btn btn-info btn-sm btn_add_option"> + Add Option </button>
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

@section('javascript')
    @parent
    <!-- Ckeditor js -->
    <script src="{{ asset('public/template')}}/assets/plugins/ckeditor/js/ckeditor.js"></script>

    <script type="text/javascript">
        $(window).on('load', function() {
            // classic editor
            ClassicEditor.create(document.querySelector('#question'))
                .catch(error => {
                    //console.error(error);
                });
        });
    </script>

    <script type="text/javascript">


        /* Add Options */
        $("body").on("click", ".btn_add_option", function(){
            addOption();
        });

        $("body").on("click", ".btn_remove_option", function(){
            removeOption(this);
        });

        function addOption()
        {
            var no_of_option = $("#options").children('div.option').length;

            var html_option = '<div id="div_option_'+ (no_of_option+1) +'" class="form-group col-md-12 option">' +
            '                                            <div class="input-group">' +
            '                                                <div class="input-group-prepend">' +
            '                                                    <div class="input-group-text">' +
            '                                                        <input type="radio" name="answer" value="'+ (no_of_option+1) +'" required>' +
            '                                                    </div>' +
            '                                                </div>' +
            '                                                <input type="text" class="form-control" name="options['+ (no_of_option+1) +']" placeholder="Options..." required>' +
            '                                                <div class="input-group-append">' +
            '                                                    <div class="input-group-text">' +
            '                                                        <button type="button" class="btn btn-icon btn-outline-danger btn-sm btn_remove_option" style="width: 30px;height: 30px;padding: 0px;">' +
            '                                                            <i class="fas fa-times"></i>' +
            '                                                        </button>' +
            '                                                    </div>' +
            '                                                </div>' +
            '                                            </div>' +
            '                                        </div>';
            $('body').find("#options").append(html_option);
        }

        function removeOption(_this)
        {
            var no_of_option = $("#options").children('div.option').length;
            if(no_of_option > 2) {
                if(confirm('Are you sure to remove option ?') == true) {
                    $(_this).parents('div.option').remove();
                }
            } else {
                alert('Warning: At least two option must be there.');
            }
            return true;
        }
    </script>
@append

