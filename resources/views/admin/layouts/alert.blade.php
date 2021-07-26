@if(session('success'))
    <div class="alert alert-success alert-dismissible fade show alert-auto-dismiss" role="alert">
        <strong>Success!</strong> {{ session('success') }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
    </div>
@endif
@if(session('error'))
    <div class="alert alert-danger alert-dismissible fade show alert-auto-dismiss" role="alert">
        <strong>Error!</strong> {{ session('error') }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
    </div>
@endif
@if(session('info'))
    <div class="alert alert-info alert-dismissible fade show alert-auto-dismiss" role="alert">
        <strong>Info:</strong> {{ session('info') }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
    </div>
@endif
@if(session('warning'))
    <div class="alert alert-warning alert-dismissible fade show alert-auto-dismiss" role="alert">
        <strong>Warning:</strong> {{ session('warning') }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
    </div>
@endif
