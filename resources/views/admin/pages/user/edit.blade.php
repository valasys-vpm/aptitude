@extends('admin.layouts.master')

@section('content')
    <div class="row">
        <!-- [ form-element ] start -->
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header">
                    <h5>User</h5>
                </div>
                <div class="card-body">
                    <h5>Edit user</h5>
                    <hr>
                    <div class="row">
                        <div class="col-md-12">
                            <form action="{{ route('user.update', base64_encode($resultUser->id)) }}" method="post">
                                @csrf
                                <input type="hidden" name="id" value="{{ base64_encode($resultUser->id) }}">
                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <label for="name">Name</label>
                                        <input type="text" class="form-control" id="name" name="name" placeholder="Name" required value="{{ $resultUser->name }}">
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label for="email">Email Id <span class="text-danger">*</span></label>
                                        <input type="email" class="form-control" id="email" name="email" placeholder="Email" required value="{{ $resultUser->email }}">
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
        $("#status").val('{{ $resultUser->status }}');
    </script>
@append
